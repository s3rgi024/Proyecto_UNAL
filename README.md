# Proyecto UNAL - FCE

## Descripción del Proyecto
Este proyecto tiene como objetivo automatizar procesos administrativos complejos relacionados con la contratación y renovación de docentes ocasionales en la Facultad de Ciencias Económicas (FCE). Para lograrlo, se plantearon tres módulos principales:

- **Usuarios:** Este módulo gestiona los permisos y usuarios del sistema, organizándolos en tres roles principales: Administrador, Administrativo y Docente.
- **Documentos:** Facilita la gestión de la documentación requerida por los docentes ocasionales para avanzar en el proceso de contratación.
- **Informes:** Proporciona herramientas para auditar los módulos del sistema y generar información útil para las áreas que lo necesiten.

## Estado del Proyecto
- **Estado actual:** 30% (Incompleto).
- **Justificación para reiniciar:** Recomiendo iniciar un nuevo proyecto desde cero utilizando un stack moderno. El proyecto actual presenta limitaciones significativas, como problemas de escalabilidad y seguridad, una estructura obsoleta que dificulta el mantenimiento y la evolución, y la falta de frameworks o librerías que promuevan buenas prácticas de desarrollo. Un stack moderno no solo mejorará la eficiencia y seguridad del sistema, sino que también facilitará la colaboración entre desarrolladores y la integración de nuevas funcionalidades.

He desarrollado una nueva estructura utilizando **Laravel 12**, **React 19** y **Inertia.js** para facilitar el inicio del desarrollo. Sin embargo, su uso no es obligatorio, y animo a los desarrolladores a explorar otros enfoques con stacks que consideren más adecuados. Si están interesados en esta estructura, pueden encontrarla en la rama **"V2"** del repositorio. Esta rama incluye modelos, migraciones y seeders, proporcionando un punto de partida limpio con un backend y frontend robustos y fáciles de conectar.

## Tecnologías Utilizadas
En la versión actual del proyecto, se utilizó PHP en su forma básica (vanilla) con MySQLi para la interacción con la base de datos. Además, se incorporaron las siguientes librerías de JavaScript para el frontend:

- **ChartJS:** Ideal para integrar gráficas de estadísticas en el frontend.
- **FontAwesome:** Proporciona una colección de íconos para usar en las vistas del sistema.
- **Swiper:** Permite crear carruseles de contenido en el cliente.
- **Tabulator:** Útil para generar tablas de datos dinámicas y personalizadas.
- **SweetAlert2:** Facilita la creación de alertas dentro del sistema.

## Documentación
 Puedes acceder a la documentación generada durante el desarrollo del proyecto a través del siguiente [enlace](https://drive.google.com/drive/folders/12WDi1QS_VUCPUfrEzaRd0XZY1ECAkkwB?usp=sharing).

## Estructura del Proyecto
El proyecto sigue una arquitectura **MVC (Modelo-Vista-Controlador)**, ampliamente utilizada en el desarrollo de aplicaciones web por su capacidad para separar responsabilidades entre los componentes.

## Vistas Realizadas
Los mockups del proyecto fueron diseñados en Figma. Puedes visualizarlos en el siguiente [enlace](https://www.figma.com/design/6Co3Gz7o3mEgDGO3FLBTIK/Mockups-Sistema-de-gesti%C3%B3n-de-archivos-UNAL?node-id=0-1&t=VBWPc2Em0UxKFmGp-1).

## Contacto
Si tienes alguna pregunta o necesitas más información, no dudes en contactarme:

- **Correo Electrónico:** sergioechaparro@gmail.com

- **Teléfono**: +57 3132703529
