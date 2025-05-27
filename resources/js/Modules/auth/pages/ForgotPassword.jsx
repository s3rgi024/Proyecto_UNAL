import AppLayout from '@/Layouts/AppLayout'
import React from 'react'
import ForgotPasswordForm from '@/Modules/auth/components/ForgotPasswordForm'

const ForgotPassword = () => {
  return (
    <AppLayout
      title="Iniciar sesión"
      favicon="images/unal/icon_fce.webp"
      background='bg-[url(images/unal/pics/fce_building.webp)]'
    >
      <div className="flex h-full w-full items-center justify-center">
        <ForgotPasswordForm />
      </div>
    </AppLayout>
  )
}

export default ForgotPassword