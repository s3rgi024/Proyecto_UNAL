import React, { useState } from 'react';
import { IoMdEye, IoMdEyeOff } from 'react-icons/io';
import { FaLock } from 'react-icons/fa6';
import clsx from 'clsx';
import { twMerge } from 'tailwind-merge';
import { Checkbox, Field, Input, Label } from '@headlessui/react';
import InputError from './InputError';
import AuthLink from './AuthLink';
import { useFormContext, Controller } from 'react-hook-form';
import { route } from 'ziggy-js';

const AuthInputPass = ({ label, name, placeholder, color, forgotPass = false, error }) => {
  const { control, trigger } = useFormContext();

  const [isChecked, setIsChecked] = useState(false);
  const [isFocus, setIsFocus] = useState(false);

  const bgColors = {
    primary: 'before:bg-primary',
    secondary: 'before:bg-secondary',
  };

  return (
    <Field className="flex w-full flex-col px-12">
      <div className="flex items-start">
        <Label htmlFor={name} className="text-md text-gray-700">
          {label}
        </Label>
      </div>
      <div className="relative mb-1 flex w-full items-center gap-1.5">
        <Label htmlFor={name}>
          <FaLock
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

        <div className="relative w-full">
          <Controller
            name={name}
            control={control}
            defaultValue=""
            render={({ field }) => (
              <Input
                {...field}
                type={isChecked ? 'text' : 'password'}
                id={name}
                name={name}
                placeholder={placeholder}
                onFocus={() => setIsFocus(true)}
                onBlurCapture={() => setIsFocus(false)}
                onChange={(e) => {
                  field.onChange(e);
                  trigger(name);
                }}
                aria-label="Campo para ingresar la contraseña"
                aria-describedby={error ? `${name}-error` : undefined}
                aria-invalid={!!error}
                className={clsx(
                  'peer w-full border-b-2 focus:ring-0 focus:outline-none',
                  error ? 'border-error' : 'border-gray-light'
                )}
              />
            )}
          />
          <div
            className={clsx(
              "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:transition-transform before:duration-300 before:content-[''] peer-focus:before:scale-x-100",
              error ? 'before:bg-error' : bgColors[color]
            )}
          />
          <Checkbox
            checked={isChecked}
            onChange={setIsChecked}
            tabIndex="0"
            onKeyDown={(e) => {
              if (e.key === 'Enter' || e.key === ' ') {
                setIsChecked(!isChecked);
              }
            }}
            className={clsx(
              'absolute top-1 right-0 cursor-pointer transition-all hover:scale-109',
              `hover:text-${color}`
            )}
            aria-label={isChecked ? 'Ocultar contraseña' : 'Mostrar contraseña'}
          >
            {isChecked ? (
              <IoMdEyeOff size={20} className={clsx(error && 'text-error')} />
            ) : (
              <IoMdEye size={20} className={clsx(error && 'text-error')} />
            )}
          </Checkbox>
        </div>
      </div>
      <InputError
        error={error}
        id={`${name}-error`}
        className={clsx('pl-7 opacity-0', error && 'opacity-100')}
      />
      {forgotPass && (
        <div className="flex justify-end">
          <AuthLink
            type="link"
            route={route('auth.forgotPassword.show')}
            text="¿Olvidaste tu contraseña?"
            aria-label="Recuperar contraseña"
          />
        </div>
      )}
    </Field>
  );
};

export default AuthInputPass;
