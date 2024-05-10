<?php 
//error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING & ~E_NOTICE);

function createDirs($professorName, $tdoc, $doc){
    //crear carpeta de docente
    $dir_professor = "../../docs/docentes_ocasionales/" . $professorName . "_" . $doc;
    mkdir($dir_professor);

    //crear carpetas de hoja de vida y vinculación
    mkdir($dir_professor . "/Hoja de Vida");
    mkdir($dir_professor . "/Vinculacion");
}

function saveFilesProfessor($professorName, $doc, $files) {

    include ("../../config/db_connection.php");

    $generalRoute = "../../docs/docentes_ocasionales/" . $professorName . "_" . $doc;
    $routeHojaVida = $generalRoute . "/Hoja de Vida";
    $routeVinculacion = $generalRoute . "/Vinculacion";

    foreach ($files as $key => $file) {
        if (!is_array($file) || !isset($file['tmp_name'])) {
            continue; // Si el archivo no está presente, pasar al siguiente
        }
        $folderNumber = substr($key, 0, 1);
        // Determinar la carpeta de destino basándose en el número
        $destination = ($folderNumber === '1') ? $routeHojaVida : $routeVinculacion;
        // Otorgar permisos de escritura a la carpeta de destino
        chmod($destination, 0777); // 0777 otorga permisos completos, puedes ajustarlo según tus necesidades de seguridad

        echo $destination;
        move_uploaded_file($file["tmp_name"], $destination . "/" . $file["name"]);
        $$key = $destination . "/" . $file["name"]; // Asignar ruta del archivo a una variable con el nombre correspondiente
    }

    // Insertar en la base de datos usando las variables creadas arriba
   

    echo "Inserciones exitosas.";
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


    $files = $files = array(
        "1_hoja_vida_func_pub" => $hoja_vida_func_pub,
        "1_decl_jur_ley" => $decl_jur_ley,
        "1_ver_inh_del_sex" => $ver_inh_del_sex,
        "1_notif_corr_elec" => $notif_corr_elec,
        "1_com_ins_vinc" => $com_ins_vinc,
        "1_aut_trat_dat_per" => $aut_trat_dat_per,
        "1_visa_ext" => $visa_ext,
        "1_fotoc_libr_mil" => $fotoc_libr_mil,
        "1_tarjeta_prof" => $tarjeta_prof,
        "1_matri_prof" => $matri_prof,
        "1_aval_sst" => $aval_sst,
        "1_cert_segun_leng" => $cert_segun_leng,
        "1_experien_lab" => $experien_lab,
        "1_antec_disc_procu" => $antec_disc_procu,
        "1_antec_fisc_contral" => $antec_fisc_contral,
        "1_antec_judic_pol_nal" => $antec_judic_pol_nal,


        "2_form_afil_seg_social" => $form_afil_seg_social,
        "2_form_afil_eps" => $form_afil_eps,
        "2_form_afil_pension" => $form_afil_pension,
        "2_cert_cuen_bancaria" => $cert_cuen_bancaria,
        "2_cert_afil_ult_eps" => $cert_afil_ult_eps,
        "2_certi_afil_fond_pensiones" => $certi_afil_fond_pensiones,
        "2_cedula_ciu_ext" => $cedula_ciu_ext,
        "2_decla_pen_sol_pens_tram" => $decla_pen_sol_pens_tram,
        "2_asig_dia_hor" => $asig_dia_hor,
        "2_reso_nombramiento" => $reso_nombramiento
    );
    //se guardan los archivos en el directorio creado
    saveFilesProfessor($name1 . $lName1, $doc, $files);


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
