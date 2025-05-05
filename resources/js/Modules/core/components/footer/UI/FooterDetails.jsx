import React, { useState } from 'react';
import clsx from 'clsx';
import useMinWidth from '@/Modules/core/hooks/useMinWidth';
import { FaPeopleGroup, FaCode } from 'react-icons/fa6';

const FooterDetails = () => {
  const isDesktop = useMinWidth(1024);
  const [isSelectedInfo, setIsSelectedInfo] = useState(true);

  const toggleSelectInfo = (isInfo) => {
    setIsSelectedInfo(isInfo);
  };

  return (
    <div className="flex h-full w-full items-center justify-between gap-1.5 transition-all duration-600 ease-out lg:flex-1 lg:gap-4">
      {isDesktop && (
        <div className="ml-10 flex h-35 w-1.5 flex-col gap-1.5">
          <div className="h-[80%] w-full bg-primary" />
          <div className="h-[20%] bg-white" />
        </div>
      )}
      <div className="flex w-[60%] flex-col justify-center gap-1.5 md:w-[50%] md:pl-10 lg:h-full lg:w-full lg:gap-4 lg:pl-0">
        <ul className="flex gap-1 text-[0.8rem] font-bold sm:text-lg" role="tablist">
          <li
            onClick={() => toggleSelectInfo(true)}
            role="tab"
            aria-selected={isSelectedInfo}
            tabIndex={0}
            className={clsx(
              'flex cursor-pointer items-center gap-0.5',
              isSelectedInfo && 'border-b-2'
            )}
            onKeyDown={(e) => {
              if (e.key === 'Enter' || e.key === ' ') {
                toggleSelectInfo(true);
              }
            }}
          >
            <FaPeopleGroup /> Nosotros
          </li>
          <li
            onClick={() => toggleSelectInfo(false)}
            role="tab"
            aria-selected={!isSelectedInfo}
            tabIndex={0}
            className={clsx(
              'flex cursor-pointer items-center gap-0.5',
              !isSelectedInfo && 'border-b-2'
            )}
            onKeyDown={(e) => {
              if (e.key === 'Enter' || e.key === ' ') {
                toggleSelectInfo(false);
              }
            }}
          >
            <FaCode /> Desarrolladores
          </li>
        </ul>
        <div className="relative flex h-15 w-full flex-col items-center justify-center">
          <p
            className={clsx(
              'absolute text-left text-[0.75rem] leading-3.5 text-balance transition-all transition-discrete duration-400 sm:text-[1rem] sm:leading-4.5 md:text-[.8rem] md:leading-5 starting:opacity-0',
              isSelectedInfo ? 'block' : 'hidden opacity-0'
            )}
            aria-hidden={!isSelectedInfo}
          >
            {isDesktop ? (
              <span>
                La <span className="font-bold">FCE</span>, en su compromiso con la innovación y el
                fortalecimiento institucional, presenta esta plataforma para automatizar los
                procesos de contratacion de docentes ocasionales de la facultad, garantizando
                transparencia y eficacia en cada etapa del proceso.
              </span>
            ) : (
              <span>
                La <span className="font-bold">FCE</span>, en su compromiso con la innovación,
                presenta esta plataforma para automatizar los procesos de contratación de docentes
                ocasionales.
              </span>
            )}
          </p>
          <p
            className={clsx(
              'lg:text- text-left text-[0.75rem] leading-3.5 transition-all transition-discrete duration-400 sm:text-[1rem] sm:leading-4.5 md:text-[.8rem] md:leading-5 starting:opacity-0',
              !isSelectedInfo ? 'block' : 'hidden opacity-0'
            )}
            aria-hidden={isSelectedInfo}
          >
            {isDesktop ? (
              <span>
                Este sistema ha sido desarrollado por{' '}
                <span className="font-bold">Sergio Chaparro</span> y{' '}
                <span className="font-bold">Santiago Alza</span>, desarrolladores web apasionados
                por la tecnología, enfocados en ofrecer soluciones digitales eficientes,
                personalizadas y de alta calidad.
              </span>
            ) : (
              <span>
                Este sistema fue desarrollado por <span className="font-bold">Sergio Chaparro</span>
                y <span className="font-bold">Santiago Alza</span>, programadores web comprometidos
                con brindar soluciones tecnológicas eficaces y a medida.
              </span>
            )}
          </p>
        </div>
      </div>
      {!isDesktop && (
        <div className="relative flex w-[40%] items-center justify-center md:w-[50%]">
          <img
            src="images/auth/about_us.webp"
            alt="Personas caminando junto a una Facultad"
            className={clsx(
              'tarting:opacity-0 absolute w-35 transition-all transition-discrete duration-400 sm:w-45',
              isSelectedInfo ? 'block' : 'hidden opacity-0'
            )}
            aria-hidden={!isSelectedInfo}
          />
          <img
            src="images/auth/devs_info.webp"
            alt="Desarrolladores de software"
            className={clsx(
              'tarting:opacity-0 absolute w-30 transition-all transition-discrete duration-400 sm:w-35',
              !isSelectedInfo ? 'block' : 'hidden opacity-0'
            )}
            aria-hidden={isSelectedInfo}
          />
        </div>
      )}
    </div>
  );
};

export default FooterDetails;
