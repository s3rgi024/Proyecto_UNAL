import { Button } from '@headlessui/react';
import clsx from 'clsx';
import { AnimatePresence, motion } from 'motion/react';
import { twMerge } from 'tailwind-merge';

const StepperHeader = ({ stepper, steps, validateStepBeforeGoTo }) => (
  <div className="flex flex-col items-center justify-center">
    <div className="relative flex items-center justify-center gap-18">
      {stepper.all.map((step, index) => (
        <div className="z-2 flex flex-col" key={step.id}>
          <li className="flex items-center">
            <Button
              role="tab"
              aria-current={stepper.current.id === step.id ? 'step' : undefined}
              aria-posinset={index + 1}
              aria-setsize={steps.length}
              aria-selected={stepper.current.id === step.id}
              className={twMerge(
                clsx(
                  'flex size-10 items-center justify-center rounded-full bg-secondary font-bold text-white transition-all hover:scale-105',
                  stepper.current.id === step.id &&
                    'border-4 border-secondary bg-white text-secondary'
                )
              )}
              onClick={() => validateStepBeforeGoTo(step.id)}
            >
              {index + 1}
            </Button>
          </li>
        </div>
      ))}
      <div className="absolute w-full">
        <div className="absolute z-1 h-1.5 w-full bg-gray-300" />
        <div className="relative flex w-full">
          <div
            className={clsx(
              'z-1 h-1.5 w-0 bg-secondary transition-all duration-1000',
              stepper.current.id >= 2 && 'w-1/2'
            )}
          />
          <div
            className={clsx(
              'z-1 h-1.5 w-0 bg-secondary transition-all duration-1000',
              stepper.current.id === 3 && 'w-1/2'
            )}
          />
        </div>
      </div>
    </div>
    <AnimatePresence mode="wait">
      {stepper.all.map(
        (step) =>
          stepper.current.id === step.id && (
            <motion.h2
              className="mt-3.5 w-100 text-center text-xl"
              initial={{ x: -50, opacity: 0 }}
              animate={{ x: 0, opacity: 1, transition: { duration: 0.5 } }}
              exit={{ x: 50, opacity: 0, transition: { duration: 0.5 } }}
              key={step.id}
            >
              {step.title}
            </motion.h2>
          )
      )}
    </AnimatePresence>
  </div>
);

export default StepperHeader;
