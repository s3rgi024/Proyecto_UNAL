import { defineStepper } from '@stepperize/react';
import StepperHeader from './components/StepperHeader';
import StepContent from './components/StepperContent';
import StepperNavigation from './components/StepperNavigation';
import { useMultiStepForm } from '@/Modules/auth/hooks/useMultiStepForm';

const MultiStepForm = ({ documentTypes }) => {
  const { useStepper, steps, utils } = defineStepper(
    { id: 1, title: 'Datos de identificación y contacto' },
    { id: 2, title: 'Nombre completo' },
    { id: 3, title: 'Credenciales' }
  );

  const savedStep = JSON.parse(sessionStorage.getItem('registerFormStep'))?.step;
  const stepper = useStepper({ initialStep: savedStep });
  const stepFields = {
    1: ['dniType', 'dni', 'phone'],
    2: ['firstName', 'secondName', 'firstSurname', 'secondSurname'],
    3: ['email', 'password', 'confirmPassword', 'terms'],
  };

  const { validateStepBeforeGoToNext, validateStepBeforeGoTo } = useMultiStepForm(
    stepper,
    stepFields
  );

  return (
    <div className="flex w-full flex-col items-center justify-between gap-0">
      <StepperHeader
        stepper={stepper}
        steps={stepFields}
        validateStepBeforeGoTo={validateStepBeforeGoTo}
      />
      <StepContent stepper={stepper} documentTypes={documentTypes} />
      <StepperNavigation
        stepper={stepper}
        validateStepBeforeGoToNext={validateStepBeforeGoToNext}
      />
    </div>
  );
};

export default MultiStepForm;
