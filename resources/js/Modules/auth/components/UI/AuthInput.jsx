import clsx from 'clsx';
import React from 'react';
import InputError from './InputError';

const AuthInput = ({
  label,
  Icon,
  name,
  type = 'text',
  required = false,
  placeholder = '',
  color,
  errors = '',
  ariaLabel,
}) => {
  return (
    <div className="flex w-full flex-col gap-2 px-15">
      {label && (
        <div className='flex items-start'>
          <label htmlFor={name} className="text-md text-gray-700">
            {label}
          </label>
        </div>
      )}
      <div className="flex w-full items-center gap-1.5">
        {Icon && (
          <label htmlFor={name}>
            <Icon size={25} className={errors ? 'text-error' : 'text-gray-700'} />
          </label>
        )}
        <div className="relative w-full">
          <input
            type={type}
            id={name}
            name={name}
            placeholder={placeholder}
            {...(required && { required })}
            aria-label={ariaLabel || label}
            aria-describedby={errors ? `${name}-error` : undefined}
            aria-invalid={!!errors} // Indica si el campo tiene errores
            autoComplete={type === 'email' ? 'email' : undefined}
            className={clsx(
              'peer w-full border-b-2 focus:ring-0 focus:outline-none',
              errors ? 'border-error' : 'border-gray-light'
            )}
          />
          <div
            className={clsx(
              "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:transition-transform before:duration-300 before:content-[''] peer-focus:before:scale-x-100",
              color && `before:${color}`
            )}
          />
        </div>
      </div>
      {errors && <InputError error={errors} id={`${name}-error`} className="pl-7" />}
    </div>
  );
};

export default AuthInput;
