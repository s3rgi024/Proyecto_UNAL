import React from 'react';
import AppLayout from '@/Layouts/AppLayout';
import LoginForm from '@/Modules/auth/components/LoginForm';

const Login = () => {
  return (
    <AppLayout
      title="Iniciar sesión"
      favicon="images/unal/icon_fce.webp"
      background="bg-[url(images/unal/pics/fce_building.webp)]"
    >
      <div className="flex h-full w-full items-center justify-center">
        <LoginForm />
      </div>
    </AppLayout>
  );
};

export default Login;
