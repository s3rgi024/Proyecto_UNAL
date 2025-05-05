import { useEffect, useState } from 'react';

/**
 * Hook que devuelve true si el ancho de la pantalla es mayor o igual al breakpoint.
 * @param breakpoint - Ancho mínimo en píxeles para considerar "desktop". Por defecto: 768.
 * @returns booleano indicando si es vista de escritorio.
 */

const useMinWidth  = (breakpoint = 768) => {
  const [isDesktop, setIsDesktop] = useState(false);

  useEffect(() => {
    const handleResize = () => {
      setIsDesktop(window.innerWidth >= breakpoint);
    };

    // Llamada inicial
    handleResize();

    // Escucha cambios de tamaño
    window.addEventListener('resize', handleResize);

    // Limpieza
    return () => {
      window.removeEventListener('resize', handleResize);
    };
  }, [breakpoint]);

  return isDesktop;
};

export default useMinWidth ;
