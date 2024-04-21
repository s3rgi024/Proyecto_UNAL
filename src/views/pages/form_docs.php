<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/form_docs.css">
    <title>Documentación Aprobada</title>
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="/"><span>Formulario<br></span>Contratación</a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Hoja de Vida<br><span>Información Personal</span></p>
                        </li>
                        <li class="step active">
                            <span>2</span>
                            <p>Contratación<br><span>Documentación UNA</span></p>
                        </li>
                        <li class="step active">
                            <span>3</span> 
                            <p>Adicionales<br><span>Documentos extras</span></p>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Información Personal</h2>
                        <p>Ingrese su información personal de manera correcta.</p>
                        <div>
                            <label>Primer Nombre</label>
                            <input type="text" placeholder="e.g. Jhon">
                        </div>
                        <div>
                            <label>Segundo Nombre</label>
                            <input type="text" placeholder="e.g. Paul">
                        </div>
                        <div class="birth">
                            <label>Fecha Nacimiento</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg">
                            <h2>Contratación</h2>
                            <div>
                                <label>Celular</label>
                                <input type="tel" placeholder="+57xxxxxx">
                            </div>
                            <div>
                                <label>Dirección</label>
                                <input type="text" placeholder="Dirección Residencia">
                            </div>
                            <div>
                                <input type="text" placeholder="App, Suite, Building">
                            </div>
                            <div>
                                <label>City</label>
                                <input type="text" placeholder="City">
                            </div>
                            <div>
                                <label>State</label>
                                <input type="text" placeholder="State/Province">
                            </div>
                            <div>
                                <label>Zip Code</label>
                                <input type="text" placeholder="Postal/Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg">
                            <h2>Security</h2>
                            <div>
                                <label>Email</label>
                                <input type="email" placeholder="Your email adress">
                            </div>
                            <div>
                                <label>Username</label>
                                <input type="text" placeholder="Username">
                            </div>
                            <div>
                                <label>Password</label>
                                <input type="password" placeholder="Password">
                            </div>
                            <div>
                                <input type="password" placeholder="Confirm Password">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox">
                                <label>Receive our news letter and special offers</label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Atrás</button>
                        <button type="button" class="btn-next">Siguiente</button>
                        <button type="button" class="btn-submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../../public/js/form_docs.js"></script>
</body>
</html>