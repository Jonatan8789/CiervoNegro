# TODO: Implementar sistema completo de autenticación y gestión de productos

## Paso 1: Crear tabla de productos en la base de datos
- ✅ Ejecutar script SQL para crear tabla `productos` con campos: id, nombre, descripcion, precio, categoria, imagen, colores (JSON), fecha_creacion, fecha_actualizacion.

## Paso 2: Modificar obtener_productos.php para obtener productos desde DB
- ✅ Actualizar el script para consultar la tabla `productos` en lugar de usar datos hardcodeados.
- ✅ Asegurar que devuelva JSON con la estructura existente.

## Paso 3: Crear página de administración para gestionar productos
- ✅ Crear `pages/admin_productos.php` con interfaz para agregar, editar y eliminar productos.
- ✅ Incluir formulario para agregar/editar productos con campos para nombre, descripcion, precio, categoria, imagen, colores.
- ✅ Lista de productos con opciones de editar/eliminar.

## Paso 4: Actualizar productos.php para obtener productos desde la API
- ✅ Modificar el JavaScript en productos.php para hacer fetch a obtener_productos.php en lugar de usar array hardcodeado.
- ✅ Asegurar que el filtro y display funcionen correctamente.

## Paso 5: Implementar sistema completo de autenticación
- ✅ Crear tabla de usuarios con roles (admin/user)
- ✅ Implementar registro de usuarios (procesar_registro.php)
- ✅ Implementar login con verificación de roles
- ✅ Implementar recuperación de contraseña
- ✅ Crear página de perfil de usuario
- ✅ Implementar navegación basada en roles (diferentes menús para admin/user)

## Paso 6: Probar la funcionalidad completa
- Verificar que los productos se carguen desde DB.
- Probar agregar/editar/eliminar productos en la página de admin.
- Asegurar que la página de productos funcione correctamente.
- Probar registro, login y recuperación de contraseña.
- Verificar navegación basada en roles.
