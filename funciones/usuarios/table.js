var res;
var Table;
var servicios = [];
$(document).ready(() => {
    getContent();
    initializeComponents();
});
async function getContent() {
    let subServicios = [];
    await $.ajax({
        type: "GET",
        url: "../funciones/usuarios/table.php",
        success: (response) => {
            servicios = JSON.parse(response);
            servicios.forEach((element) => {
                subServicios.push(element);
                $("#id_empleadoEdit").append(element);
            });
        },
    });
    printTable(subServicios);
}

function printTable(res) {
    Table = $("#idTableUsuarios").DataTable({
        rowId: "id_usuario",
        data: res,
        columns: [{
                data: "usuarios",
            },
            {
                data: "nombre_empleado",
            },
            {
                data: "NombreRol",
            },
            {
                data: null,
                className: "acciones",
                render: function(data, type, row) {
                    return editarUsuario(data);
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
        createdRow: function(row, data, index) {
            $(row).css("text-align", "left");
        },
    });
}

function editarUsuario(data) {
    let datos =
        '"' +
        data.id_usuario +
        "||" +
        data.usuarios +
        "||" +
        data.PASS +
        "||" +
        data.id_empleado +
        "||" +
        data.id_rol +
        '"';
    return (
        "<div class='btn-group dropdown'>" +
        "    <a href='javascript: void(0);' class='table-action-btn dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-horizontal'></i></a>" +
        "    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
        "        <a class='dropdown-item' href='#' data-backdrop='static' data-toggle='modal' onclick='modalEditarUsuario(" +
        datos +
        ");' ><i class='mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle'></i>Editar Usuario</a>" +
        "    </div>" +
        "</div>"
    );
}

// funcion para enviar los datos al modal al abrirce
function modalEditarUsuario(data) {
    d = data.split("||");
    e = d[1].split(" ");
    var id_usuario = d[0];
    var user = d[1];
    var pass = d[2];
    var empleado = d[3];
    var rol = d[4];

    document.getElementById("id_usuario").value = id_usuario;
    document.getElementById("UserNameEdit").value = user;
    document.getElementById("contraseniaEdit").value = pass;

    $("#id_empleadoEdit").val(empleado);
    $("#id_empleadoEdit").attr("selected", "selected");
    $("#id_empleadoEdit").val(empleado).trigger("change");

    $("#id_rol2").val(rol);
    $("#id_rol2").attr("selected", "selected");
    $("#id_rol2").val(rol).trigger("change");

    $("#EditarUsuario").modal({
        backdrop: "static",
        show: true,
    });
}

//Metodos para cargar combos
async function CargarCombos() {
    let dataEmpleados;
    await $.ajax({
        type: "GET",
        url: "../funciones/usuarios/cargarSelect.php",
        success: (res) => {
            dataEmpleados = JSON.parse(res);
        },
    });
    return dataEmpleados;
}

async function initializeCreateModalComponents(
    empleados,
    roles,
    empleados2,
    rol2
) {
    $("#id_empleado").select2({
        placeholder: "Seleccione un empleado",
        data: empleados,
        width: "100%",
    });

    $("#id_rol").select2({
        placeholder: "Seleccione un rol",
        data: roles,
        width: "100%",
    });

    $("#id_empleadoEdit").select2({
        placeholder: "Seleccione un empleado",
        data: empleados2,
        width: "100%",
    });

    $("#id_rol2").select2({
        placeholder: "Seleccione un rol",
        data: rol2,
        width: "100%",
    });
}

function initializeComponents() {
    initializeModalsComponents();
}

async function initializeModalsComponents() {
    var empleados = [{ id: 0, text: "Seleccione un empleado" }];
    var roles = [{ id: 0, text: "Seleccione un rol" }];
    var empleados2 = [{ id: 0, text: "Seleccione un empleado" }];
    var roles2 = [{ id: 0, text: "Seleccione un rol" }];

    var data;
    data = await CargarCombos();

    empleados = processEmpleadosData(data[0]);
    roles = processRolData(data[1]);

    initializeCreateModalComponents(empleados, roles, empleados2, roles2);
}

// funcion para cargar los datos en el combo de empleados
function processEmpleadosData(empleados) {
    let data = [{ id: 0, text: "Seleccione un empleado" }];
    empleados.forEach((empleado) => {
        let empleadoSelect = {
            id: empleado.id_empleado,
            text: empleado.nombre + " " + empleado.apellido,
        };

        data.push(empleadoSelect);
    });
    return data;
}

// funcion para cargar los datos en el combo de roles
function processRolData(roles) {
    let data = [{ id: 0, text: "Seleccione un rol" }];
    roles.forEach((rol) => {
        let rolSelect = {
            id: rol.id_rol,
            text: rol.Nombre,
        };

        data.push(rolSelect);
    });
    return data;
}