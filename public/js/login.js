let userLogo = document.querySelector(".bx-user");
let passLogo = document.querySelector(".bx-lock-alt");

userLogo.addEventListener("click", () => {
    userLogo.classList.remove("bx-user");
    userLogo.classList.add("bxs-user");
})

passLogo.addEventListener("click", () => {
    passLogo.classList.remove("bx-lock-alt");
    passLogo.classList.add("bxs-lock-alt");
})

function clicFueraElemento(event) {

    if (event.target !== userLogo) {
      userLogo.classList.remove("bxs-user");
      userLogo.classList.add("bx-user");
    }
  }
document.addEventListener("click", clicFueraElemento)


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

login_link.addEventListener( 'click', function(){

  register_form.classList.remove("exit_animation");
  register_form.classList.remove("enter_animation");
  register_form.classList.add("exit_animation");

  login_form.classList.remove("enter_animation");
  login_form.classList.remove("exit_animation");
  login_form.classList.add("enter_animation");

} );