import React, { useState } from 'react';
import clsx from 'clsx';
import InputError from './InputError';
import { Field, Input, Label } from '@headlessui/react';
import { twMerge } from 'tailwind-merge';

const AuthInputNumber = ({
  label,
  Icon,
  name,
  type = 'text',
  placeholder = '',
  color,
  ariaLabel,
  min,
  max,
  pattern,
  register,
  error,
}) => {
  const [isFocus, setIsFocus] = useState(false);

  return (
    <Field className="flex w-full flex-col px-12">
      {label && (
        <div className="flex items-start">
          <Label htmlFor={name} className="text-md text-gray-700">
            {label}
          </Label>
        </div>
      )}
      <div className="flex w-full items-center gap-1.5">
        {Icon && (
          <Label htmlFor={name}>
            <Icon
              size={25}
              className={twMerge(
                clsx(
                  'transition-colors duration-200',
                  error ? 'text-error' : 'text-gray-700',
                  isFocus && !error && `text-${color}`
                )
              )}
            />
          </Label>
        )}
        <div className="relative w-full">
          <Input
            type={type}
            id={name}
            name={name}
            placeholder={placeholder}
            onFocus={() => setIsFocus(true)}
            onBlurCapture={() => setIsFocus(false)}
            onChange={(e) => handleChange(e.target.name, e.target.value)}
            aria-label={ariaLabel || label}
            aria-describedby={error ? `${name}-error` : undefined}
            aria-invalid={!!error}
            autoComplete={type || undefined}
            minLength={min}
            maxLength={max}
            pattern={pattern}
            inputMode="numeric"
            {...register(name)}
            className={clsx(
              'peer w-full border-b-2 focus:ring-0 focus:outline-none',
              error ? 'border-error' : 'border-gray-light'
            )}
          />
          <div
            className={clsx(
              "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:transition-transform before:duration-300 before:content-[''] peer-focus:before:scale-x-100",
              error ? 'before:bg-error' : `before:bg-${color}`
            )}
          />
        </div>
      </div>
      <InputError
        error={error}
        id={`${name}-error`}
        className={clsx('pl-7 opacity-0', error && 'opacity-100')}
      />
    </Field>
  );
};

export default AuthInputNumber;
