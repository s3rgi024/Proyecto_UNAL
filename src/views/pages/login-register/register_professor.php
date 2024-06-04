<section class="container" id="professor__form">
    <div class="form-box">
            <div class="progress">
                
                <div class="logo">
                    <a href="../../../src/views/pages/main.php">
                        <h2>Registro<br></h2>Docentes
                    </a>
                </div>

                <ul class="progress-steps">
                    <li class="step active">
                        <span>1</span>
                        <p>Información Personal</p>
                    </li>
                    <li class="step">
                        <span>2</span>
                        <p>Documentación Hoja de Vida</p>
                    </li>
                    <li class="step">
                        <span>3</span>
                        <p>Estudio y experiencia laboral</p>
                    </li>
                    <li class="step">
                        <span>4</span> 
                        <p>Documentación Vinculación</p>
                    </li>
                </ul>
            </div>
            
            <form action="" method="POST" enctype="multipart/form-data" id="register_professor">

                <div class="form-one form-step active">

                        
                        <div class="header_form">
                            <h2>Datos Personales</h2>
                            <p>Bienvenid@, a continuación, diligencie los campos con la información
                                solicitada para continuar con su proceso de contratación.
                                Recuerde que los campos marcados con (*) son obligatorios
                            </p>
                        </div>                        

                        <div>
                            <label for="t_doc_register">Tipo de documento *</label>
                            <select class="t_doc_register" name="t_doc_register" id="t_doc_register" required>
                            <?php
                                
                            $tdoc_query = "SELECT * FROM tipo_documento";

                            if (!$result = $db_connection -> query($tdoc_query)) {
                                    die ('Error en la consulta! [' . $db_connection -> error . ']');
                            }
                    
                            while ($row = $result -> fetch_assoc()) {
                                $id_tdoc = stripslashes($row["id_tipo_documento"]);
                                $nom_tdoc = stripslashes($row["abreviatura"]);
                                $desc_tdoc = stripslashes($row["documento"]);
                            ?>
                                    
                            <option value="<?php echo $id_tdoc; ?>"><?php echo $nom_tdoc; ?></option>

                            <?php 
                            }
                            ?>
                            </select>
                        </div>


                        <div>
                            <label for="dni_register_professor">Número de documento *</label>
                            <input type="number" name="dni_register_professor" id="dni_register_professor" min="100000" max="9999999999" required>
                        </div>
                        
                        <div>
                            <label for="name1_professor">Primer Nombre *</label>
                            <input type="text" name="name1_professor" id="name1_professor" required>
                        </div>

                        <div>
                            <label for="name2_professor">Segundo Nombre</label>
                            <input type="text" name="name2_professor" id="name2_professor">
                        </div>

                        <div>
                            <label for="l_name1_professor">Primer Apellido *</label>
                            <input type="text" name="l_name1_professor" id="l_name1_professor" required>
                        </div>

                        <div>
                            <label for="l_name2_professor">Segundo Apellido</label>
                            <input type="text" name="l_name2_professor" id="l_name2_professor">
                        </div>

                        <div>
                            <label for="email_professor">Correo Electrónico *</label>
                            <input type="email" name="email_professor" id="email_professor" required>
                        </div>

                        <div>
                            <label for="n_phone_professor">Número de Teléfono *</label>
                            <input type="tel" name="n_phone_professor" id="n_phone_professor" required>
                        </div>

                        <div>
                            <label for="user_professor">Nombre de Usuario *</label>
                            <input type="text" name="user_professor" id="user_professor" required>
                        </div>

                        <div>
                            <label for="password_professor">Contraseña *</label>
                            <input type="password" name="password_professor" id="password_professor" required>
                        </div>

                        <div>
                            <label for="password_confirm">Confirmar Contraseña *</label>
                            <input type="password" name="password_confirm" id="password_confirm" required>
                        </div>
                </div>

                <div class="form-two form-step">

                        
                        <div class="header_form">
                            <h2>Hoja de Vida</h2>
                            <p>Documentación personal requerida para vinculación.</p>
                        </div>                        

                        <div>
                            <label>Hoja de Vida Función Pública *</label>
                            <input type="file" id="hvFuncionPublica" name="hvFuncionPublica" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Declaración Juramentada Ley 4 de 1992 *</label>
                            <input type="file" id="decJuramentada" name="decJuramentada" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Verificación Inhabilidad Delito Sexual *</label>
                            <input type="file" id="inhabDelito" name="inhabDelito" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Autorización Notificación Correo Electrónico *</label>
                            <input type="file" id="notiCorreo" name="notiCorreo" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Compromiso Institucional Vinculación *</label>
                            <input type="file" id="compIntitucional" name="compIntitucional" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Autorización Tratamiento Datos Personales *</label>
                            <input type="file" id="autoriDatos" name="autoriDatos" accept=".pdf" required>
                        </div>

                        <div>
                            <label>Visa Extranjeria</label>
                            <input type="file" id="visaExtranjeria" name="visaExtranjeria" accept=".pdf">
                        </div>

                        <div class="libreta_militar">
                            <label>Fotocopia Libreta Militar  <span>(Aplica solo para hombres de 18 a 54 años)</span></label>
                            <input type="file" id="libMilitar" name="libMilitar" accept=".pdf">
                        </div>

                        <div class="tarjeta_profesional">
                            <label>Tarjeta Profesional <span>(Si la carrera lo requiere)</span></label>
                            <input type="file" id="tarjeProfesional" name="tarjeProfesional" accept=".pdf" required>
                        </div>

                        <div class="tarjeta_profesional">
                            <label>Matricula Profesional <span>(Si la carrera lo requiere)</span></label>
                            <input type="file" id="matriProfesional" name="matriProfesional" accept=".pdf">
                        </div>

                        <div>
                            <label>Reporte Médico (Aval SST) *</label>
                            <input type="file" id="reportMedicoSST" name="reportMedicoSST" accept=".pdf" required>
                        </div>
                </div>

            <div class="form-three form-step">

                <div class="header_form">
                    <h2>Certificados Estudio & Experiencia Laboral</h2>
                </div>
                        
                        <div class="birth">
                            <label style="color: #6c5ce7" class="header_form">Pregrado</label>
                            
                            <div>
                                <label>Fecha inicio</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                            
                            <div>
                                <label>Fecha fin</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7" class="header_form">Especialización</label>
                            <div>
                                <label>Fecha inicio</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                           
                            <div>
                                <label>Fecha fin</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7" class="header_form">Maestría</label>
                            <div>    
                                <label>Fecha inicio</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                            
                            <div>
                                <label>Fecha fin</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="birth">
                            <label style="color: #6c5ce7" class="header_form">Doctorado</label>
                            <div>
                                <label>Fecha inicio</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                            <div>
                                <label>Fecha fin</label>
                                <div class="grouping">
                                    <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                                    <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                    <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="AAAA">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>Certificado Cursando Posgrado</label>
                            <input type="file" id="certPosgrado" name="certPosgrado" accept=".pdf">
                        </div>
                        <div>
                            <label>Certificado Segunda Lengua</label>
                            <input type="file" id="certSegLengua" name="certSegLengua" accept=".pdf">
                        </div>
                        <div>
                            <label>Experiencia Laboral *</label>
                            <input type="file" id="expLaboral" name="expLaboral" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Antecedentes Disciplinarios Procuraduria *</label>
                            <input type="file" id="antDisciplinarios" name="antDisciplinarios" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Antecedentes Fiscal Contraloria *</label>
                            <input type="file" id="antFiscales" name="antFiscales" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Antecedente Judicial Policia Nacional *</label>
                            <input type="file" id="antJudiciales" name="antJudiciales" accept=".pdf" required>
                        </div>
                </div>

                <div class="form-four form-step">
                    
                    <div class="header_form">
                        <h2>Documentos Vinculación</h2>
                        <p>Archivos requeridos para vinculación con la FCE.</p>
                    </div>

                        <div>
                            <label>Formato Afiliación Seguridad Social *</label>
                            <input type="file" id="afiliSeguridad" name="afiliSeguridad" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Formato Afiliación EPS *</label>
                            <input type="file" id="afiliEPS" name="afiliEPS" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Formato Afiliación Pensión *</label>
                            <input type="file" id="afiliPension" name="afiliPension" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Certificado Cuenta Bancaria *</label>
                            <input type="file" id="cueBancaria" name="cueBancaria" accept=".pdf" required>
                        </div>
                        <div class="ultima_eps">
                            <label>Certificado Afilicación Ultima EPS * <span>(Debe estar activo)</span></label>
                            <input type="file" id="afiliUltiEPS" name="afiliUltiEPS" accept=".pdf" required>
                        </div>
                        <div class="ultima_eps">
                            <label>Certificado Afilicación Fondo de Pensiones * <span>(Debe estar activo)</span></label>
                            <input type="file" id="afiliUltiPension" name="afiliUltiPension" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Cédula Ciudadanía o Extranjería *</label>
                            <input type="file" id="cedulaCiudadania" name="cedulaCiudadania" accept=".pdf" required>
                        </div>
                        <div>
                            <label>Declaración Pensionado o en Trámite</label>
                            <input type="file" id="decPensionado" name="decPensionado" accept=".pdf">
                        </div>
                        <div>
                            <label>Asignaturas, Días y Horarios</label>
                            <input type="file" id="asignaDiasHorarios" name="asignaDiasHorarios" accept=".pdf">
                        </div>
                        <div>
                            <label>Resolución de Nombramiento</label>
                            <input type="file" id="resNombramiento" name="resNombramiento" accept=".pdf">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="termn_condi" id="termn_condi" required>
                            <label for="termn_condi">He leido con atención las observaciones dadas por la <span>EACP</span></label>
                        </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn-back" id="btn_back">Volver al Inicio</button>
                    <button type="button" class="btn-prev" disabled>Atrás</button>
                    <button type="button" class="btn-next">Siguiente</button>
                    <button type="submit" class="btn-submit">Enviar</button>
                </div>
            </form>
    </div>
</section>

<script type="module" src="./public/js/AJAX/requestRegister.js"></script>