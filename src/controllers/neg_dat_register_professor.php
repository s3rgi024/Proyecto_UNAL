<?php 

function createDirs($professorName, $tdoc, $doc){
    //crear carpeta de docente
    $dir_professor = "../../docs/docentes_ocasionales/" . $professorName . "_" . $tdoc . "_" . $doc;
    mkdir($dir_professor);

    //crear carpetas de hoja de vida y vinculación
    mkdir($dir_professor . "/Hoja de Vida");
    mkdir($dir_professor . "/Vinculacion");
}

function saveFilesProfessor($professorName, $tdoc, $doc, $hoja_vida_func_pub, $decl_jur_ley, $ver_inh_del_sex, $notif_corr_elec,
$com_ins_vinc, $aut_trat_dat_per, $visa_ext, $fotoc_libr_mil, $tarjeta_prof, $matri_prof, $aval_sst,
$cert_segun_leng, $experien_lab, $antec_disc_procu, $antec_fisc_contral, $antec_judic_pol_nal, $form_afil_seg_social,
$form_afil_eps, $form_afil_pension, $cert_cuen_bancaria, $cert_afil_ult_eps, $certi_afil_fond_pensiones,
$cedula_ciu_ext, $decla_pen_sol_pens_tram, $asig_dia_hor, $reso_nombramiento){
    
    include ("../../config/db_connection.php");


    $generalRoute = "../../docs/docentes_ocasionales/" . $professorName . "_" . $tdoc . "_" . $doc;

    $routeHojaVida = $generalRoute . "/Hoja de Vida";
    $routeVinculacion = $generalRoute . "/Vinculacion";

    // **Guardar archivos en carpeta Hoja de Vida

    move_uploaded_file($hoja_vida_func_pub["tmp_name"], $routeHojaVida . "/" . $hoja_vida_func_pub["name"]);
    move_uploaded_file($decl_jur_ley["tmp_name"], $routeHojaVida . "/" . $decl_jur_ley["name"]);
    move_uploaded_file($ver_inh_del_sex["tmp_name"], $routeHojaVida . "/" . $ver_inh_del_sex["name"]);
    move_uploaded_file($notif_corr_elec["tmp_name"], $routeHojaVida . "/" . $notif_corr_elec["name"]);
    move_uploaded_file($com_ins_vinc["tmp_name"], $routeHojaVida . "/" . $com_ins_vinc["name"]);
    move_uploaded_file($aut_trat_dat_per["tmp_name"], $routeHojaVida . "/" . $aut_trat_dat_per["name"]);
    move_uploaded_file($aval_sst["tmp_name"], $routeHojaVida . "/" . $aval_sst["name"]);
    move_uploaded_file($experien_lab["tmp_name"], $routeHojaVida . "/" . $experien_lab["name"]);
    move_uploaded_file($antec_disc_procu["tmp_name"], $routeHojaVida . "/" . $antec_disc_procu["name"]);
    move_uploaded_file($antec_fisc_contral["tmp_name"], $routeHojaVida . "/" . $antec_fisc_contral["name"]);
    move_uploaded_file($antec_judic_pol_nal["tmp_name"], $routeHojaVida . "/" . $antec_judic_pol_nal["name"]);

    //opcionales
    move_uploaded_file($visa_ext["tmp_name"], $routeHojaVida . "/" . $visa_ext["name"]);
    move_uploaded_file($fotoc_libr_mil["tmp_name"], $routeHojaVida . "/" . $fotoc_libr_mil["name"]);
    move_uploaded_file($tarjeta_prof["tmp_name"], $routeHojaVida . "/" . $tarjeta_prof["name"]);
    move_uploaded_file($matri_prof["tmp_name"], $routeHojaVida . "/" . $matri_prof["name"]);
    move_uploaded_file($cert_segun_leng["tmp_name"], $routeHojaVida . "/" . $cert_segun_leng["name"]);


    // **Guardar archivos en carpeta Vinculación

    move_uploaded_file($form_afil_seg_social["tmp_name"], $routeVinculacion . "/" . $form_afil_seg_social["name"]);
    move_uploaded_file($form_afil_eps["tmp_name"], $routeVinculacion . "/" . $form_afil_eps["name"]);
    move_uploaded_file($form_afil_pension["tmp_name"], $routeVinculacion . "/" . $form_afil_pension["name"]);
    move_uploaded_file($cert_cuen_bancaria["tmp_name"], $routeVinculacion . "/" . $cert_cuen_bancaria["name"]);
    move_uploaded_file($cert_afil_ult_eps["tmp_name"], $routeVinculacion . "/" . $cert_afil_ult_eps["name"]);
    move_uploaded_file($certi_afil_fond_pensiones["tmp_name"], $routeVinculacion . "/" . $certi_afil_fond_pensiones["name"]);
    move_uploaded_file($cedula_ciu_ext["tmp_name"], $routeVinculacion . "/" . $cedula_ciu_ext["name"]);

    //opcionales
    move_uploaded_file($decla_pen_sol_pens_tram["tmp_name"], $routeVinculacion . "/" . $decla_pen_sol_pens_tram["name"]);
    move_uploaded_file($asig_dia_hor["tmp_name"], $routeVinculacion . "/" . $asig_dia_hor["name"]);
    move_uploaded_file($reso_nombramiento["tmp_name"], $routeVinculacion . "/" . $reso_nombramiento["name"]);


    $db_connection->begin_transaction();

        try {
    // Consulta SQL para insertar las rutas de los archivos
                $sql_insert = "INSERT INTO archivo_doc_oca 
                    (fk_dni, hoja_vida_func_pub, decl_jur_ley, ver_inh_del_sex, notif_corr_elec, com_ins_vinc, aut_trat_dat_per, 
                    visa_ext, fotoc_libr_mil, tarjeta_prof, matri_prof, aval_sst, cert_segun_leng, experien_lab, 
                    antec_disc_procu, antec_fisc_contral, antec_judic_pol_nal, form_afil_seg_social, form_afil_eps, 
                    form_afil_pension, cert_cuen_bancaria, cert_afil_ult_eps, certi_afil_fond_pensiones, cedula_ciu_ext, 
                    decla_pen_sol_pens_tram, asig_dia_hor, reso_nombramiento) 
                    VALUES ('$doc', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
                $stmt = $db_connection->prepare($sql_insert);

    // Vincular los parámetros
                $stmt->bind_param("sssssssssssssssssssssssss", 
                        $routeHojaVida . "/" . $hoja_vida_func_pub["name"], 
                        $routeVinculacion . "/" . $decl_jur_ley["name"], 
                        $routeVinculacion . "/" . $ver_inh_del_sex["name"], 
                        $routeVinculacion . "/" . $notif_corr_elec["name"], 
                        $routeVinculacion . "/" . $com_ins_vinc["name"], 
                        $routeVinculacion . "/" . $aut_trat_dat_per["name"], 
                        $routeVinculacion . "/" . $visa_ext["name"], 
                        $routeVinculacion . "/" . $fotoc_libr_mil["name"], 
                        $routeVinculacion . "/" . $tarjeta_prof["name"], 
                        $routeVinculacion . "/" . $matri_prof["name"], 
                        $routeVinculacion . "/" . $aval_sst["name"], 
                        $routeVinculacion . "/" . $cert_segun_leng["name"], 
                        $routeVinculacion . "/" . $experien_lab["name"], 
                        $routeVinculacion . "/" . $antec_disc_procu["name"], 
                        $routeVinculacion . "/" . $antec_fisc_contral["name"], 
                        $routeVinculacion . "/" . $antec_judic_pol_nal["name"], 
                        $routeVinculacion . "/" . $form_afil_seg_social["name"], 
                        $routeVinculacion . "/" . $form_afil_eps["name"], 
                        $routeVinculacion . "/" . $form_afil_pension["name"], 
                        $routeVinculacion . "/" . $cert_cuen_bancaria["name"], 
                        $routeVinculacion . "/" . $cert_afil_ult_eps["name"], 
                        $routeVinculacion . "/" . $certi_afil_fond_pensiones["name"], 
                        $routeVinculacion . "/" . $cedula_ciu_ext["name"], 
                        $routeVinculacion . "/" . $decla_pen_sol_pens_tram["name"], 
                        $routeVinculacion . "/" . $asig_dia_hor["name"], 
                        $routeVinculacion . "/" . $reso_nombramiento["name"]);

            // Ejecutar la consulta
            $stmt->execute();

            // Confirmar la transacción
            $db_connection->commit();
            
            echo "Inserciones exitosas.";

        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $db_connection->rollback();
            echo "Error: " . $e->getMessage();
        }
}


function insertBasicDataProfessor($tdoc, $doc, $name1, $name2, $lName1,
$lName2, $email, $nPhone, $userName, $password){
    
    include ("../../config/db_connection.php");

    $consulta="SELECT * FROM usuarios WHERE id_tdoc ='$tdoc' AND id_usuario ='$doc'";
    $sql = $db_connection->query($consulta);


    //verificar si hay usuarios existentes con el mismo documento
    if ($sql->num_rows > 0) {
        print "<script>alert(\"Error este usuario ya existe, por favor inicie sesión o comuníquese con su administrador";
    }


    mysqli_query($db_connection, "INSERT INTO usuarios (id_tdoc, id_usuario, nombre1, nombre2, apellido1, 
    apellido2, correo, telefono, id_rol, usuario, clave, id_estado) 
    VALUES ('$tdoc', '$doc', '$name1', '$name2', '$lName1', '$lName2', '$email', '$nPhone', 1, '$userName', '$password', 2)");


}



function execute_register_professor($tdoc, $doc, $name1, $name2, $lName1,
$lName2, $email, $nPhone, $userName, $password,

$hoja_vida_func_pub, $decl_jur_ley, $ver_inh_del_sex, $notif_corr_elec,
$com_ins_vinc, $aut_trat_dat_per, $visa_ext, $fotoc_libr_mil, $tarjeta_prof, $matri_prof, $aval_sst,
$cert_segun_leng, $experien_lab, $antec_disc_procu, $antec_fisc_contral, $antec_judic_pol_nal, $form_afil_seg_social,
$form_afil_eps, $form_afil_pension, $cert_cuen_bancaria, $cert_afil_ult_eps, $certi_afil_fond_pensiones,
$cedula_ciu_ext, $decla_pen_sol_pens_tram, $asig_dia_hor, $reso_nombramiento){

    //Se válida si ya existe un usuario y si no se crea uno con los datos básicos
    insertBasicDataProfessor($tdoc, $doc, $name1, $name2, $lName1,
    $lName2, $email, $nPhone, $userName, $password);

    //se crean las carpetas del profesor
    createDirs($name1 . $name2, $tdoc, $doc);

    //se guardan los archivos en el directorio creado
    saveFilesProfessor($name1 . $name2, $tdoc, $doc, $hoja_vida_func_pub, $decl_jur_ley, $ver_inh_del_sex, $notif_corr_elec,
    $com_ins_vinc, $aut_trat_dat_per, $visa_ext, $fotoc_libr_mil, $tarjeta_prof, $matri_prof, $aval_sst,
    $cert_segun_leng, $experien_lab, $antec_disc_procu, $antec_fisc_contral, $antec_judic_pol_nal, $form_afil_seg_social,
    $form_afil_eps, $form_afil_pension, $cert_cuen_bancaria, $cert_afil_ult_eps, $certi_afil_fond_pensiones,
    $cedula_ciu_ext, $decla_pen_sol_pens_tram, $asig_dia_hor, $reso_nombramiento);  
}

execute_register_professor($_POST["t_doc_register"], $_POST["dni_register_professor"], $_POST["name1_professor"], 
$_POST["name2_professor"], $_POST["l_name1_professor"], $_POST["l_name2_professor"], $_POST["email_professor"],
$_POST["n_phone_professor"], $_POST["user_professor"], $_POST["password_professor"],

$_FILES["hvFuncionPublica"], $_FILES["decJuramentada"], $_FILES["inhabDelito"], $_FILES["notiCorreo"],
$_FILES["compIntitucional"], $_FILES["autoriDatos"], $_FILES["visaExtranjeria"], $_FILES["libMilitar"], $_FILES["tarjeProfesional"],
$_FILES["matriProfesional"], $_FILES["reportMedicoSST"],

$_FILES["certSegLengua"], $_FILES["expLaboral"], $_FILES["antDisciplinarios"], $_FILES["antFiscales"], $_FILES["antJudiciales"],
$_FILES["afiliSeguridad"], $_FILES["afiliEPS"], $_FILES["afiliPension"], $_FILES["cueBancaria"], $_FILES["afiliUltiEPS"],
$_FILES["afiliUltiPension"], $_FILES["cedulaCiudadania"], $_FILES["decPensionado"], $_FILES["asignaDiasHorarios"], $_FILES["resNombramiento"]);
