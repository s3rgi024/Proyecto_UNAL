import React, { useEffect } from 'react';
import { IoMdMail } from 'react-icons/io';
import { FaRegAddressCard, FaIdCard, FaRegUser, FaUser, FaSquarePhone } from 'react-icons/fa6';
import AuthInput from '@/Modules/auth/components/UI/AuthInput';
import AuthInputPass from '@/Modules/auth/components/UI/AuthInputPass';
import AuthInputNumber from '@/Modules/auth/components/UI/AuthInputNumber';
import AuthSelect from '@/Modules/auth/components/UI/AuthSelect';
import AuthBtn from '@/Modules/auth/components/UI/AuthBtn';
import TermsCheckbox from '@/Modules/auth/components/UI/TermsCheckbox';
import { useFormContext } from 'react-hook-form';


const FullForm = ({ documentTypes }) => {
  const {
    register,
    formState: { errors },
    watch,
  } = useFormContext();

  useEffect(() => {
    const subscription = watch((values) => {
      const { password, confirmPassword, ...safeData } = values;
      sessionStorage.setItem('registerFormData', JSON.stringify(safeData));
    });
    return () => subscription.unsubscribe();
  }, [watch]);


  return (
    <div className="flex w-full flex-col gap-5">
      <AuthSelect
        label="Tipo de documento"
        Icon={FaRegAddressCard}
        name="dniType"
        type="text"
        placeholder="Seleccione su tipo de documento"
        color="secondary"
        options={documentTypes}
        ariaLabel="Campo para seleccionar el tipo de documento"
        error={errors.dniType?.message}
      />
      <AuthInputNumber
        label="Número de documento"
        Icon={FaIdCard}
        name="dni"
        type="text"
        placeholder="Ej: 1234567890"
        color="secondary"
        ariaLabel="Campo para ingresar el número de documento"
        min={7}
        max={10}
        pattern="\d{7,10}"
        register={register}
        error={errors.dni?.message}
      />
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
      <AuthInputNumber
        label="Número de teléfono"
        Icon={FaSquarePhone}
        name="phone"
        type="text"
        placeholder="Ej: +57 123 4567 890"
        color="secondary"
        ariaLabel="Campo para ingresar su número de teléfono"
        min={7}
        max={15}
        pattern="^\+?[0-9]{7,15}$"
        register={register}
        error={errors.phone?.message}
      />
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
      <TermsCheckbox name="terms" register={register} error={errors.terms?.message} />
      <div className="mt-4 flex w-full justify-center px-12">
        <AuthBtn
          type="submit"
          ariaLabel="Crear cuenta"
          className="bg-secondary hover:bg-secondary-light active:bg-secondary-dark"
        >
          Registrarme
        </AuthBtn>
      </div>
    </div>
  );
};

export default FullForm;
