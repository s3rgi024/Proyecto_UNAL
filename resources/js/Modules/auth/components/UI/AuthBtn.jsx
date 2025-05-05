import React from 'react';
import { twMerge } from 'tailwind-merge';

const AuthBtn = ({ text, ariaLabel, className }) => {
  return (
    <button
      type="submit"
      aria-label={ariaLabel || text}
      className={twMerge(
        'hover:scale-105 transform rounded-xl bg-secondary px-8 py-2.5 font-bold text-white shadow-[0_0_20px_#6fc5ff50] transition-all duration-300 hover:bg-secondary-light active:scale-98 active:transform active:bg-secondary-dark active:shadow-none active:transition-all active:duration-250',
        className
      )}
    >
      {text}
    </button>
  );
};

export default AuthBtn;
