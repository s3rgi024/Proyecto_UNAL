import useMinWidth from '@/Modules/core/hooks/useMinWidth';
import { motion } from 'motion/react';
import clsx from 'clsx';

const AuthWelcomeSection = ({ children, type }) => {
  const isDesktop = useMinWidth(1024);
  return (
    <div
      className={clsx(
        'flex items-center justify-center rounded-xl lg:mx-5 lg:my-5 lg:h-130 lg:flex-1 lg:bg-[url(images/unal/pics/fce_building2.webp)] lg:bg-cover lg:bg-center lg:bg-no-repeat',
        type === 'register' && 'lg:order-2'
      )}
    >
      {isDesktop ? (
        <div className={clsx('relative z-2 flex h-full w-full overflow-hidden')}>
          <motion.div
            initial={{ y: 100 }}
            animate={{
              y: 0,
              transition: { duration: 1, type: 'spring', stiffness: 100, damping: 25 },
            }}
            className="relative flex w-full justify-center self-end rounded-br-xl rounded-bl-xl bg-gray text-center text-white"
          >
            <div className="my-8 flex flex-col gap-1">{children}</div>
            <img
              src="images/unal/icons/logosimbolo_unal_circular_blanco.webp"
              alt="Escudo de la universidad Nacional de Colombia"
              className="absolute right-0 bottom-0 m-2 w-17"
            />
          </motion.div>
        </div>
      ) : (
        <div className="w-50 md:w-80 lg:hidden">
          <img
            src={
              type === 'register'
                ? 'images/auth/mobile_register.svg'
                : 'images/auth/mobile_login.svg'
            }
            alt={`Ilustración de ${type === 'register' ? 'registro' : 'inicio de sesión'}`}
          />
        </div>
      )}
    </div>
  );
};

export default AuthWelcomeSection;
