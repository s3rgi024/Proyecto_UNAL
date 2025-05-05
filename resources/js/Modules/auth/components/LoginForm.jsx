import React, { useState } from 'react';
import { IoMdMail } from 'react-icons/io';
import AuthInput from './UI/AuthInput';
import AuthInputPass from './UI/AuthInputPass';
import AuthLink from './UI/AuthLink';
import AuthBtn from './UI/AuthBtn';
import useMinWidth from '@/Modules/core/hooks/useMinWidth';
import { route } from 'ziggy-js';

const LoginForm = () => {
  const [emailError, setEmailError] = useState('');
  const [passwordError, setPasswordError] = useState('');

  const isDesktop = useMinWidth(1024);

  const handleSubmit = (e) => {
    e.preventDefault();

    let hasError = false;
    if (!e.target.email.value) {
      setEmailError('El correo electrónico es obligatorio');
      hasError = true;
    } else {
      setEmailError('');
    }

    if (!e.target.password.value) {
      setPasswordError('La contraseña es obligatoria');
      hasError = true;
    } else {
      setPasswordError('');
    }

    if (!hasError) {
      console.log('Formulario enviado');
    }
  };

  return (
    <div
      className="z-2 mx-6 my-8 flex w-full flex-col items-center justify-center rounded-xl bg-white py-8 md:mx-20 md:my-12 lg:mx-40 lg:my-10 lg:flex-row lg:p-0"
      role="main"
      aria-labelledby="login-form-title"
    >
      <div className="flex items-center justify-center rounded-xl rounded-tr-none rounded-br-none lg:mx-5 lg:my-5 lg:h-125 lg:flex-1 lg:bg-[url(images/unal/pics/fce_building2.webp)] lg:bg-cover lg:bg-center lg:bg-no-repeat">
        {isDesktop ? (
          <div className="relative flex w-full justify-center self-end rounded-bl-xl bg-gray-light text-center text-white">
            <div className="my-8 flex flex-col gap-1">
              <h1 className="text-2xl">¡Bienvenido de vuelta!</h1>
              <p className="text-sm">
                Escribe tuc credenciales a continuación para ingresar al sistema de gestión
                documental de docentes ocasionales de la <span className="font-bold">FCE</span>
              </p>
            </div>
              <img
                src="images/unal/icons/logosimbolo_unal_circular_blanco.webp"
                alt="Escudo de la universidad Nacional de Colombia"
                className="absolute w-17 m-2 right-0 bottom-0"
              />
          </div>
        ) : (
          <img
            className="w-50 md:w-80 lg:hidden"
            src="images/auth/mobile_login.svg"
            alt="Ilustración de inicio de sesión"
          />
        )}
      </div>
      <div className="flex w-full flex-col items-center justify-center gap-5 lg:mx-5 lg:my-5 lg:flex-1 lg:gap-8">
        <h1 id="login-form-title" className="mt-10 text-center text-3xl font-bold md:text-4xl">
          Iniciar sesión
        </h1>
        <form
          className="flex w-full flex-col items-center gap-3 lg:mt-3 lg:gap-5"
          onSubmit={handleSubmit}
          noValidate
        >
          <AuthInput
            label="Correo Electrónico"
            Icon={IoMdMail}
            name="email"
            type="email"
            required={true}
            placeholder="Ingrese su correo electrónico"
            color="bg-primary"
            errors={emailError}
            ariaLabel="Campo para ingresar el correo electrónico"
          />
          <AuthInputPass color="bg-primary" forgotPass={true} errors={passwordError} />
          <div className="mt-4 flex w-full justify-center px-15">
            <AuthBtn
              text="Ingresar"
              ariaLabel="Iniciar sesión en tu cuenta"
              className="bg-primary-dark hover:bg-primary-light active:bg-primary"
            />
          </div>
        </form>
        <div className="flex w-full flex-col items-center justify-center gap-2 px-15 md:mb-5">
          <span className="flex flex-col text-center text-sm text-gray-800">
            <span>¿Eres docente y no tienes una cuenta?</span>
            <div className="flex w-full justify-center">
              <AuthLink
                type="link"
                route={route('user.register')}
                className="after:left-0"
                text="Regístrate"
                ariaLabel="Ir a la página de registro"
              />
            </div>
          </span>
        </div>
      </div>
    </div>
  );
};

export default LoginForm;
