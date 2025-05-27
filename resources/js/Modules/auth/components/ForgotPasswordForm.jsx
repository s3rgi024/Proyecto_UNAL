import AuthInput from './UI/AuthInput';
import AuthBtn from './UI/AuthBtn';
import AuthLink from './UI/AuthLink';
import { motion } from 'motion/react';
import { route } from 'ziggy-js';
import { useForm } from 'react-hook-form';
import { forgotPasswordSchema } from '@/Modules/auth/schemas/forgotPasswordSchema';
import { zodResolver } from '@hookform/resolvers/zod';
import { Fieldset } from '@headlessui/react';
import { IoMdMail } from 'react-icons/io';

const ForgotPasswordForm = () => {
  const methods = useForm({
    resolver: zodResolver(forgotPasswordSchema),
    mode: 'onBlur',
  });

  const onSubmit = methods.handleSubmit((data) => {
    console.log('Datos válidos:', data);
  });

  return (
    <div
      className="z-2 mx-6 my-8 flex w-full flex-col items-center justify-center rounded-xl bg-white py-8 md:mx-20 md:my-12 lg:mx-60 lg:my-13 lg:flex-row lg:p-0"
      role="main"
      aria-labelledby="forgot-password-form-title"
    >
      <div className="relative flex w-3/4 items-center justify-center lg:mx-5 lg:my-5 lg:h-120 lg:w-1/2 lg:rounded-xl lg:bg-blue-400">
        <img src="images/auth/forgot_password.svg" alt="recuperar contraseña" />
        <img
          src="images/unal/icons/logosimbolo_unal_circular_blanco.webp"
          alt="Escudo de la universidad Nacional de Colombia"
          className="hidden lg:absolute lg:top-0 lg:left-0 lg:mt-3 lg:ml-1 lg:flex lg:w-20"
        />
      </div>
      <motion.div
        initial={{ opacity: 0, x: 50 }}
        animate={{ opacity: 1, x: 0, transition: { duration: 0.5 } }}
        className="flex w-full flex-col items-center justify-center gap-5 lg:mx-5 lg:flex-1/2"
      >
        <div className="mb-3 flex w-full flex-col items-center justify-center gap-2 lg:mb-8">
          <h1
            id="forgot-password-form-title"
            className="text-center text-2xl font-bold sm:text-4xl md:text-4xl lg:mt-15"
          >
            ¿Olvidaste tu contraseña?
          </h1>
          <p className="px-10 text-center text-pretty md:text-lg lg:px-20">
            Ingresa tu correo electrónico para recibir un enlace de recuperación
          </p>
        </div>
        <form className="w-full" noValidate onSubmit={onSubmit}>
          <Fieldset className="flex w-full flex-col items-center gap-8 lg:mt-3 lg:gap-5">
            <AuthInput
              label="Correo Electrónico"
              Icon={IoMdMail}
              name="email"
              type="email"
              placeholder="Ingrese su correo electrónico"
              color="secondary"
              ariaLabel="Campo para ingresar el correo electrónico"
              register={methods.register}
              error={methods.formState.errors.email?.message}
            >
              <div className="flex w-full justify-start gap-2 text-sm text-gray-600">
                <span>¿No recibiste el enlace?</span>
                <AuthLink
                  type="link"
                  route=""
                  className="font-medium after:left-0"
                  text="Reenviar correo"
                  ariaLabel="Reenviar enlace de recuperación"
                />
              </div>
            </AuthInput>
            <div className="mt-2 flex w-full justify-center px-12 lg:mt-8">
              <AuthBtn
                ariaLabel="Enviar enlace de recuperación"
                className="bg-blue-500 px-10 hover:bg-blue-600 active:bg-blue-700"
                type="submit"
              >
                Enviar
              </AuthBtn>
            </div>
          </Fieldset>
        </form>
        <div className="flex w-full flex-col items-center justify-center gap-2 px-12 md:mb-5">
          <AuthLink
            type="link"
            route={route('auth.login.show')}
            className="font-medium after:left-0"
            text="Volver al inicio de sesión"
            ariaLabel="Ir a la página de inicio de sesión"
          />
        </div>
      </motion.div>
    </div>
  );
};

export default ForgotPasswordForm;
