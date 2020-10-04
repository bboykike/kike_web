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
    console.log(subEmpleados)
    printTable(subEmpleados);
}

function printTable(res) {
    Table = $('#idTableEmpleados').DataTable({
        rowId: 'id_empleado',
        data: res,
        columns: [{
            data: 'nombre_empleado'
        }, {
            data: 'direccion'
        }, {
            data: 'area'
        }, {
            data: 'correo'
        }, {
            data: 'estatus_empleado'
        }, {
            data: 'estatus_empleado'
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
        createdRow: function(row, data, index) {
            $(row).css('text-align', 'left')
        }

    })
}