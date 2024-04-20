let doc_pendiente = document.querySelector('.doc_pendiente');

let doc_aprobada = document.querySelector('.doc_aprobada');

let doc_historial = document.querySelector('.doc_historial');


doc_pendiente.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#cccff9";
  });
  
doc_pendiente.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
});



doc_aprobada.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#edd394";
  });
  
doc_aprobada.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
});



doc_historial.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#f99485";
  });
  
doc_historial.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
});
  