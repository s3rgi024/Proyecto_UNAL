// 🔗 Navegación
import { route } from 'ziggy-js';

// 💄 Animaciones y UI externa
import { motion } from 'motion/react';
import { IoMdMail } from 'react-icons/io';
import { Fieldset } from '@headlessui/react';

// 🧠 Validación y lógica del formulario
import { FormProvider, useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { loginSchema } from '../schemas/loginSchema';

// 🧩 Componentes locales
import AuthInput from './UI/AuthInput';
import AuthInputPass from './UI/AuthInputPass';
import AuthBtn from './UI/AuthBtn';
import AuthLink from './UI/AuthLink';
import AuthWelcomeSection from './AuthWelcomeSection';

const LoginForm = () => {
  const methods = useForm({
    resolver: zodResolver(loginSchema),
    mode: 'onBlur',
  });

  const onSubmit = methods.handleSubmit((data) => {
    console.log('Datos válidos:', data);
  });
  
  return (
    <div
      className="z-2 mx-6 my-8 flex w-full flex-col items-center justify-center overflow-hidden rounded-xl bg-white py-8 md:mx-20 md:my-12 lg:mx-40 lg:my-8 lg:flex-row lg:p-0"
      role="main"
      aria-labelledby="login-form-title"
    >
      <AuthWelcomeSection>
        <h1 className="text-2xl">¡Bienvenido de vuelta!</h1>
        <p className="text-sm">
          Escribe tuc credenciales a continuación para ingresar al sistema de gestión documental de
          docentes ocasionales de la <span className="font-bold">FCE</span>
        </p>
      </AuthWelcomeSection>
      <motion.div
        initial={{ opacity: 0, x: 50 }}
        animate={{ opacity: 1, x: 0, transition: { duration: 0.5 } }}
        className="flex w-full flex-col items-center justify-center gap-5 lg:flex-1 lg:gap-8 lg:px-5"
      >
        <h1 id="login-form-title" className="text-center text-3xl font-bold md:text-4xl lg:mt-15">
          Iniciar sesión
        </h1>
        <FormProvider {...methods}>
          <form className="w-full" noValidate onSubmit={onSubmit}>
            <Fieldset className="flex w-full flex-col items-center gap-3 lg:mt-3 lg:gap-5">
              <AuthInput
                label="Correo Electrónico"
                Icon={IoMdMail}
                name="email"
                type="email"
                placeholder="Ingrese su correo electrónico"
                color="primary"
                ariaLabel="Campo para ingresar el correo electrónico"
                register={methods.register}
                error={methods.formState.errors.email?.message}
              />
              <AuthInputPass
                label="Contraseña"
                name="password"
                placeholder="Ingrese su contraseña"
                color="primary"
                forgotPass={true}
                error={methods.formState.errors.password?.message}
              />
              <div className="mt-2 flex w-full justify-center px-12">
                <AuthBtn
                  ariaLabel="Iniciar sesión en tu cuenta"
                  className="bg-primary-dark px-10 hover:bg-primary-light active:bg-primary"
                  type="submit"
                >
                  Ingresar
                </AuthBtn>
              </div>
            </Fieldset>
          </form>
        </FormProvider>
        <div className="flex w-full flex-col items-center justify-center gap-2 px-12 md:mb-5">
          <span className="flex flex-col text-center text-sm text-gray-800">
            <span>¿Eres docente y no tienes una cuenta?</span>
            <div className="flex w-full justify-center">
              <AuthLink
                type="link"
                route={route('auth.register.show')}
                className="font-medium after:left-0"
                text="Regístrate"
                ariaLabel="Ir a la página de registro"
              />
            </div>
          </span>
        </div>
      </motion.div>
    </div>
  );
};

export default LoginForm;
