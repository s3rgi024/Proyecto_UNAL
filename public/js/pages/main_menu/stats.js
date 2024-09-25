import * as chart from '../../../../node_modules/chart.js/dist/chart.umd.js';

Chart.defaults.font.family = 'Roboto Condensed';
Chart.defaults.font.style = 'sans-serif';  

function getPastelColor() {
    const r = Math.floor(Math.random() * 127 + 127); 
    const g = Math.floor(Math.random() * 127 + 127); 
    const b = Math.floor(Math.random() * 127 + 127);
    return `rgb(${r}, ${g}, ${b})`;
}

function generatePastelColorArray(num) {
    const colors = [];
    for (let i = 0; i < num; i++) {
        colors.push(getPastelColor());
    }
    return colors;
}

let myChart;

function obtenerFechasInicioYFin() {
    const fechaFin = new Date(); // Fecha actual
    const fechaInicio = new Date(); // Crear una copia de la fecha actual

    // Restar 3 meses a la fecha actual
    fechaInicio.setMonth(fechaInicio.getMonth() - 3);

    // Formatear las fechas al formato 'YYYY-MM-DD'
    const formatoFecha = (fecha) => {
        const year = fecha.getFullYear();
        const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Los meses van de 0 a 11, por eso sumamos 1
        const day = String(fecha.getDate()).padStart(2, '0'); // Asegurarse de que tenga dos dígitos
        return `${year}-${month}-${day}`;
    };

    return {
        fechaInicio: formatoFecha(fechaInicio),
        fechaFin: formatoFecha(fechaFin)
    };
}

// Ejemplo de uso:
const { fechaInicio, fechaFin } = obtenerFechasInicioYFin();

// Función para convertir fechas en formato 'YYYY-MM' a nombres de meses en español
function formatDateToSpanishMonth(dateStr, interval) {
    const months = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    const [year, month] = dateStr.split('-').map(Number);

    if (interval === 'mes') {
        return `${months[month - 1]} ${year}`;
    } else if (interval === 'ano') {
        return `${year}`;
    } else {
        return dateStr; // Para 'dia' o formatos desconocidos
    }
}


// Función para unificar las etiquetas y alinear los datos cronológicamente
function unifyLabelsAndAlignMultipleDatasets(...datasets) {
    const allLabels = datasets.map(dataset => dataset.labels);
    const unifiedLabels = Array.from(new Set(allLabels.flat()));

    // Ordenar cronológicamente las etiquetas
    const unifiedLabelsSorted = unifiedLabels.sort((a, b) => {
        const dateA = new Date(a); // Convertir la etiqueta en objeto Date
        const dateB = new Date(b);
        return dateA - dateB; // Orden ascendente cronológicamente
    });

    // Alinear los datos con las etiquetas unificadas
    const alignedDatasets = datasets.map(dataset => {
        return unifiedLabelsSorted.map(label => {
            const index = dataset.labels.indexOf(label);
            return index !== -1 ? dataset.data[index] : 0;
        });
    });

    return { unifiedLabels: unifiedLabelsSorted, alignedDatasets };
}

// Función para actualizar la gráfica con datos de ambos archivos
function registeredUsersChart(intervalo) {
    Promise.all([
        fetch('../../../../src/controllers/stats/get_delivered_docs.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `intervalo=${intervalo}&id_estado=${3}&fecha_inicio=${fechaInicio}&fecha_fin=${fechaFin}`
        }),
        fetch('../../../../src/controllers/stats/get_delivered_docs.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `intervalo=${intervalo}&id_estado=${1}&fecha_inicio=${fechaInicio}&fecha_fin=${fechaFin}`
        }),
        fetch('../../../../src/controllers/stats/get_delivered_docs.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `intervalo=${intervalo}&id_estado=${2}&fecha_inicio=${fechaInicio}&fecha_fin=${fechaFin}`
        })
    ])
    .then(responses => Promise.all(responses.map(response => response.json())))
    .then(([data1, data2, data3]) => {
        const colors = generatePastelColorArray(3);

        const { unifiedLabels, alignedDatasets } = unifyLabelsAndAlignMultipleDatasets(
            { labels: data1.tiempo, data: data1.total },
            { labels: data2.tiempo, data: data2.total },
            { labels: data3.tiempo, data: data3.total }
        );

        const formattedTiempo = unifiedLabels.map(dateStr => formatDateToSpanishMonth(dateStr, intervalo));

        const ctx = document.getElementById('myChart').getContext('2d');

        if (myChart) {
            // Destruir el gráfico anterior
            myChart.destroy();
        }

        // Crear el gráfico con los datos alineados
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: formattedTiempo, // Usamos las etiquetas unificadas
                datasets: [
                    {
                        label: ['Docentes con', 'documentos', 'en revisión'],
                        data: alignedDatasets[0], // Datos alineados del primer archivo
                        backgroundColor: colors[0],
                        borderColor: colors[0].replace('rgb', 'rgba').replace(')', ', 1)'),
                        borderWidth: 0.5,
                        borderRadius: 5
                    },
                    {
                        label: ['Docentes con', 'documentos', 'aprobados'],
                        data: alignedDatasets[1], // Datos alineados del segundo archivo
                        backgroundColor: colors[1],
                        borderColor: colors[1].replace('rgb', 'rgba').replace(')', ', 1)'),
                        borderWidth: 0.5,
                        borderRadius: 5
                    },
                    {
                        label: ['Docentes con', 'documentos', 'rechazados'],
                        data: alignedDatasets[2],
                        backgroundColor: colors[2],
                        borderColor: colors[2].replace('rgb', 'rgba').replace(')', ', 1)'),
                        borderWidth: 0.5,
                        borderRadius: 5
                    }
                ]
            },
            options: {
                responsive: true, // Hace que el gráfico sea adaptable
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true, // Mostrar la leyenda
                        position: 'right', // Posición de la leyenda: 'top', 'bottom', 'left', 'right'
                        labels: {
                            boxWidth: 15, // Tamaño del recuadro de color
                            font: {
                                size: 11 // Tamaño de la fuente de las etiquetas
                            },
                            color: '#000', // Color del texto
                            padding: 10 // Espaciado alrededor de la etiqueta
                        }
                    },
                    tooltip: {
                        enabled: true,
                        backgroundColor: 'rgba(250, 250, 250, 0.9)', // Color de fondo
                        titleColor: '#000', // Color del título
                        bodyColor: '#000', // Color del texto
                        titleFont: {
                            size: 12, // Tamaño de fuente del título
                            weight: 'bold' // Peso del título
                        },
                        bodyFont: {
                            size: 11 // Tamaño de fuente del texto del cuerpo
                        },
                        padding: 8, // Espaciado interno
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';  // Obtiene la etiqueta del dataset
                                if (label) {
                                    label += ': ';  // Si la etiqueta existe, añade ': '
                                }
                                label += context.raw || 0;  // Añade el valor del dato

                                // Reemplazar todas las comas por espacios en el label
                                label = label.replace(/,/g, ' ');

                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 11 // Cambia el tamaño de la letra de los labels en el eje X
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    });
}

// Llamada inicial para el intervalo 'mes'
registeredUsersChart('mes');
