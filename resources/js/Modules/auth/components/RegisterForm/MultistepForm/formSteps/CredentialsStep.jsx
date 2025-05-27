import React from 'react';
import AuthInput from '@/Modules/auth/components/UI/AuthInput';
import AuthInputPass from '@/Modules/auth/components/UI/AuthInputPass';
import TermsCheckbox from '@/Modules/auth/components/UI/TermsCheckbox';
import { IoMdMail } from 'react-icons/io';
import { useFormContext } from 'react-hook-form';

const ContactCredentialsStep = () => {
  const {
    register,
    formState: { errors },
    watch,
  } = useFormContext();

  return (
    <div className="flex w-full flex-col">
      <AuthInput
        label="Correo Electrónico"
        Icon={IoMdMail}
        name="email"
        type="email"
        placeholder="Ingrese su correo electrónico"
        color="secondary"
        ariaLabel="Campo para ingresar el correo electrónico"
        register={register}
        error={errors.email?.message}
      />
      <AuthInputPass
        label="Contraseña"
        name="password"
        placeholder="Ingrese su contraseña"
        color="secondary"
        error={errors.password?.message}
      />
      <AuthInputPass
        label="Confirmar contraseña"
        name="confirmPassword"
        placeholder="Confirme su contraseña"
        color="secondary"
        error={errors.confirmPassword?.message}
      />
      <TermsCheckbox 
        name="terms" 
        error={errors.terms?.message}
      />
    </div>
  );
};

export default ContactCredentialsStep;
