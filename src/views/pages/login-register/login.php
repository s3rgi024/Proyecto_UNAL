<section class="login__form" id="login__form">
    <h1>
        Iniciar sesión
    </h1>
    <form action="./src/controllers/inicio_sesion.php" method="post">      
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
                    </div>
                </div>
                <br>
                <div class="login__form-forget-password-link">
                    <div>
                        <a href="">Olvidé mi contraseña</a>
                    </div>
                </div>
        </div>

        <div class="login__form-btn">
            <button type="submit">
                <a>
                    Ingresar
                </a>
            </button>
            <span>
                ¿No  tienes una cuenta?
                <span>
                    <a id="register_link">Registrate</a>
                </span>
            </span>
        </div>
    </form>
</section>