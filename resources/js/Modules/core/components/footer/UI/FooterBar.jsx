import React, { useState } from 'react';
import clsx from 'clsx';
import SocialMedia from './socialMedia';
import { BsFillInfoCircleFill } from 'react-icons/bs';
import { FaCircleArrowLeft } from 'react-icons/fa6';
import FooterDetails from './FooterDetails';
import { getCurrentYear } from '@/Modules/core/utils/currentYear';

const FooterBar = () => {
  const currentYear = getCurrentYear();
  const [isOpenModal, setIsOpenModal] = useState(false);

  const toggleFooterModal = () => {
    setIsOpenModal(!isOpenModal);
  };

  return (
    <div
      className={clsx(
        'absolute bottom-0 flex w-full flex-col justify-between rounded-t-xl bg-secondary px-2 transition-[height] duration-500 ease-in-out',
        isOpenModal ? 'h-45' : 'h-7 md:h-10'
      )}
      role="contentinfo"
    >
      <div
        className={clsx(
          'mx-5 flex h-full items-center justify-between gap-1.5 pb-7 transition-all duration-600 ease-out',
          isOpenModal ? 'scale-100 opacity-100' : 'scale-0 opacity-0'
        )}
        id="footer-details"
      >
        <FooterDetails />
      </div>

      <div className="relative">
        <div className="absolute bottom-0 flex w-full items-center md:bottom-1">
          <div className="flex flex-1 gap-1">
            <button
              onClick={toggleFooterModal}
              aria-expanded={isOpenModal}
              aria-controls="footer-details"
              aria-label={
                isOpenModal
                  ? 'Cerrar detalles del pie de página'
                  : 'Abrir detalles del pie de página'
              }
            >
              {isOpenModal ? <FaCircleArrowLeft size={20} /> : <BsFillInfoCircleFill size={20} />}
            </button>
            <img
              className="w-25"
              src="images/unal/icons/logo_FCE_blanco.webp"
              alt="Logo Facultad de Ciencias Económicas"
            />
          </div>
          <div className="flex-1 md:flex-2 justify-center text-center">
            <span className="text-[.6rem] md:flex md:items-center md:justify-center md:gap-1 md:text-sm md:font-bold">
              &copy; {currentYear}
              <span className="hidden md:flex">Universidad Nacional de Colombia - FCE</span>
            </span>
          </div>
          <SocialMedia size={22} />
        </div>
      </div>
    </div>
  );
};

export default FooterBar;
