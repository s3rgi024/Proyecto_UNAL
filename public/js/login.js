import "./form_docs.js";

let register_link = document.getElementById('register_link');
let login_link = document.getElementById('login_link');
let register_professor_link = document.getElementById('professor_link');
let btn_back = document.getElementById('btn_back');
let container__login = document.querySelector('.container__login');

let register_form = document.getElementById('register__form');
let login_form = document.getElementById('login__form');
let register_professor_form = document.getElementById('professor__form');


register_link.addEventListener( 'click', function(){

  register_form.classList.remove("enter_animation");
  register_form.classList.remove("exit_animation");
  register_form.classList.add("enter_animation");

  login_form.classList.remove("exit_animation");
  login_form.classList.remove("enter_animation");
  login_form.classList.add("exit_animation");

} );

login_link.addEventListener('click', function(){

  register_form.classList.remove('exit_animation');

  setTimeout(() => {
    register_form.classList.add('exit_animation');
    register_form.classList.remove('enter_animation');
  }, 500);

  login_form.classList.remove('enter_animation');
  login_form.classList.remove('exit_animation');
  login_form.classList.add('enter_animation');
});


register_professor_link.addEventListener( 'click', function(){
  
  register_form.classList.add("exit_form_professor_animation");
  login_form.classList.add("exit_form_professor_animation");
  

  setTimeout(() => {
    container__login.style.height = "100vh";
    register_professor_form.classList.add("enter_form_professor_animation");
    register_professor_form.style.display = "block";
    login_form.style.display="none";
    register_form.style.display="none";
  }, 1000);
});


btn_back.addEventListener( 'click', function(){

  register_professor_form.classList.remove("enter_form_professor_animation");
  register_professor_form.classList.add("exit_form_professor_animation");

  setTimeout(() => {

    register_form.classList.remove("exit_form_professor_animation");
    login_form.classList.remove("exit_form_professor_animation");

    register_form.classList.add("enter_form_professor_animation");
    login_form.classList.add("enter_form_professor_animation");
    
    register_professor_form.style.display = "none";

    login_form.style.display="flex";
    register_form.style.display="flex";
    container__login.style.height = "85vh";

    setTimeout(() => {
      register_form.classList.remove("enter_form_professor_animation");
      login_form.classList.remove("enter_form_professor_animation");
    }, 800);

  }, 1000);
});

