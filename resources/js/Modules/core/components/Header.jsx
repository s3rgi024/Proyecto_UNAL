import React from 'react';
import clsx from 'clsx';
import { Link } from '@inertiajs/react';

const Header = ({ mainColor, secondaryColor }) => {
  return (
    <header
      className={clsx(
        'z-2 flex h-[8vh] w-full items-center justify-between rounded-b-md px-2 md:h-[10vh] md:rounded-none md:px-5 lg:h-[15vh]',
        mainColor || 'bg-gray'
      )}
    >
      <div className="[filter:drop-shadow(1px_5px_5px_rgba(59,59,59,0.5))]">
        <Link href='/'>
          <div
            className={clsx(
              'flex h-25 w-35 items-center justify-center self-center rounded-b-lg p-2 [box-shadow:_2px_2px_4px_rgba(0,_0,_0,_0.4)] md:mt-2.5 md:h-35 md:w-55 md:rounded-none md:[clip-path:_polygon(0_0,_100%_0,_100%_90%,_0%_100%)]',
              secondaryColor || 'bg-gray-light'
            )}
          >
            <img
              className="mt-2.5 md:mt-0"
              src="images/unal/icons/logosimbolo_unal_blanco.webp"
              alt="Logo Universidad Nacional de Colombia"
            />
          </div>
        </Link>
      </div>
      <div>
        <img
          className="hidden sm:w-50 sm:block md:w-60"
          src="images/unal/icons/logo_FCE_blanco.webp"
          alt="Logo de la Facultad de Ciencias Económicas"
        />
      </div>
    </header>
  );
};

export default Header;
