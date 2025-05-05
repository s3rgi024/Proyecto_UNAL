import React from 'react';
import { Head } from '@inertiajs/react';
import Header from '@/Modules/core/components/header';
import Footer from '@/Modules/core/components/footer/Footer';
import useMinWidth from '@/Modules/core/hooks/useMinWidth';
import clsx from 'clsx';

const AppLayout = ({ children, title, favicon, background }) => {
  const isDesktop = useMinWidth();
  return (
    <div>
      <Head>
        <title>{title || 'Sin título'}</title>
        <meta
          name="description"
          content="Página de inicio del sistema de contratación de docentes ocasionales de la FCE"
        />
        <link rel="icon" type="image/x-icon" href={favicon || 'images/unal/icons/icon_fce.webp'} />
      </Head>

      <div className={clsx('lg:relative flex min-h-screen flex-col bg-cover bg-center bg-no-repeat overflow-hidden', !isDesktop && background)}>
        <div className='w-full h-[120%] bg-black inset-0 opacity-45 fixed'/>

        <Header mainColor="bg-gray" secondaryColor="bg-gray-light" />

        <main className={clsx('flex-1 bg-cover bg-center bg-no-repeat flex justify-center items-center', isDesktop && background)}>
          {children}
        </main>

        <Footer />
      </div>
    </div>
  );
};

export default AppLayout;
