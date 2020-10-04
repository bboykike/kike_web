var res;
var Table;
var serviciosSE = [];
$(document).ready(() => {

    getContentser();

    initializeComponentsSelect();

    $("#id_cliente").change(function() {
        $("#id_cliente option:selected").each(function() {
            id_cliente = $(this).val();
            $.post("../funciones/servicios/cargarSucursal.php", { id_cliente: id_cliente }, function(data) {
                $("#id_sucursal").html(data);
            });
        });
    })

});


async function getContentser() {
    let subServiciosSE = [];
    await $.ajax({
        type: 'GET',
        url: '../funciones/servicios/tableServiciosSE.php',
        success: response => {
            serviciosSE = JSON.parse(response);
            serviciosSE.forEach(element => {

                subServiciosSE.push(element);
            })
        }
    })
    console.log(subServiciosSE);
    printTable(subServiciosSE);
}

function printTable(res) {
    Table = $('#idTableServiciosin').DataTable({
        rowId: 'id_servicio',
        data: res,
        columns: [{
            data: 'Folio'
        }, {
            data: 'Tipo'
        }, {
            data: 'FechaIn'
        }, {
            data: 'nombreEmpleado'
        }, {
            data: 'Nombre',
        }, {
            data: 'nombreCliente'
        }, {
            data: null,
            'className': 'estatus',
            render: function(data, type, row) {
                return estatusRender(data);
            }
        }, {
            data: 'estatus_servicio'
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

    })
}

async function CargarCombos() {
    let dataClientes;
    await $.ajax({
        type: 'GET',
        url: '../funciones/servicios/cargarSelectSe.php',
        success: res => {
            dataClientes = JSON.parse(res);
        }
    });
    // console.log(dataEmplados);
    return dataClientes;
}


async function initializeCreateModalComponents(clientes, sucursales, empleados) {


    $('#id_cliente').select2({
        placeholder: "Seleccione un cliente",
        data: clientes,
        width: '100%'
    });
    $('#id_sucursal').select2({
        placeholder: "Seleccione una sucursal",
        data: sucursales,
        width: '100%'
    });
    $('#id_empleado').select2({
        placeholder: "Seleccione un empleado",
        data: empleados,
        width: '100%'
    });
}

function initializeComponentsSelect() {

    initializeModalsComponentsSe();
}

async function initializeModalsComponentsSe() {
    var clientes = [{ id: 0, text: 'Seleccione un cliente' }];
    var empleados = [{ id: 0, text: 'Seleccione un empleado' }];
    var data
    data = await CargarCombos();

    clientes = processClientesData(data[0]);

    initializeCreateModalComponents(clientes);
}

function processClientesData(clientes) {
    let data = [{ id: 0, text: 'Seleccione un cliente' }];
    clientes.forEach(clientes => {
        let clientesSelect = {
            id: clientes.id_cliente,
            text: clientes.NombreCliente + " " + clientes.ApellidoCliente
        }

        data.push(clientesSelect)
    })
    return data;
}


function estatusRender(data) {
    switch (data.estatus_servicio) {
        case "Finalizado":
            return "<span class='external-event bg-danger'>Aplicado</span>"
            break;
        default:
            return "<span class='external-event bg-success'>Activo</span>"
    }
}