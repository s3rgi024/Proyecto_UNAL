import React from 'react';
import { Head } from '@inertiajs/react';
import Header from '@/Modules/core/components/header';
import Footer from '@/Modules/core/components/footer/Footer';
import clsx from 'clsx';

const AppLayout = ({ children, title, favicon, background }) => {
  return (
    <>
      <Head>
        <title>{title || 'Sin título'}</title>
        <meta
          name="description"
          content="Página de inicio del sistema de contratación de docentes ocasionales de la FCE"
        />
        <link rel="icon" type="image/x-icon" href={favicon || 'images/unal/icons/icon_fce.webp'} />
      </Head>
      <div
        className={clsx(
          'flex min-h-screen flex-col overflow-hidden bg-cover bg-center bg-no-repeat lg:relative',
          background
        )}
      >
        <div className="fixed inset-0 h-[120%] w-full bg-black opacity-45" />

        <Header mainColor="bg-gray" secondaryColor="bg-gray-light" />

        <main
          className={clsx(
            'flex flex-1 items-center justify-center bg-cover bg-center bg-no-repeat',
            `lg:${background}`
          )}
        >
          {children}
        </main>

        <Footer />
      </div>
    </>
  );
};

export default AppLayout;
