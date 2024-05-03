$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Autorizar</button><button class='btn btn-danger btnBorrar'>Declinar</button></div></div>"  
       }],
        
    "language": {   
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id_usuario = parseInt(fila.find('td:eq(0)').text());
    nombre1 = fila.find('td:eq(1)').text();
    nombre2 = fila.find('td:eq(2)').text();
    apellido1 = fila.find('td:eq(3)').text();
    apellido2 = fila.find('td:eq(4)').text();
    
    $("#id_usuario").val(id_usuario);
    $("#nombre1").val(nombre1);
    $("#nombre2").val(nombre2);
    $("#apellido1").val(apellido1);
    $("#apellido2").val(apellido2);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Usuario");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id_usuario = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de declinar el registro: "+id_usuario+"?");
    if(respuesta){
        $.ajax({
            url: "../../../src/views/pages/apro_usuarios_crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id_usuario:id_usuario},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    id_usuario = $.trim($("#id_usuario").val());
    nombre1 = $.trim($("#nombre1").val());
    nombre2 = $.trim($("#nombre2").val());
    apellido1 = $.trim($("#apellido1").val());
    apellido2 = $.trim($("#apellido2").val());
    $.ajax({
        url: "../../../src/views/pages/apro_usuarios_crud.php",
        type: "POST",
        dataType: "json",
        data: {id_usuario:id_usuario, nombre1:nombre1, nombre2:nombre2, apellido1:apellido1, apellido2:apellido2, usuario:usuario, id_usuario:id_usuario, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_usuario = data[0].id_usuario;            
            nombre1 = data[0].nombre1;
            nombre2 = data[0].nombre2;
            apellido1 = data[0].apellido1;
            apellido2 = data[0].apellido2;
            if(opcion == 1){tablaPersonas.row.add([id_usuario,nombre1,nombre2,apellido1,apellido2,usuario]).draw();}
            else{tablaPersonas.row(fila).data([id_usuario,nombre1,nombre2,apellido1,apellido2,usuario]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});