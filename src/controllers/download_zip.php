<?php

ini_set('log_errors', 1);
ini_set('error_log', '../../logs/error.log');

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
    if ($zip->open($destination, ZipArchive::CREATE) !== true) {
        error_log("No se pudo crear el archivo ZIP en la ubicación: $destination");
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));
    error_log("Directorio fuente: $source");

    if (is_dir($source) === true) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file) {
            $file = str_replace('\\', '/', $file);

            if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..'))) {
                continue;
            }

            $filePath = realpath($file);
            error_log("Procesando archivo: $filePath");

            if (is_dir($filePath) === true) {
                $zip->addEmptyDir(str_replace($source . '/', '', $filePath . '/'));
                error_log("Añadiendo directorio: " . str_replace($source . '/', '', $filePath . '/'));
            } else if (is_file($filePath) === true) {
                $zip->addFromString(str_replace($source . '/', '', $filePath), file_get_contents($filePath));
                error_log("Añadiendo archivo: " . str_replace($source . '/', '', $filePath));
            }
        }
    } else if (is_file($source) === true) {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    return $zip->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $folderPath = $data['folderPath'];
    $source = realpath("../../docs/docentes_ocasionales/$folderPath");
    $tempZipPath = tempnam(sys_get_temp_dir(), 'zip');
    $destination = "../../docs/docentes_ocasionales/$folderPath.zip";

    // Depuración
    error_log("Intentando crear un ZIP desde: $source hacia: $tempZipPath");

    if (zipDirectory($source, $tempZipPath)) {
        error_log('Archivo ZIP creado con éxito.');

        // Verificar si el archivo existe después de la creación
        if (file_exists($tempZipPath)) {
            error_log('Archivo ZIP verificado y encontrado: ' . $tempZipPath);

            // Mover el archivo ZIP a la ubicación final
            rename($tempZipPath, $destination);

            // Verificar si el archivo existe después de moverlo
            if (file_exists($destination)) {
                error_log('Archivo ZIP movido y encontrado: ' . $destination);

                // Servir el archivo ZIP al cliente
                header('Content-Description: File Transfer');
                header('Content-Type: application/zip');
                header('Content-Disposition: attachment; filename="'.basename($destination).'"');
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($destination));

                ob_clean();
                flush();
                readfile($destination);
                exit();
            } else {
                error_log('El archivo ZIP no se encontró después de moverlo.');
                echo json_encode(['success' => false, 'message' => 'Error al encontrar el archivo ZIP para descargar después de moverlo.']);
            }
        } else {
            error_log('El archivo ZIP no se encontró después de la creación.');
            echo json_encode(['success' => false, 'message' => 'Error al encontrar el archivo ZIP para descargar.']);
        }
    } else {
        error_log('Error al crear el archivo ZIP.');
        echo json_encode(['success' => false, 'message' => 'Error al crear el archivo ZIP.']);
    }
}