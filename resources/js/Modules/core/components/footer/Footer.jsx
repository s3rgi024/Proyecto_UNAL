import React from 'react';
import FooterMobileLayout from './layouts/FooterMobileLayout';
import FooterDeskLayout from './layouts/FooterDeskLayout';
import useMinWidth from '@/Modules/core/hooks/useMinWidth';

const Footer = () => {
  const isDesktop = useMinWidth(1024);

  return (
    <footer className="z-2 w-full rounded-t-xl bg-gray text-white md:rounded-none">
      {isDesktop ? <FooterDeskLayout/> : <FooterMobileLayout />}
    </footer>
  );
};

export default Footer;
