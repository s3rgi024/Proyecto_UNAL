import React from 'react';
import AuthInput from '@/Modules/auth/components/UI/AuthInput';
import { FaRegUser, FaUser } from 'react-icons/fa6';
import { useFormContext } from 'react-hook-form';

const FullNameStep = () => {
  const {
      control,
      register,
      formState: { errors },
      watch,
    } = useFormContext();
  
  return (
    <div className="flex w-full flex-col">
      <AuthInput
        label="Primer nombre"
        Icon={FaRegUser}
        name="firstName"
        type="text"
        placeholder="Ingrese su primer nombre"
        color="secondary"
        ariaLabel="Campo para ingresar su primer nombre"
        register={register}
        error={errors.firstName?.message}
      />
      <AuthInput
        label="Segundo nombre"
        Icon={FaUser}
        name="secondName"
        type="text"
        placeholder="Ingrese su segundo nombre"
        color="secondary"
        ariaLabel="Campo para ingresar su segundo nombre"
        register={register}
        error={errors.secondName?.message}
      />
      <AuthInput
        label="Primer apellido"
        Icon={FaRegUser}
        name="firstSurname"
        type="text"
        placeholder="Ingrese su primer apellido"
        color="secondary"
        ariaLabel="Campo para ingresar su primer apellido"
        register={register}
        error={errors.firstSurname?.message}
      />
      <AuthInput
        label="Segundo apellido"
        Icon={FaUser}
        name="secondSurname"
        type="text"
        placeholder="Ingrese su segundo apellido"
        color="secondary"
        ariaLabel="Campo para ingresar su segundo apellido"
        register={register}
        error={errors.secondSurname?.message}
      />
    </div>
  );
};

export default FullNameStep;
