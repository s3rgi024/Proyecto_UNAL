import React, { useState } from 'react';
import { IoMdEye, IoMdEyeOff } from 'react-icons/io';
import { FaLock } from 'react-icons/fa6';
import clsx from 'clsx';
import { Switch } from '@headlessui/react';
import InputError from './InputError';
import AuthLink from './AuthLink';

const AuthInputPass = ({ color, forgotPass = false, errors }) => {
  const [isChecked, setIsChecked] = useState(false);

  return (
    <div className="flex w-full flex-col gap-2 px-15">
      <div className='flex items-start'>
        <label htmlFor="password" className="text-md text-gray-700">
          Contraseña
        </label>
      </div>
      <div className="relative flex w-full items-center gap-1.5">
        <label htmlFor="password">
          <FaLock size={25} className={errors ? 'text-error' : 'text-gray-700'} />
        </label>
        <div className="relative w-full">
          <input
            type={isChecked ? 'text' : 'password'}
            id="password"
            name="password"
            required
            placeholder="Ingrese su contraseña"
            aria-describedby={errors ? 'password-error' : undefined}
            className={clsx(
              'peer w-full border-b-2 focus:ring-0 focus:outline-none',
              errors ? 'border-error' : 'border-gray-light'
            )}
          />
          <div
            className={clsx(
              "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:bg-primary before:transition-transform before:duration-300 before:content-[''] peer-focus:before:scale-x-100",
              color && `before:${color}`
            )}
          />
          <Switch
            checked={isChecked}
            onChange={setIsChecked}
            tabIndex="0"
            onKeyDown={(e) => {
              if (e.key === 'Enter' || e.key === ' ') {
                setIsChecked(!isChecked);
              }
            }}
            className="absolute top-1 right-0 cursor-pointer transition-transform hover:scale-109"
            aria-label={isChecked ? 'Ocultar contraseña' : 'Mostrar contraseña'}
          >
            {isChecked ? (
              <IoMdEyeOff size={20} className={clsx(errors && 'text-error')} />
            ) : (
              <IoMdEye size={20} className={clsx(errors && 'text-error')} />
            )}
          </Switch>
        </div>
      </div>
      {errors && <InputError error={errors} className="pl-7" id="password-error" />}
      {forgotPass && (
        <div className="flex justify-end">
          <AuthLink
            type="link"
            route=""
            text="¿Olvidaste tu contraseña?"
            aria-label="Recuperar contraseña"
          />
        </div>
      )}
    </div>
  );
};

export default AuthInputPass;
