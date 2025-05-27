// 🔗 Navegación
import { route } from 'ziggy-js';

// 💄 Animaciones y UI externa
import { motion } from 'motion/react';
import useMinWidth from '@/Modules/core/hooks/useMinWidth';

// 🧩 Componentes locales
import AuthWelcomeSection from '../AuthWelcomeSection';
import AuthLink from '@/Modules/auth/components/UI/AuthLink';
import FullForm from '@/Modules/auth/components/RegisterForm/FullForm';
import MultiStepForm from '@/Modules/auth/components/RegisterForm/MultistepForm/MultiStepForm';

// 🧠 Validación y lógica del formulario
import { registerSchema } from '@/Modules/auth/schemas/registerSchema';
import { FormProvider, useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { useEffect } from 'react';

const RegisterForm = ({ documentTypes }) => {
  const isDesktop = useMinWidth(1024);

  const saved = JSON.parse(sessionStorage.getItem('registerFormData'));

  const methods = useForm({
    resolver: zodResolver(registerSchema),
    mode: 'onBlur',
    defaultValues: saved || {},
  });

  const onSubmit = methods.handleSubmit((data) => {
    console.log('Datos válidos:', data);
  });

  useEffect(() => {
    if (performance.navigation.type !== performance.navigation.TYPE_RELOAD) {
      sessionStorage.removeItem('registerFormData');
    }
  }, []);

  return (
    <div
      className="z-2 mx-6 my-8 flex w-full flex-col items-center justify-center overflow-hidden rounded-xl bg-white py-8 md:mx-20 md:my-12 lg:mx-40 lg:my-8 lg:flex-row lg:p-0"
      role="main"
      aria-labelledby="register-form-title"
    >
      <AuthWelcomeSection type="register">
        <h1 className="text-2xl">¡Bienvenido!</h1>
        <p className="w-100 text-sm">
          Escribe los datos solicitados para continuar con tu registro dentro del sistema
        </p>
      </AuthWelcomeSection>
      <motion.div
        initial={{ opacity: 0, x: -50 }}
        animate={{ opacity: 1, x: 0, transition: { duration: 0.5 } }}
        className="flex w-full flex-col items-center justify-around gap-5 lg:order-1 lg:h-130 lg:flex-1 lg:gap-0 lg:px-5"
      >
        <h1 id="register-form-title" className="text-center text-3xl font-bold md:text-4xl">
          Registro
        </h1>
        <FormProvider {...methods}>
          <form onSubmit={onSubmit} className="flex h-full w-full gap-3 lg:mt-3 lg:gap-5">
            {isDesktop ? (
              <MultiStepForm documentTypes={documentTypes} />
            ) : (
              <FullForm documentTypes={documentTypes} />
            )}
          </form>
        </FormProvider>
        <div className="flex w-full flex-col items-center justify-center gap-2 px-12 md:mb-5 lg:mb-3">
          <span className="flex flex-col text-center text-sm text-gray-800">
            <span>
              <span>¿Ya tienes una cuenta? </span>
              <AuthLink
                type="link"
                route={route('auth.login.show')}
                className="font-medium after:left-0"
                text="Inicia sesión"
                ariaLabel="Ir a la página de registro"
              />
            </span>
          </span>
        </div>
      </motion.div>
    </div>
  );
};

export default RegisterForm;
