<?php
function zipDirectory($source, $destination) {
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));

    if (is_dir($source) === true) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file) {
            $file = str_replace('\\', '/', $file);

            // Ignore "." and ".." folders
            if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..')))
                continue;

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
    $source = $data['folderPath']; // Ruta de la carpeta obtenida desde la solicitud
    $destination = $source . '.zip'; // La ruta y nombre del archivo ZIP que se creará

    // Agregar alerta para verificar la ruta de la carpeta
    echo "<script>alert('Ruta de carpeta: $source');</script>";

    if (zipDirectory($source, $destination)) {
        echo json_encode(['success' => true, 'file' => $destination]);
    } else {
        // Agregar alerta para identificar posibles errores
        echo "<script>alert('Error al crear el archivo ZIP.');</script>";
        echo json_encode(['success' => false, 'message' => 'Error al crear el archivo ZIP.']);
    }
}

