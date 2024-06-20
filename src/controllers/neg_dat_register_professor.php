<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

function saveFilesProfessor($professorName, $doc, $files) {
    include ("../../config/db_connection.php");

    $generalRoute = "../../docs/docentes_ocasionales/" . $professorName . "_" . $doc;
    $routeHojaVida = $generalRoute . "/Hoja de Vida";
    $routeVinculacion = $generalRoute . "/Vinculacion";

    if (!file_exists($generalRoute)) {
        mkdir($generalRoute, 0777, true);
    }
    if (!file_exists($routeHojaVida)) {
        mkdir($routeHojaVida, 0777, true);
    }
    if (!file_exists($routeVinculacion)) {
        mkdir($routeVinculacion, 0777, true);
    }

    $fieldsFiles = "INSERT INTO archivo_doc_oca ( fk_dni";
    $dataFiles = "VALUES ('$doc'";

    foreach ($files as $key => $file) {
        if (!is_array($file) || !isset($file['tmp_name'])) {
            continue;
        }

        $folderNumber = substr($key, 0, 1);
        $destination = ($folderNumber === '1') ? $routeHojaVida : $routeVinculacion;
        $newKey = substr($key, 2);

        if (move_uploaded_file($file["tmp_name"], $destination . "/" . $file["name"])) {
            $newName = $destination . "/" . $newKey . "." . pathinfo($file["name"], PATHINFO_EXTENSION);
            rename($destination . "/" . $file["name"], $newName);
            $$newKey = $newName;
            $fieldsFiles = $fieldsFiles . ", " . $newKey;
            $dataFiles = $dataFiles . ", '" . $$newKey . "'";
        }
    }

    $fieldsFiles = $fieldsFiles . ", fk_id_estado_documentacion, observaciones_estado)";
    $dataFiles = $dataFiles . ", 1, 'Primer Registro')";

    $sql_insert = $fieldsFiles . $dataFiles;

    mysqli_query($db_connection, $sql_insert);
}

function insertBasicDataProfessor($tdoc, $doc, $name1, $name2, $lName1,
$lName2, $email, $nPhone, $userName, $password){
    include ("../../config/db_connection.php");

    $consulta="SELECT * FROM usuarios WHERE id_tdoc ='$tdoc' AND id_usuario ='$doc'";
    $sql = $db_connection->query($consulta);

    $password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (id_tdoc, id_usuario, nombre1, nombre2, apellido1, 
    apellido2, correo, telefono, id_rol, usuario, clave, id_estado) 
    VALUES ('$tdoc', '$doc', '$name1', '$name2', '$lName1', '$lName2', '$email', '$nPhone', 1, '$userName', '$password', 2)";

    mysqli_query($db_connection, $sql);
}

function execute_register_professor($tdoc, $doc, $name1, $name2, $lName1,
$lName2, $email, $nPhone, $userName, $password,

$hoja_vida_func_pub, $decl_jur_ley, $ver_inh_del_sex, $notif_corr_elec,
$com_ins_vinc, $aut_trat_dat_per, $visa_ext, $fotoc_libr_mil, $tarjeta_prof, $matri_prof, $aval_sst,
$cert_segun_leng, $experien_lab, $antec_disc_procu, $antec_fisc_contral, $antec_judic_pol_nal, $form_afil_seg_social,
$form_afil_eps, $form_afil_pension, $cert_cuen_bancaria, $cert_afil_ult_eps, $certi_afil_fond_pensiones,
$cedula_ciu_ext, $decla_pen_sol_pens_tram, $asig_dia_hor, $reso_nombramiento){

    $files = array(
        "1_HojaVidaFuncionPublica" => $hoja_vida_func_pub,
        "1_DeclaracionJuramentadaLey4de1992" => $decl_jur_ley,
        "1_VerificacionInhabilidadDelitoSexual" => $ver_inh_del_sex,
        "1_AutorizacionNotificacionCorreoElec" => $notif_corr_elec,
        "1_CompromisoInstitucionalVinculacion" => $com_ins_vinc,
        "1_AutorizacionTratamientoDatPer" => $aut_trat_dat_per,
        "1_VisaExtranjeria" => $visa_ext,
        "1_FotocopiaLibretaMilitar" => $fotoc_libr_mil,
        "1_TarjetaProfesional" => $tarjeta_prof,
        "1_MatriculaProfesional" => $matri_prof,
        "1_AvalSST" => $aval_sst,
        "1_CertificadoSegundaLengua" => $cert_segun_leng,
        "1_ExperienciaLaboral" => $experien_lab,
        "1_AntecedentesDisciplinariosProcuraduria" => $antec_disc_procu,
        "1_AntecedenteFiscalContraloria" => $antec_fisc_contral,
        "1_AntecedenteJudicialPoliciaNal" => $antec_judic_pol_nal,

        "2_FormatoAfiliacionSeguridadSocial" => $form_afil_seg_social,
        "2_FormularioAfiliacionEps" => $form_afil_eps,
        "2_FormularioAfiliacionPension" => $form_afil_pension,
        "2_CertificadoCuentaBancaria" => $cert_cuen_bancaria,
        "2_CertificadoAfiliacionUltimaEPS" => $cert_afil_ult_eps,
        "2_CertificadoAfiliacionFondoPensiones" => $certi_afil_fond_pensiones,
        "2_CedulaCiudadania" => $cedula_ciu_ext,
        "2_DeclaPensionadoSolPensionenTramite" => $decla_pen_sol_pens_tram,
        "2_AsignaturasDiasHorarios" => $asig_dia_hor,
        "2_ResolucionNombramiento" => $reso_nombramiento
    );

    
    foreach ($files as $fieldName => $file) {
        if (!is_array($file) || !isset($file['tmp_name'])) {
            continue;
        }
        
        $fileType = mime_content_type($file['tmp_name']);
        if ($fileType !== 'application/pdf') {
            echo json_encode(['status' => 'error', 'message' => "Error: Todos los archivos deben ser PDFs. El archivo {$file['name']} ubicado en el campo '$fieldName' no es un PDF."]);
            return;
        }
    }

    // Insertar datos básicos del profesor
    insertBasicDataProfessor($tdoc, $doc, $name1, $name2, $lName1,
    $lName2, $email, $nPhone, $userName, $password);

    // Guardar los archivos del profesor
    saveFilesProfessor($name1 . $lName1, $doc, $files);
    
    echo json_encode(['status' => 'success', 'message' => $email]);
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
