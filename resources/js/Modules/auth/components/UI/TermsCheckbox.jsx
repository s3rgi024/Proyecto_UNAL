import React, { useState } from 'react';
import { Checkbox } from '@headlessui/react';
import clsx from 'clsx';
import AuthLink from './AuthLink';
import InputError from './InputError';
import { Controller, useFormContext } from 'react-hook-form';

const TermsCheckbox = ({ name, error }) => {
  const { control, trigger } = useFormContext();
  return (
    <Controller
      name={name}
      control={control}
      defaultValue={false}
      render={({ field }) => (
        <div className="flex w-full flex-col px-12">
          <div className="flex items-start">
            <Checkbox
              id={name}
              name={name}
              checked={field.value}
              onChange={(e) => {
                field.onChange(e);
                trigger(name);
              }}
              onKeyDown={(e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                  onChange(!field.value);
                }
              }}
              className="flex items-center gap-2 text-left text-sm"
            >
              <span
                className={clsx(
                  "relative h-4 w-4 rounded-sm bg-gray-300 transition-all duration-200 after:absolute after:top-1 after:left-1.5 after:h-2 after:w-1 after:rotate-45 after:border-[0_0.15em_0.15em_0] after:border-white after:opacity-0 after:transition-all after:duration-200 after:content-['']",
                  field.value &&
                    'bg-secondary shadow-[2px_2px_2px_rgb(183,183,183)] after:opacity-100'
                )}
              />
              <span className={clsx('font-light', field.value && 'underline')}>
                Acepto los{' '}
                <AuthLink
                  type="link"
                  route=""
                  className="font-medium after:left-0"
                  text="Términos y Condiciones"
                  ariaLabel=""
                />
              </span>
            </Checkbox>
          </div>
          <InputError
            error={error}
            id={`${name}-error`}
            className={clsx('pl-5 opacity-0', error && 'opacity-100')}
          />
        </div>
      )}
    />
  );
};

export default TermsCheckbox;
