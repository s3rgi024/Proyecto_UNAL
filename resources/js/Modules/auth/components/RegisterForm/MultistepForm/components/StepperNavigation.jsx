import AuthBtn from '@/Modules/auth/components/UI/AuthBtn';
import { IoMdArrowRoundBack, IoMdArrowRoundForward  } from "react-icons/io";

const StepperNavigation = ({ stepper, validateStepBeforeGoToNext }) => (
  <div className="mb-3.5 flex gap-4">
    {stepper.current.id >= 2 && (
      <AuthBtn
        text="Volver"
        ariaLabel="Regresar al paso anterior"
        className="w-30 bg-error px-0 py-1.5 hover:bg-error-light active:bg-error flex items-center justify-center"
        onClick={() => stepper.prev()}
      >
        <IoMdArrowRoundBack /> Volver
      </AuthBtn>
    )}
    {stepper.current.id === stepper.all.length ? (
      <>
        <AuthBtn
          type="submit"
          ariaLabel="Registrarse"
          className="w-30 px-0 py-1.5"
        >
          Registrarme
        </AuthBtn>
      </>
    ) : (
      <AuthBtn
        type="button"
        ariaLabel="Ir al siguiente paso"
        className="w-30 px-0 py-1.5 flex items-center justify-center"
        onClick={validateStepBeforeGoToNext}
      >
        Siguiente <IoMdArrowRoundForward />
      </AuthBtn>
    )}
  </div>
);

export default StepperNavigation;
