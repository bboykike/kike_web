var res;
var Table;
var equipos = [];
$(document).ready(() => {

    getContentEquipos();
    initializeComponentsSuc();


});

async function getContentEquipos() {
    let subEquipos = [];
    await $.ajax({
        type: 'GET',
        url: '../funciones/equipos/tableEquipos.php',
        success: response => {
            equipos = JSON.parse(response);
            equipos.forEach(element => {

                subEquipos.push(element);
            })
        }
    })
    printTable(subEquipos);
}

function printTable(res) {
    Table = $("#idTableEquipos").DataTable({
        rowId: "id_equipo",
        data: res,
        columns: [{
            data: "Nombre",
        },
        {
            data: "TipoEquipo",
        },
        {
            data: "Marca",
        },
        {
            data: "Modelo"
        },
        {
            data: "NoSerie"
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
                return editarEquipo(data);
            },
        }
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
        createdRow: function (row, data, index) {
            $(row).css("text-align", "left");
        },
    });
}




//Metodos para cargar combos
async function CargarCombos() {
    let dataEmpleados;
    await $.ajax({
        type: "GET",
        url: "../funciones/equipos/cargarSucursales.php",
        success: (res) => {
            dataEmpleados = JSON.parse(res);
        },
    });
    return dataEmpleados;
}

async function initializeCreateModalComponents(
    sucursales, sucursal2
) {
    $("#id_sucursales").select2({
        placeholder: "Seleccione una sucursal",
        data: sucursales,
        width: "100%",
    });

    $("#id_sucursal2").select2({
        placeholder: "Seleccione una sucursal",
        data: sucursal2,
        width: "100%",
    });
}

function initializeComponentsSuc() {
    initializeModalsComponents();
}

async function initializeModalsComponents() {
    var sucursal = [{ id: 0, text: "Seleccione una sucursal" }];
    var sucursal2 = [{ id: 0, text: "Seleccione una sucursal" }];


    var data;
    data = await CargarCombos();

    sucursal = processEmpleadosData(data[0]);

    initializeCreateModalComponents(sucursal, sucursal2);
}

// funcion para cargar los datos en el combo de empleados
function processEmpleadosData(sucursales) {
    let data = [{ id: 0, text: "Seleccione una sucursal" }];
    sucursales.forEach((sucursal) => {
        let sucursalSelect = {
            id: sucursal.id_sucursal,
            text: sucursal.Nombre,
        };

        data.push(sucursalSelect);
    });
    return data;
}



function estatusRender(data) {
    switch (data.estatus_equipo) {
        case "activo":
            return "<span class='label label-success'>Activo</span>";
            break;
        default:
            return "<span class='label label-danger'>Inactivo</span>";
    }
}



function editarEquipo(data) {
    let datos =
        '"' +
        data.id_equipo +
        "||" +
        data.id_sucursal +
        "||" +
        data.TipoEquipo +
        "||" +
        data.Marca +
        "||" +
        data.Modelo +
        "||" +
        data.NoSerie +
        "||" +
        data.estatus_equipo +
        '"';
    return (
        "<div class='btn-group dropdown'>" +
        "    <a href='javascript: void(0);' class='table-action-btn dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-horizontal'></i></a>" +
        "    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
        "        <a class='dropdown-item' href='#' data-backdrop='static' data-toggle='modal' onclick='modalEditarEquipo(" +
        datos +
        ");' ><i class='mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle'></i>Editar Equipo</a>" +
        "    </div>" +
        "</div>"
    );
}

// funcion para enviar los datos al modal al abrirce
function modalEditarEquipo(data) {
    d = data.split("||");
    e = d[1].split(" ");
    console.log(d);

    var id = d[0];
    var id_suc = d[1];
    var Tipo = d[2];
    var marca = d[3];
    var modelo = d[4];
    var nuSerie = d[5];
    var estatus = d[6];



    document.getElementById("id_e").value = id;
    $("#id_sucursal2").val(id_suc);
    $("#id_sucursal2").attr("selected", "selected");
    $("#id_sucursal2").val(id_suc).trigger("change");
    document.getElementById("TipoEquipo2").value = Tipo;
    document.getElementById("Marca2").value = marca;
    document.getElementById("Modelo2").value = modelo;
    document.getElementById("NoSerie2").value = nuSerie;
    document.getElementById("estatus3").value = estatus;



    if (estatus == "activo") {

        document.getElementById("estatusEquipo").checked = true;
        document.getElementById("label_estatus4").innerHTML = "Activo";

    } else {

        document.getElementById("estatusEquipo").checked = false;
        document.getElementById("label_estatus4").label_estatus = "Inactivo";

    }


    $("#UpEquipo").modal({
        backdrop: "static",
        show: true,
    });
}

function cambiarValor3() {
    activo = document.getElementById("estatusEquipo").checked;

    if (activo == true) {
        document.getElementById("label_estatus4").innerHTML = "Activo";
        document.getElementById("estatus3").value = "activo";
    } else {
        document.getElementById("label_estatus4").innerHTML = "Inactivo";
        document.getElementById("estatus3").value = "inactivo";
    }
}
