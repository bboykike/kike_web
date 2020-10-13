var res;
var Table;
var accesorios = [];
$(document).ready(() => {
    getContentAccesorios();
    initializeComponentEquipo();

});

async function getContentAccesorios() {
    let subAccesorios = [];
    await $.ajax({
        type: "GET",
        url: "../funciones/accesorios/tableAccesorios.php",
        success: (response) => {
            accesorios = JSON.parse(response);
            accesorios.forEach((element) => {
                subAccesorios.push(element);
            });
        },
    });
    printTable(subAccesorios);
}

function printTable(res) {
    Table = $("#idTableAccesorios").DataTable({
        rowId: "id_accesorio",
        data: res,
        columns: [{
            data: "TipoEquipo",
        },
        {
            data: "Nombre",
        },
        {
            data: "Marca",
        },
        {
            data: "NoSerie",
        },
        {
            data: null,
            className: "estatus",
            render: function (data, type, row) {
                return estatusRender(data);
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
    });
}

// ,
//         {
//             data: null,
//             className: "acciones",
//             render: function (data, type, row) {
//                 return editarAccesorios(data);
//             },
//         },

function estatusRender(data) {
    switch (data.estatus_accesorio) {
        case "activo":
            return "<span class='label label-success'>Activo</span>";
            break;
        default:
            return "<span class='label label-danger'>Inactivo</span>";
    }
}


function editarAccesorios(data) {
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

//Metodos para cargar combos
async function CargarCombos() {
    let dataEequipos;
    await $.ajax({
        type: "GET",
        url: "../funciones/accesorios/cargarEquipo.php",
        success: (res) => {
            dataEequipos = JSON.parse(res);
        },
    });
    return dataEequipos;
}

async function initializeCreateModalComponents(
    equipos
) {
    $("#id_equipo").select2({
        placeholder: "Seleccione un equipp",
        data: equipos,
        width: "100%",
    });

    // $("#id_equipo2").select2({
    //     placeholder: "Seleccione un equipp",
    //     data: sucursal2,
    //     width: "100%",
    // });
}

function initializeComponentEquipo() {
    initializeModalsComponents();
}

async function initializeModalsComponents() {
    var equipo = [{ id: 0, text: "Seleccione un equipo" }];
    // var sucursal2 = [{ id: 0, text: "Seleccione una sucursal" }];


    var data;
    data = await CargarCombos();

    equipo = processEmpleadosData(data[0]);

    initializeCreateModalComponents(equipo);
}

// funcion para cargar los datos en el combo de empleados
function processEmpleadosData(equipos) {
    let data = [{ id: 0, text: "Seleccione un equipo" }];
    equipos.forEach((equipo) => {
        let sequipoSelect = {
            id: equipo.id_equipo,
            text: equipo.TipoEquipo,
        };

        data.push(sequipoSelect);
    });
    return data;
}