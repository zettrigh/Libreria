Libreria

**Analisis de requerimientos:

Objetivo
Desarrollar un sistema web para gestionar libros, autores, usuarios y préstamos, con autenticación y CRUD.

Requerimientos funcionales:
Autenticación de usuarios: Los usuarios deben iniciar sesión. Solo los autenticados pueden acceder al sistema.
Registro de nuevos usuarios: Cualquier visitante puede registrarse (nombre, apellido, email, contraseña).
Gestión de Autores (CRUD):
Crear, leer, actualizar y eliminar autores.
Campos: Nombre, Apellido, Nacionalidad, Fecha de nacimiento.
Gestión de Libros (CRUD):
Crear, leer, actualizar y eliminar libros.
Campos: Título, Género, ISBN, Año publicación, Fecha agregado, Disponible (booleano), Autor (clave foránea).
Gestión de Préstamos:
Registrar préstamos (usuario + libro + fechas).
Registrar devolución real y calcular multa si aplica.
Visualizar todos los préstamos (activos y finalizados).
Seguridad básica: Contraseñas hasheadas, sanitización de entradas, protección contra inyecciones SQL (PDO).

**Base de Datos:

Nombre: libreria.
tablas independietes: autores y usuarios.
tablas dependientes: libros.
tablas relacional: Prestamos.



