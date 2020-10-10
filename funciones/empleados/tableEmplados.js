var res;
var Table;
var empleados = [];
$(document).ready(() => {
    getContentEmpleados();
});
async function getContentEmpleados() {
    let subEmpleados = [];
    await $.ajax({
        type: 'GET',
        url: '../funciones/empleados/tableEmpleados.php',
        success: response => {
            empleados = JSON.parse(response);
            empleados.forEach(element => {
                subEmpleados.push(element);

            })
        }
    })
    printTable(subEmpleados);
}

function printTable(res) {
    Table = $('#idTableEmpleados').DataTable({
        rowId: 'id_empleado',
        data: res,
        columns: [{
            data: null,
            className: "foto",
            render: function (data, type, row) {
                return imagen(data);
            },
        },
        {
            data: 'nombre_empleado'
        }, {
            data: 'direccion'
        }, {
            data: 'area'
        }, {
            data: 'correo'
        }, {
            data: null,
            className: "estatus",
            render: function (data, type, row) {
                return estatusRender(data);
            },
        }, {
            data: null,
            className: "acciones",
            render: function (data, type, row) {
                return editarEmpleado(data);
            },
        }],
        "language": {
            search: 'Buscar:',
            "lengthMenu": "Mostrando _MENU_ registros por pagina",
            "zeroRecords": "Sin datos",
            "info": "",
            "infoEmpty": "Sin registros",
            "infoFiltered": "(filtrados de MAX)",
            paginate: {
                first: 'Primero',
                previous: 'Anterior',
                next: 'Siguiente',
                last: 'Último',
            }
        },
        createdRow: function (row, data, index) {
            $(row).css('text-align', 'left')
        }

    })
}

function estatusRender(data) {
    switch (data.estatus_empleado) {
        case "activo":
            return "<span class='label label-success'>Activo</span>";
            break;
        default:
            return "<span class='label label-danger'>Inactivo</span>";
    }
}


function editarEmpleado(data) {
    let datos =
        '"' +
        data.id_empleado +
        "||" +
        data.nombre +
        "||" +
        data.apellido +
        "||" +
        data.direccion +
        "||" +
        data.area +
        "||" +
        data.correo +
        "||" +
        data.fotoUsuario +
        "||" +
        data.estatus_empleado +
        '"';
    return (
        "<div class='btn-group dropdown'>" +
        "    <a href='javascript: void(0);' class='table-action-btn dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-horizontal'></i></a>" +
        "    <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
        "        <a class='dropdown-item' href='#' data-backdrop='static' data-toggle='modal' onclick='modalEditarEmpleado(" +
        datos +
        ");' ><i class='mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle'></i>Editar Empleado</a>" +
        "    </div>" +
        "</div>"
    );
}

// funcion para enviar los datos al modal al abrirce
function modalEditarEmpleado(data) {
    d = data.split("||");
    e = d[1].split(" ");

    var id = d[0];
    var nombre = d[1];
    var apellido = d[2];
    var direccion2 = d[3];
    var area2 = d[4];
    var correo2 = d[5];
    var estatus = d[7];


    document.getElementById("id_empleado").value = id;
    document.getElementById("nombre2").value = nombre;
    document.getElementById("apellido2").value = apellido;
    $("#area2").val(area2);
    $("#area2").attr("selected", "selected");
    $("#area2").val(area2).trigger("change");
    document.getElementById("direccion2").value = direccion2;
    document.getElementById("correo2").value = correo2;
    document.getElementById("estatus4").value = estatus;



    if (estatus == "activo") {

        document.getElementById("estatusEmpleado").checked = true;
        document.getElementById("label_estatus5").innerHTML = "Activo";

    } else {

        document.getElementById("estatusEmpleado").checked = false;
        document.getElementById("label_estatus5").label_estatus = "Inactivo";

    }


    $("#UpEmpleado").modal({
        backdrop: "static",
        show: true,
    });
}

function cambiarValor5() {
    activo = document.getElementById("estatusEmpleado").checked;

    if (activo == true) {
        document.getElementById("label_estatus5").innerHTML = "Activo";
        document.getElementById("estatus4").value = "activo";
    } else {
        document.getElementById("label_estatus5").innerHTML = "Inactivo";
        document.getElementById("estatus4").value = "inactivo";
    }
}

function imagen(data) {
    if (data.fotoUsuario == "") {
        return ("<img style='width: 45px' class='card-img-top img-fluid' src='../fotos/avatar.jpg' >");

    } else {

        return (

            "<img style='width: 45px;' class='card-img-top img-fluid' src='" + data.fotoUsuario + "' >"

        );
    }

}