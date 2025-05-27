import clsx from 'clsx';
import React, { useEffect, useState } from 'react';
import InputError from './InputError';
import { FaAngleDown, FaCheck } from 'react-icons/fa6';
import {
  Field,
  Label,
  Listbox,
  ListboxButton,
  ListboxOptions,
  ListboxOption,
} from '@headlessui/react';
import { twMerge } from 'tailwind-merge';
import { Controller, useFormContext } from 'react-hook-form';

const AuthSelect = ({ label, Icon, name, placeholder = '', color, options, error }) => {
  const { control, trigger } = useFormContext();

  const [isFocus, setIsFocus] = useState(false);
  const [isOpen, setIsOpen] = useState(false);

  const handleFocus = (value) => {
    setIsFocus(value);
  };

  return (
    <Field className="flex w-full flex-col px-12">
      {label && (
        <div className="flex items-start">
          <Label className="text-md text-gray-700">{label}</Label>
        </div>
      )}
      <div className="flex w-full items-center gap-1.5">
        {Icon && (
          <Label>
            <Icon
              size={25}
              className={twMerge(
                clsx(
                  'transition-colors duration-200',
                  error && 'text-error',
                  isOpen && !error && `text-${color}`
                )
              )}
            />
          </Label>
        )}
        <div className="relative w-full">
          <Controller
            name={name}
            control={control}
            defaultValue={false}
            render={({ field }) => (
              <Listbox value={field.value} onChange={field.onChange}>
                {({ open }) => {
                  useEffect(() => {
                    setIsOpen(open);
                  }, [open]);

                  return (
                    <>
                      <ListboxButton
                        onFocus={() => {
                          handleFocus(true);
                          trigger(name);
                        }}
                        onBlur={() => {
                          handleFocus(false);
                          field.onBlur();
                        }}
                        onClick={() => handleFocus(!isFocus)}
                        className="peer relative w-full border-b-2 border-gray-light text-left focus:outline-none"
                      >
                        {field.value ? (
                          <span className={clsx('font-medium', error && 'text-error')}>
                            {`${field.value.document_name} (${field.value.abbreviation})`}
                          </span>
                        ) : (
                          <span className="font-medium text-gray-light">{placeholder}</span>
                        )}
                        <FaAngleDown
                          size={20}
                          className={twMerge(
                            clsx(
                              'transition-rotate absolute top-0.5 right-0 bg-white duration-200',
                              open && `rotate-180 text-${color}`,
                              error && 'text-error'
                            )
                          )}
                        />
                      </ListboxButton>

                      <ListboxOptions
                        anchor="bottom"
                        transition
                        className="z-2 w-(--button-width) rounded-lg border-1 border-gray-300 bg-white p-1 focus:outline-none"
                      >
                        {options.map((option) => (
                          <ListboxOption key={option.id} value={option} className="group">
                            <div className="flex cursor-pointer items-center gap-1 rounded-lg border-gray-400 p-1 shadow-sm transition-colors duration-100 group-data-focus:bg-secondary group-data-focus:text-white hover:bg-secondary hover:text-white">
                              <FaCheck
                                size={20}
                                className="invisible basis-1/6 text-secondary group-data-focus:text-white group-data-selected:visible"
                              />
                              <div className="basis-5/6 rounded-md">
                                {`${option.document_name} (${option.abbreviation})`}
                              </div>
                            </div>
                          </ListboxOption>
                        ))}
                      </ListboxOptions>

                      <div
                        className={clsx(
                          "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:transition-transform before:duration-300 before:content-['']",
                          error ? 'before:bg-error' : `before:bg-${color}`,
                          open && `before:scale-x-100`
                        )}
                      />
                    </>
                  );
                }}
              </Listbox>
            )}
          />
          <div
            className={clsx(
              "absolute bottom-0 z-10 h-1 w-full before:absolute before:h-full before:w-full before:scale-x-0 before:transform before:transition-transform before:duration-300 before:content-[''] peer-focus:before:scale-x-100",
              error ? 'before:bg-error' : `before:bg-${color}`,
              isOpen && `before:scale-x-100`
            )}
          />
        </div>
      </div>
      <InputError
        error={error}
        id={`${name}-error`}
        className={clsx('pl-7 opacity-0', error && 'opacity-100')}
      />
    </Field>
  );
};

export default AuthSelect;
