var res;
var Table;
var clientes = [];
$(document).ready(() => {
    getContentClientes();

    initializeComponentsSelect();
});

async function getContentClientes() {
    let subClientes = [];
    await $.ajax({
        type: "GET",
        url: "../funciones/clientes/tableClientes.php",
        success: (response) => {
            clientes = JSON.parse(response);
            clientes.forEach((element) => {
                subClientes.push(element);
            });
        },
    });
    printTable(subClientes);
}

function printTable(res) {
    Table = $("#idTableClientes").DataTable({
        rowId: "id_cliente",
        data: res,
        columns: [{
            data: "RFC",
        },
        {
            data: "cliente",
        },
        {
            data: "Telefono",
        },
        {
            data: "Celular",
        },
        {
            data: "Email",
        },
        {
            data: "Estado",
        },
        {
            data: null,
            className: "estatus",
            render: function (data, type, row) {
                return estatusRender(data);
            },
        },
        {
            data: null,
            className: "acciones",
            render: function (data, type, row) {
                return editarCliente(data);
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

function estatusRender(data) {
    switch (data.estatus_cliente) {
        case "activo":
            return "<span class='label label-success'>Activo</span>";
            break;
        default:
            return "<span class='label label-danger'>Inactivo</span>";
    }
}

function editarCliente(data) {
    let datos =
        '"' +
        data.id_cliente +
        "||" +
        data.NombreCliente +
        "||" +
        data.ApellidoCliente +
        "||" +
        data.Contacto +
        "||" +
        data.Telefono +
        "||" +
        data.Celular +
        "||" +
        data.Estado +
        "||" +
        data.Ciudad +
        "||" +
        data.Direccion +
        "||" +
        data.Cp +
        "||" +
        data.Observaciones +
        "||" +
        data.Email +
        "||" +
        data.estatus_cliente +
        "||" +
        data.RFC +
        '"';
    return (
        "<div class='btn-group dropdown'>" +
        "    <a href='javascript: void(0);' class='table-action-btn dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-horizontal'></i></a>" +
        "    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
        "        <a class='dropdown-item' href='#' data-backdrop='static' data-toggle='modal' onclick='modalEditarClientes(" +
        datos +
        ");' ><i class='mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle'></i>Editar Cliente</a>" +
        "    </div>" +
        "</div>"
    );
}

// funcion para enviar los datos al modal al abrirce
function modalEditarClientes(data) {
    d = data.split("||");
    e = d[1].split(" ");

    var id = d[0];
    var nombre = d[1];
    var apellido = d[2];
    var contacto = d[3];
    var telefono = d[4];
    var celular = d[5];
    var estado = d[6];
    var cuidad = d[7];
    var direccion = d[8];
    var cp = d[9];
    var observaciones = d[10];
    var correo = d[11];
    var estatus = d[12];
    var rfc = d[13];

    console.log(estatus);

    document.getElementById("id_cliente").value = id;
    document.getElementById("RFC2").value = rfc;
    document.getElementById("NombreCliente2").value = nombre;
    document.getElementById("ApellidoCliente2").value = apellido;
    document.getElementById("Contacto2").value = contacto;
    document.getElementById("Telefono2").value = telefono;
    document.getElementById("Celular2").value = celular;
    document.getElementById("Estado2").value = estado;
    document.getElementById("Cuidad2").value = cuidad;
    document.getElementById("Direccion2").value = direccion;
    document.getElementById("Cp2").value = cp;
    document.getElementById("Observaciones2").value = observaciones;
    document.getElementById("Email2").value = correo;
    document.getElementById("estatus2").value = estatus;

    if (estatus == "activo") {

        document.getElementById("estatus").checked = true;
        document.getElementById("label_estatus").innerHTML = "Activo";

    } else {

        document.getElementById("estatus").checked = false;
        document.getElementById("label_estatus").label_estatus = "Inactivo";

    }

    $("#updateClientes").modal({
        backdrop: "static",
        show: true,
    });
}

function cambiarValor() {
    activo = document.getElementById("estatus").checked;

    if (activo == true) {
        document.getElementById("label_estatus").innerHTML = "Activo";
        document.getElementById("estatus2").value = "activo";
    } else {
        document.getElementById("label_estatus").innerHTML = "Inactivo";
        document.getElementById("estatus2").value = "inactivo";
    }
}