import { twMerge } from 'tailwind-merge';
import { Link } from '@inertiajs/react';
import clsx from 'clsx';

const AuthLink = ({ type, route, className, text, ariaLabel, target }) => {
  const baseClasses = clsx(
    'cursor-pointer relative text-sm text-secondary transition-all duration-200',
    "after:absolute after:right-0 after:bottom-0 after:h-0.5 after:w-0 after:bg-secondary-dark after:transition-all after:duration-300 after:content-['']",
    'hover:scale-102 hover:text-secondary-dark hover:after:w-full'
  );

  return type === 'link' ? (
    <Link
      preserveState
      href={route}
      tabIndex="0"
      aria-label={ariaLabel || text}
      className={twMerge(baseClasses, className)}
    >
      {text}
    </Link>
  ) : type === 'a' ? (
    <a
      href={route}
      tabIndex="0"
      aria-label={ariaLabel || text}
      target={target || '_blank'}
      rel="noopener noreferrer"
      className={twMerge(baseClasses, className)}
    >
      {text}
    </a>
  ) : null;
};

export default AuthLink;
