<?php
function zipDirectory($source, $destination) {
    if (!extension_loaded('zip')) {
        error_log('La extensión zip no está habilitada.');
        return false;
    }

    if (!file_exists($source)) {
        error_log("El directorio fuente no existe: $source");
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZipArchive::CREATE)) {
        error_log("No se pudo crear el archivo ZIP en la ubicación: $destination");
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));

    if (is_dir($source) === true) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file) {
            $file = str_replace('\\', '/', $file);

            if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..'))) {
                continue;
            }

            $file = realpath($file);

            if (is_dir($file) === true) {
                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            } else if (is_file($file) === true) {
                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
        }
    } else if (is_file($source) === true) {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    return $zip->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $source = "../../docs/docentes_ocasionales/" . $data['folderPath'] . "/vinculacion";
    $destination = "/" . $source . '.zip';

    // Depuración
    error_log("Intentando crear un ZIP desde: $source hacia: $destination");

    if (zipDirectory($source, $destination)) {

        echo json_encode(['success' => true, 'file' => $destination]);
    } else {
        error_log('Error al crear el archivo ZIP.');
        echo json_encode(['success' => false, 'message' => 'Error al crear el archivo ZIP. ' . $source . $destination]);
    }
}