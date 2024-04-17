let register_link = document.getElementById('register_link');
let login_link = document.getElementById('login_link');

let register_form = document.getElementById('register__form');
let login_form = document.getElementById('login__form');


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

  // Remover clases de animación del formulario de inicio de sesión
  login_form.classList.remove('enter_animation');
  login_form.classList.remove('exit_animation');
  login_form.classList.add('enter_animation');
});