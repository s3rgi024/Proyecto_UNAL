<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/info_personal.css">
    <title>Cargue Documentos</title>
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="../../../src/views/pages/main.php"><span>Formulario<br></span>Contratación</a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Documentación Hoja de Vida</p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Estudio y experiencia laboral</p>
                        </li>
                        <li class="step">
                            <span>3</span> 
                            <p>Documentación Vinculación</p>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Hoja de Vida</h2>
                        <p>Documentación personal requerida para vinculación.</p>
                        <div>
                            <label>Hoja de Vida Función Pública</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Declaración Juramentada Ley 4 de 1992</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Verificación Inhabilidad Delito Sexual</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Autorización Notificación Correo Electrónico</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Compromiso Institucional Vinculación</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Autorización Tratamiento Datos Personales</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Visa Extranjeria</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Fotocopia Libreta Militar</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Tarjeta Profesional</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Matricula Profesional</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Reporte Médico (Aval SST)</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                            <h2>Certificados Estudio & Experiencia Laboral</h2>
                            <br>
                        <div class="birth">
                            <label style="color: #6c5ce7">Pregrado</label>
                            <label>Fecha inicio</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                            <br>
                            <label>Fecha fin</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7">Especialización</label>
                            <label>Fecha inicio</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                            <br>
                            <label>Fecha fin</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7">Maestría</label>
                            <label>Fecha inicio</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                            <br>
                            <label>Fecha fin</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7">Doctorado</label>
                            <label>Fecha inicio</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                            <br>
                            <label>Fecha fin</label>
                            <div class="grouping">
                                <input type="text" patter="[0-9]*" name="day" velue="" min="0" max="31" placeholder="DD">
                                <input type="text" patter="[0-9]*" name="month" velue="" min="0" max="12" placeholder="MM">
                                <input type="text" patter="[0-9]*" name="year" velue="" min="0" max="2050" placeholder="AAAA">
                            </div>
                        </div>
                        <div>
                            <label>Certificado Cursando Posgrado</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Certificado Segunda Lengua</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Experiencia Laboral</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Antecedentes Disciplinarios Procuraduria</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Antecedentes Fiscal Contraloria</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Antecedente Judicial Policia Nacional</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                            <h2>Documentos Vinculación</h2>
                            <p>Archivos requeridos para vinculación con la FCE.</p>
                        <div>
                            <label>Formato Afiliación Seguridad Social</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Formato Afiliación EPS</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Formato Afiliación Pensión</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Certificado Cuenta Bancaria</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Certificado Afilicación Ultima EPS</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Cédula Ciudadanía o Extranjería</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Declaración Pensionado o en Trámite</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Asignaturas, Días y Horarios</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                        <div>
                            <label>Resolución de Nombramiento</label>
                            <input type="file" id="archivoPDF" name="archivoPDF" accept=".pdf">
                        </div>
                            <div class="checkbox">
                                <input type="checkbox">
                                <label>He leido con atención las observaciones dadas por la EACP.</label>
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