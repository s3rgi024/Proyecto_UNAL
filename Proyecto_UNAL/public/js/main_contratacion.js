let doc_pendiente = document.querySelector('.doc_pendiente');
let doc_aprobada = document.querySelector('.doc_aprobada');
let doc_historial = document.querySelector('.doc_historial');
let navbar = document.querySelector(".barra-lateral");

doc_pendiente.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#cccff9";
    navbar.style.boxShadow= "10px 0 10px #cccff9";
  });
  
doc_pendiente.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
    navbar.style.boxShadow= "5px 0 5px #e6e6e6";
});

doc_pendiente.addEventListener("click", ()=>{
  window.location.href = "./doc_revision.php";
});



doc_aprobada.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#edd394";
    navbar.style.boxShadow= "10px 0 10px #edd394";
});

doc_aprobada.addEventListener("click", ()=>{
  window.location.href = "./doc_aprobada.php";
});

doc_aprobada.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
    navbar.style.boxShadow= "5px 0 5px #e6e6e6";
});



doc_historial.addEventListener('mouseover', function() {
    document.body.style.backgroundColor= "#f99485";
    navbar.style.boxShadow= "10px 0 10px #f99485";
});
  
doc_historial.addEventListener('mouseout', function() {
    document.body.style.backgroundColor= "#dadada";
    navbar.style.boxShadow= "5px 0 5px #e6e6e6";
});
  

let infos = document.querySelectorAll("#info");

infos.forEach((info)=>{

  info.addEventListener("mouseover", function() {
    setTimeout(function() {
      info.classList.add("show");
    }, 800); // 1000 milisegundos = 1 segundo
  });
  
  info.addEventListener('mouseout', function() {
      this.classList.remove("show");
  });

})


