<section class="login__form" id="login__form">
    <h1>
        Iniciar sesión
    </h1>
    <form action="" method="post" id="form_login">      
        <div class="login__form-fields">    
                <label for="userName">Nombre de Usuario</label>
                <div>
                    <label for="userName">
                        <i class="fa-solid fa-user"></i>
                    </label>
                    <div>
                        <input type="text" name="userName" id="userName">
                        <div class="underline"></div>
                    </div>
               </div>
        </div>
                
        <div class="login__form-fields">
                <label for="password">Contraseña</label>
                <div>
                    <label for="password">
                        <i class="fa-solid fa-lock"></i>
                    </label>
                    <div>
                        <input type="password" name="password" id="password">
                        <div class="underline"></div>

                        <label class="show-hide_password">
                            <input type="checkbox">
                            <i class="fa-solid fa-eye" id="showPassword"></i>
                            <i class="fa-solid fa-eye-slash" id="hidePassword"></i>
                        </label>
                    </div>
                </div>
                
                <div class="login__form-forget-password-link">
                    <div>
                        <a id="register_link">Olvidé mi contraseña</a>
                    </div>
                </div>
        </div>

        <div class="login__form-btn">
            <button type="submit">
                <a>
                    Ingresar
                </a>
            </button>
            <span class="professor_link">
                    ¿Eres docente y no tienes una cuenta?
                    <br>
                    
                <span>
                    <a id="professor_link">Regístrate aquí</a>
                </span>
            </span>
        </div>
    </form>
</section>

<script type="module" src="./public/js/AJAX/requestLogin.js"></script>