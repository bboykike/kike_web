var res;
var Table;
var Sucursal = [];
$(document).ready(() => {
    getContentSucursal();
    initializeComponentsSelect();
});

async function getContentSucursal() {
    let subSucursal = [];
    await $.ajax({
        type: "GET",
        url: "../funciones/sucursal/tableSucursal.php",
        success: (response) => {
            Sucursal = JSON.parse(response);
            Sucursal.forEach((element) => {
                subSucursal.push(element);
            });
        },
    });
    printTable(subSucursal);
}

function printTable(res) {
    Table = $("#idTableSucursal").DataTable({
        rowId: "id_sucursal",
        data: res,
        columns: [{
                data: "Nombre",
            },
            {
                data: "nombre_cliente",
            },
            {
                data: "Direccion",
            },
            {
                data: null,
                className: "estatus",
                render: function(data, type, row) {
                    return estatusRender(data);
                },
            },
            {
                data: null,
                className: "acciones",
                render: function(data, type, row) {
                    return editarSucursal(data);
                },
            },
        ],
        language: {
            search: "Buscar:",
            lengthMenu: "Mostrando _MENU_ registros por pagina",
            zeroRecords: "Sin datos",
            info: "",
            infoEmpty: "Sin registros",
            infoFiltered: "(filtrados de MAX)",
            paginate: {
                first: "Primero",
                previous: "Anterior",
                next: "Siguiente",
                last: "Último",
            },
        },
    });
}

async function CargarCombos() {
    let dataClientes;
    await $.ajax({
        type: "GET",
        url: "../funciones/servicios/cargarSelectSe.php",
        success: (res) => {
            dataClientes = JSON.parse(res);
        },
    });
    // console.log(dataEmplados);
    return dataClientes;
}

async function initializeCreateModalComponents(clientes, clientes2) {
    $("#id_cliente2").select2({
        placeholder: "Seleccione un cliente",
        data: clientes,
        width: "100%",
    });

    $("#id_cliente3").select2({
        placeholder: "Seleccione un cliente",
        data: clientes2,
        width: "100%",
    });
}

function initializeComponentsSelect() {
    initializeModalsComponentsSe();
}

async function initializeModalsComponentsSe() {
    var clientes = [{ id: 0, text: "Seleccione un cliente" }];
    var clientes2 = [{ id: 0, text: "Seleccione un cliente" }];

    var data;
    data = await CargarCombos();

    clientes = processClientesData(data[0]);

    initializeCreateModalComponents(clientes, clientes2);
}

function processClientesData(clientes) {
    let data = [{ id: 0, text: "Seleccione un cliente" }];
    clientes.forEach((clientes) => {
        let clientesSelect = {
            id: clientes.id_cliente,
            text: clientes.NombreCliente + " " + clientes.ApellidoCliente,
        };

        data.push(clientesSelect);
    });
    return data;
}

function estatusRender(data) {
    switch (data.estatus_sucursal) {
        case "activo":
            return "<span class='label label-success'>Activa</span>";
            break;
        default:
            return "<span class='label label-danger'>Inactiva</span>";
    }
}

function editarSucursal(data) {
    let datos =
        '"' +
        data.id_sucursal +
        "||" +
        data.Nombre +
        "||" +
        data.Direccion +
        "||" +
        data.id_cliente +
        "||" +
        data.estatus_sucursal +
        "||" +
        '"';
    return (
        "<div class='btn-group dropdown'>" +
        "    <a href='javascript: void(0);' class='table-action-btn dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-horizontal'></i></a>" +
        "    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
        "        <a class='dropdown-item' href='#' data-backdrop='static' data-toggle='modal' onclick='modalEditarSucursal(" +
        datos +
        ");' ><i class='mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle'></i>Editar Sucursal</a>" +
        "    </div>" +
        "</div>"
    );
}

// funcion para enviar los datos al modal al abrirce
function modalEditarSucursal(data) {
    d = data.split("||");
    e = d[1].split(" ");

    var id_sucursal = d[0];
    var nombre = d[1];
    var direccion = d[2];
    var id_cliente = d[3];
    var estatus = d[4];

    document.getElementById("id_sucursal").value = id_sucursal;
    document.getElementById("nombre2").value = nombre;
    document.getElementById("direccion2").value = direccion;
    document.getElementById("id_cliente3").value = id_cliente;
    document.getElementById("es").value = estatus;

    if (estatus == "activo") {
        document.getElementById("estatus3").checked = true;
        document.getElementById("label_estatus2").innerHTML = "Activo";
        document.getElementById("es").value = "activo";
    } else {
        document.getElementById("estatus3").checked = false;
        document.getElementById("label_estatus2").innerHTML = "Inactivo";
        document.getElementById("es").value = "inactivo";
    }

    $("#UpSucursal").modal({
        backdrop: "static",
        show: true,
    });
}

function cambiarValor() {
    activo = document.getElementById("estatus3").checked;

    if (activo == true) {
        document.getElementById("label_estatus2").innerHTML = "Activo";
        document.getElementById("es").value = "activo";
    } else {
        document.getElementById("label_estatus2").innerHTML = "Inactivo";
        document.getElementById("es").value = "inactivo";
    }
}