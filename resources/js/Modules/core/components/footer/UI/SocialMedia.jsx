import React from 'react';
import { PiInstagramLogoFill } from 'react-icons/pi';
import { FaSquareFacebook, FaSquareXTwitter, FaLinkedin, FaYoutube } from 'react-icons/fa6';
import clsx from 'clsx';

const SocialMedia = ({ size }) => {
  const baseClassesBtn = 'hover:scale-110 transition-all duration-200';

  return (
    <div className="flex flex-1 items-center justify-end gap-1 md:gap-3 lg:w-full lg:justify-between lg:gap-0">
      <a
        target="_blank"
        tabIndex="0"
        href="https://web.facebook.com/fceunal"
        rel="noopener noreferrer"
        aria-label="Ir a la página de Facebook de la Facultad de Ciencias Económicas"
        className={clsx(baseClassesBtn, 'hover:drop-shadow-[0_0_10px_#1877F2]')}
      >
        <FaSquareFacebook size={size} />
      </a>
      <a
        target="_blank"
        tabIndex="0"
        href="https://www.instagram.com/bienestarfceun"
        rel="noopener noreferrer"
        aria-label="Ir a la página de Instagram de la Facultad de Ciencias Económicas"
        className={clsx(baseClassesBtn, 'hover:drop-shadow-[0_0_10px_#E1306C]')}
      >
        <PiInstagramLogoFill size={size} />
      </a>
      <a
        target="_blank"
        tabIndex="0"
        href="https://x.com/fceunal"
        rel="noopener noreferrer"
        aria-label="Ir a la página de Twitter de la Facultad de Ciencias Económicas"
        className={clsx(baseClassesBtn, 'hover:drop-shadow-[0_0_10px_#000000]')}
      >
        <FaSquareXTwitter size={size} />
      </a>
      <a
        target="_blank"
        tabIndex="0"
        href="https://www.linkedin.com/company/fce-unal-bogota/"
        rel="noopener noreferrer"
        aria-label="Ir a la página de LinkedIn de la Facultad de Ciencias Económicas"
        className={clsx(baseClassesBtn, 'hover:drop-shadow-[0_0_10px_#0077B5]')}
      >
        <FaLinkedin size={size} />
      </a>
      <a
        target="_blank"
        tabIndex="0"
        href="https://youtube.com/@prensacid"
        rel="noopener noreferrer"
        aria-label="Ir a la página de YouTube de la Facultad de Ciencias Económicas"
        className={clsx(baseClassesBtn, 'hover:drop-shadow-[0_0_10px_#FF0000]')}
      >
        <FaYoutube size={size} />
      </a>
    </div>
  );
};

export default SocialMedia;
