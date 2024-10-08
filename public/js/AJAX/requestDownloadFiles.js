import Swal from '../../../node_modules/sweetalert2/src/sweetalert2.js';

document.addEventListener('DOMContentLoaded', function () {
    const downloadButton = document.querySelector('.download');
    const backButton = document.querySelector('.back');
    const finishButton = document.querySelector('.finish');

    downloadButton.addEventListener('click', function () {
        const folderPath = downloadButton.getAttribute('data-folder-path');

        Swal.fire({
            title: '¿Desea continuar con la descarga?',
            showCancelButton: true,
            confirmButtonText: 'Continuar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('../../controllers/download_zip.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ folderPath: folderPath })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Descarga completada',
                            text: 'El archivo se descargará en breve.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al intentar descargar el archivo.'
                    });
                });
            }
        });
    });

    backButton.addEventListener('click', ()=>{
        window.location.href = './vis_arch.php';
    });

    finishButton.addEventListener('click', ()=>{
        window.location.href = './doc_main.php';
    });
});
