import { twMerge } from 'tailwind-merge';
import { Button } from '@headlessui/react';

const AuthBtn = ({ ariaLabel, className, onClick, type, children}) => {
  return (
    <Button
      type={type}
      aria-label={ariaLabel}
      className={twMerge(
        'transform rounded-xl bg-secondary px-8 py-2.5 font-bold text-white shadow-[0_0_20px_#6fc5ff50] transition-all duration-300 hover:scale-105 hover:bg-secondary-light active:scale-98 active:transform active:bg-secondary-dark active:shadow-none active:transition-all active:duration-250',
        className
      )}
      onClick={onClick}
    >
      {children}
    </Button>
  );
};

export default AuthBtn;
