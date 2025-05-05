import React from 'react';
import FooterBar from '../UI/FooterBar';
import FooterLinks from '../UI/FooterLinks';

const FooterMobileLayout = () => {
  return (
    <div className="relative flex flex-col justify-center md:flex-row">
      <FooterLinks />
      <FooterBar />
    </div>
  );
};

export default FooterMobileLayout;
