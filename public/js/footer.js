let aboutOptions = document.querySelectorAll('.container__footer__about_list li');

aboutOptions.forEach(function(element) {
  element.addEventListener('click', function() {

    let us = document.getElementById('about__content_us');
    let devs = document.getElementById('about__content_devs');

    let usOption = document.getElementById("us");
    let devsOption = document.getElementById("devs")

    console.log(this);

    if (this.id === "devs") {
        this.classList.add("selected");
        usOption.classList.remove("selected");

        us.style.opacity = 0;
        devs.style.opacity = 1;
        setTimeout(() => {
          us.style.display = "none";
          devs.style.display = "block";
        }, 300);

    } else if(this.id === "us"){
        this.classList.add("selected");
        devsOption.classList.remove("selected")

        us.style.opacity = 1;
        devs.style.opacity = 0;
        setTimeout(() => {
          us.style.display = "block";
          devs.style.display = "none";
          
        }, 300);

    } else {
        us.textContent = "Ha ocurrido un error";
    }
  });
});


