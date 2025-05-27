import { z } from 'zod';

const noSymbolsOrEmojisRegex = /^[\p{L}\p{N}\s'-]+$/u;

const nameSchema = (campo) =>
  z
    .string()
    .min(2, { message: `El ${campo} debe tener al menos 2 caracteres` })
    .max(30, { message: `El ${campo} no puede tener más de 30 caracteres` })
    .regex(noSymbolsOrEmojisRegex, {
      message: 'Este campo no permite símbolos ni emojis',
    });

const paswordSchema = () =>
  z
    .string()
    .min(8, { message: 'La contraseña debe tener al menos 8 caracteres' })
    .max(32, { message: 'La contraseña no puede tener más de 32 caracteres' })
    .regex(/[a-z]/, { message: 'Debe contener al menos una letra minúscula' })
    .regex(/[A-Z]/, { message: 'Debe contener al menos una letra mayúscula' })
    .regex(/[0-9]/, { message: 'Debe contener al menos un número' })
    .regex(/[^A-Za-z0-9]/, { message: 'Debe contener al menos un símbolo' });

export const registerSchema = z
  .object({
    dniType: z.object(
      {
        id: z.number(),
        abbreviation: z.string(),
        document_name: z.string(),
      },
      {
        required_error: 'Debes seleccionar un tipo de documento',
        invalid_type_error: 'Tipo de documento inválido',
      }
    ),
    dni: z
      .string()
      .min(7, { message: 'El número de documento debe tener mínimo 7 caracteres' })
      .max(15, 'El número de documento no puede tener mas de 15 caracteres')
      .regex(noSymbolsOrEmojisRegex, {
        message: 'Este campo no permite símbolos ni emojis',
      }),
    firstName: nameSchema('primer nombre'),
    secondName: nameSchema('segundo nombre'),
    firstSurname: nameSchema('primer apellido'),
    secondSurname: nameSchema('segundo apellido'),
    phone: z
      .string()
      .min(7, { message: 'El número de teléfono debe tener al menos 7 caracteres' })
      .max(15, { message: 'El número de teléfono no puede tener más de 15 caracteres' })
      .regex(/^\+?\d+$/, {
        message: 'El número solo puede contener dígitos y un "+" opcional al inicio',
      }),
    email: z.string().email({ message: 'Correo inválido' }),
    password: paswordSchema(),
    confirmPassword: z.string().min(1, { message: 'Debes confirmar la contraseña' }),
    terms: z.literal(true, {
      errorMap: () => ({ message: 'Debes aceptar los Términos y Condiciones' }),
    }),
  })
  .refine((data) => data.password === data.confirmPassword, {
    message: 'Las contraseñas no coinciden',
    path: ['confirmPassword'],
  });
