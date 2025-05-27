import { useFormContext } from 'react-hook-form';
import { useEffect } from 'react';

const EXPIRATION_MINUTES = 30; // Tiempo de expiración en minutos para eliminar el sessionStorage

/*
  Este hook se encarga de validar los pasos de un formulario hecho con
  stepperize y guardar su estado en el sessionStorage junto con el paso actual
*/

export function useMultiStepForm(stepper, stepFields) {
  const { trigger, watch } = useFormContext();

  // Verifica si expiró el sessionStorage al cargar el componente y elimina los datos si es necesario
  useEffect(() => {
    const savedTs = sessionStorage.getItem('registerFormData_ts');

    if (savedTs) {
      const now = Date.now();
      const diff = (now - parseInt(savedTs, 10)) / 1000 / 60;

      if (diff > EXPIRATION_MINUTES) {
        sessionStorage.removeItem('registerFormData');
        sessionStorage.removeItem('registerFormStep');
        sessionStorage.removeItem('registerFormData_ts');
      }
    }
  }, []);

  // Guarda los datos del formulario en el sessionStorage
  useEffect(() => {
    const subscription = watch((values) => {
      const { password, confirmPassword, terms, ...safeData } = values;
      const now = Date.now();
      sessionStorage.setItem('registerFormData', JSON.stringify(safeData));
      sessionStorage.setItem('registerFormData_ts', now.toString());
    });
    return () => subscription.unsubscribe();
  }, [watch]);

  // Guarda el paso actual del formulario en el sessionStorage
  const saveStep = (stepId) => {
    sessionStorage.setItem('registerFormStep', JSON.stringify({ step: stepId }));
  };

  // Valida campos antes de avanzar al siguiente paso
  const validateStepBeforeGoToNext = async () => {
    const fields = stepFields[stepper.current.id];
    const valid = await trigger(fields);
    if (valid) {
      stepper.next();
      saveStep(stepper.current.id + 1);
    }
  };

  // Valida campos antes de ir a un paso específico
  const validateStepBeforeGoTo = (step) => {
    const fields = stepFields[stepper.current.id];
    return stepper.beforeGoTo(step, async () => {
      const valid = await trigger(fields);
      saveStep(step);
      return valid;
    });
  };

  // Devuelve las funciones para validar y guardar el estado del formulario
  return {
    validateStepBeforeGoToNext,
    validateStepBeforeGoTo,
    saveStep,
  };
}
