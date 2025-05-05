import React from 'react';
import AuthLink from '@/Modules/auth/components/UI/AuthLink';
import clsx from 'clsx';

const FooterLinks = () => {
  const authLinkClasses = 'text-white hover:text-gray-300 text-md after:bg-gray-300';

  return (
    <div className="mx-8 mt-6 md:mt-10 md:mb-12 md:mx-15 mb-8 flex items-center justify-between gap-1 pb-5 md:flex-1 lg:m-0 lg:justify-center lg:p-0 lg:px-10">
      <nav aria-labelledby="footer-contact-title" className="flex-1">
        <h4 id="footer-contact-title" className="text-md md:text-lg">
          Contacto
        </h4>
        <div className="h-[2px] w-10 bg-white mb-1.5" />
        <ul className="text-[0.8rem] md:text-[1rem]">
          <li>
            <AuthLink
              type="a"
              route=""
              className={clsx(authLinkClasses, 'after:left-0')}
              text="Soporte"
              ariaLabel="Ir a la página de soporte"
            />
          </li>
          <li>
            <AuthLink
              type="a"
              route=""
              className={clsx(authLinkClasses, 'after:left-0')}
              text="Atención"
              ariaLabel="Ir a la página de atención"
            />
          </li>
          <li>
            <AuthLink
              type="a"
              route="tel:1234567890"
              className={clsx(authLinkClasses, 'after:left-0')}
              text="tel: 1234567890"
            />
          </li>
          <li>
            <AuthLink
              type="a"
              route=""
              className={clsx(authLinkClasses, 'after:left-0')}
              text="tel: 1234567890"
            />
          </li>
        </ul>
      </nav>
      <div className="flex flex-1 justify-center">
        <a
          href="https://unal.edu.co"
          target="_blank"
          rel="noopener noreferrer"
          aria-label="Ir al sitio web de la Universidad Nacional de Colombia"
        >
          <img
            src="images/unal/icons/logotipo_unal_blanco.webp"
            alt="Logotipo de la Universidad Nacional de Colombia"
            className="w-28 md:w-35 lg:w-40"
          />
        </a>
      </div>
      <nav aria-labelledby="footer-links-title" className="flex-1 text-right">
        <h4 id="footer-links-title" className="text-md md:text-lg">
          Enlaces
        </h4>
        <div className="ml-auto h-[2px] w-8 bg-white mb-1.5" />
        <ul className="text-[0.8rem] md:text-[1rem]">
          <li>
            <AuthLink
              type="link"
              route=""
              className={authLinkClasses}
              text="Privacidad"
              ariaLabel="Ir a la página de privacidad"
            />
          </li>
          <li>
            <AuthLink
              type="link"
              route=""
              className={authLinkClasses}
              text="Instructivo"
              ariaLabel="Ir a la página del instructivo"
            />
          </li>
          <li>
            <AuthLink
              type="a"
              route="https://fce.unal.edu.co/facultad/"
              className={authLinkClasses}
              text="Facultad"
              ariaLabel="Ir al sitio web de la Facultad de Ciencias Económicas"
            />
          </li>
          <li>
            <AuthLink
              type="a"
              route="https://unal.edu.co"
              className={authLinkClasses}
              text="Universidad"
              ariaLabel="Ir al sitio web de la Universidad Nacional de Colombia"
            />
          </li>
        </ul>
      </nav>
    </div>
  );
};

export default FooterLinks;
