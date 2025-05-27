import { AnimatePresence, motion } from 'motion/react';
import IdentificationStep from '@/Modules/auth/components/RegisterForm/MultiStepForm/formSteps/IdentificationStep';
import FullNameStep from '@/Modules/auth/components/RegisterForm/MultiStepForm/formSteps/FullNameStep';
import CredentialsStep from '@/Modules/auth/components/RegisterForm/MultiStepForm/formSteps/CredentialsStep';

const StepContent = ({ stepper, documentTypes }) => (
  <AnimatePresence mode="wait" className="w-full">
    <motion.div
      className="w-full"
      initial={{ x: -50, opacity: 0 }}
      animate={{ x: 0, opacity: 1, transition: { duration: 0.5 } }}
      exit={{ x: 50, opacity: 0, transition: { duration: 0.5 } }}
      key={stepper.current.id}
    >
      {stepper.switch({
        1: () => <IdentificationStep documentTypes={documentTypes} />,
        2: () => <FullNameStep />,
        3: () => <CredentialsStep />,
      })}
    </motion.div>
  </AnimatePresence>
);

export default StepContent;