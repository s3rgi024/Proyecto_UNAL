import React from 'react';
import { FaRegAddressCard, FaIdCard, FaSquarePhone } from 'react-icons/fa6';
import AuthSelect from '@/Modules/auth/components/UI/AuthSelect';
import AuthInputNumber from '@/Modules/auth/components/UI/AuthInputNumber';
import { useFormContext } from 'react-hook-form';

const IdentificationStep = ({ documentTypes }) => {
  const {
    control,
    register,
    formState: { errors },
    watch,
  } = useFormContext();

  return (
    <div className="flex w-full flex-col gap-2">
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
    </div>
  );
};

export default IdentificationStep;
