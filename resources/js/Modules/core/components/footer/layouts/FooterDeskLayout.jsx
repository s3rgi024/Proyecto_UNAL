import React from 'react';
import FooterDetails from '../UI/FooterDetails';
import FooterLinks from '../UI/FooterLinks';
import SocialMedia from '../UI/SocialMedia';
import { getCurrentYear } from '@/Modules/core/utils/currentYear';

const FooterDeskLayout = () => {
  const currentYear = getCurrentYear();

  return (
    <div className="relative flex items-center justify-between gap-2 pt-12 pb-18">
      <FooterDetails />
      <FooterLinks />
      <div className="mr-10 flex basis-1/3 items-center justify-end">
        <div className="w-75">
          <img src="images/unal/icons/logo_FCE_blanco.webp" alt="Logo FCE" className="" />
          <SocialMedia size={45} />
        </div>
      </div>

      <div className="absolute bottom-0 flex w-full items-center justify-center bg-gray-light">
        <span className="text-[.75rem]">
          &copy; {currentYear} Universidad Nacional de Colombia - FCE. Sistema de uso exclusivo para
          miembros autorizados. Todos los derechos reservados
        </span>
      </div>
    </div>
  );
};

export default FooterDeskLayout;
