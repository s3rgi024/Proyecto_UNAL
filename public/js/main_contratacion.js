let doc_pendiente = document.querySelector('.doc_pendiente');

let doc_aprobada = document.querySelector('.doc_aprobada');

let historial = document.querySelector('.historial');


doc_pendiente.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#cccff9";
  });
  
doc_pendiente.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
});
  