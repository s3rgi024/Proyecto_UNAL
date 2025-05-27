import { twMerge } from 'tailwind-merge';
import { PiWarningCircleFill } from 'react-icons/pi';

const InputError = ({ error, className, id }) => {
  return (
    <div
      id={id}
      role="alert"
      className={twMerge('flex items-center gap-1 text-[.8rem] font-bold text-error', className)}
    >
      <PiWarningCircleFill size={17} />
      <span>{error}</span>
    </div>
  );
};

export default InputError;
