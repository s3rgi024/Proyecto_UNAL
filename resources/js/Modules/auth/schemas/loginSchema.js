import { z } from 'zod';

export const loginSchema = z.object({
  email: z.string().email({ message: 'Correo inválido' }),
  password: z.string().min(8, { message: 'La contraseña debe tener mínimo 8 caracteres' }),
});
