import React from 'react';
import AppLayout from '@/Layouts/AppLayout';
import RegisterForm from '../components/RegisterForm/RegisterForm';
import { usePage } from '@inertiajs/react';

const Register = () => {
  const documentTypes = usePage().props.documentTypes;

  return (
    <AppLayout
      title="Iniciar sesión"
      favicon="images/unal/icon_fce.webp"
      background="bg-[url(images/unal/pics/fce_building.webp)]"
    >
      <div className="flex h-full w-full items-center justify-center">
        <RegisterForm documentTypes={documentTypes} />
      </div>
    </AppLayout>
  );
};

export default Register;
