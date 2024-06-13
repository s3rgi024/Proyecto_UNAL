<?php 

   require '../../controllers/security.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/info_personal.css">
    <title>Información Personal</title>
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="../../../src/views/pages/main.php"><span>Información<br></span>Personal</a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Vinculación<br><span>Tipo de Vinculación con FCE</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Datos Personales<br><span>Datos personales relevantes</span></p>
                        </li>
                        <li class="step">
                            <span>3</span> 
                            <p>Datos Residencia<br><span>Datos relevantes residencia</span></p>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Vinculación FCE</h2>
                        <p>Tipo de vinculación con la Universidad Nacional.</p>
                        <div>
                            <label>Tipo de vinculación que aspira tener en la FCE:</label>
                            <select name="vinculacion" id="vinculacion">
                                <option value="" disabled selected>Seleccione una opción a continuación...</option>
                                <option value="">Docente Ocasional</option>
                                <option value="">Docente Ocasional Especial</option>
                                <option value="">Docente Ad-Honorem (Adjunto)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                            <h2>Información Personal</h2>
                            <p>Datos personales requeridos para la vinculación con la Universidad Nacional de Colombia</p>
                            <div>
                            <label>Nombres</label>
                            <input type="text" placeholder="Ejemplo: Juan Sebastian">
                        </div>
                        <div>
                            <label>Apellidos</label>
                            <input type="text" placeholder="Ejemplo: Florez Sanchez">
                        </div>
                        <div>
                            <label>Género:</label>
                            <select name="genero" id="genero">
                                <option value="" disabled selected>Seleccione una opción a continuación...</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                                <option value="">Otro</option>
                            </select>
                        </div>
                        <div>
                            <label>Tipo documento de identidad</label>
                            <select name="tdoc" id="tdoc">
                                <option value="" disabled selected>Seleccione una opción a continuación...</option>
                                <option value="">Cédula Ciudadania</option>
                                <option value="">Cédula Extranjería</option>
                                <option value="">Pasaporte</option>
                            </select>
                        </div>
                        <div>
                            <label>Número documento de identidad</label>
                            <input type="number" id="documento" name="documento" placeholder="Ejemplo: 1234567890">
                            <script>
                                document.getElementById("documento").addEventListener("input", function() {
                                    let input = this.value;
                                        if (input.length > 10) {
                                        alert("El documento no puede tener más de 10 dígitos.");
                                        this.value = "";
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <label>Lugar de expedición del documento de identidad</label>
                            <input type="text" placeholder="Ejemplo: Bogotá D.C.">
                        </div>
                        <div class="birth">
                            <label>Fecha expedición documento de identidad</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div class="birth">
                            <label>Fecha Nacimiento</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div>
                            <label>Lugar de nacimiento</label>
                            <input type="text" placeholder="Ejemplo: Bogotá D.C.">
                        </div>
                        <div>
                            <label>Estado Civil</label>
                            <select name="estado_civil" id="estado_civil">
                                <option value="" disabled selected>Seleccione una opción a continuación...</option>
                                <option value="">Soltero (a)</option>
                                <option value="">Casado (a)</option>
                                <option value="">Otro (a)</option>
                            </select>
                        </div>
                        <div>
                            <label>Celular</label>
                            <input type="number" id="celular" name="celular" placeholder="Ejemplo: 3XX XXX XXXX">
                            <script>
                                document.getElementById("celular").addEventListener("input", function() {
                                    let input = this.value;
                                        if (input.length > 10) {
                                        alert("El celular no puede tener más de 10 dígitos.");
                                        this.value = "";
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <label>Correo Electrónico</label>
                            <input type="email" placeholder="Ejemplo: unal@xxxx.com">
                        </div>
                        <div>
                            <label>Correo Electrónico Alterno</label>
                            <input type="email" placeholder="Ejemplo: unal@xxxx.com">
                        </div>
                        <div>
                            <label>Grupo Sanguíneo</label>
                            <input type="text" placeholder="Ejemplo: O+">
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                            <h2>Datos Residenciales</h2>
                            <p>Información relevante residencial.</p>
                            <div>
                                <label>Dirección de residencia</label>
                                <input type="text" placeholder="Ejemplo: Carrera 1A #12B-3">
                            </div>
                            <div>
                                <label>Barrio</label>
                                <input type="text" placeholder="Ejemplo: Bosa">
                            </div>
                            <div>
                                <label>Localidad</label>
                                <input type="text" placeholder="Ejemplo: Porvenir">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox">
                                <label>Confirmo que leí con atención y detenidamente las observaciones dadas por la EACP.</label>
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
    <script src="../../../public/js/info_personal.js"></script>
</body>
</html>