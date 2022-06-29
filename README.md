<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Historial de cambios por Ricardo
- Se modificó el login
- Se deshabilitó el registro de usuarios y el recordar password
- Se modificó el menú lateral para mostrar solo secciones terminadas
- Se modifico el footer de invitado
- Crud de sección de banners completamente terminado

## Historial de cambios por Pamela
- Todas secciones tienen funcionando/habilitado el botón de eliminar
- La sección About se modificaron sus vistas a: mostrar datos > editar y guardar.
- La sección About tiene funcionando/habilitado la actualización de datos.
- En la sección de Servicios > Tesorería, Inversión y Asesoria se modificaron sus vistas a: mostrar datos > editar y guardar.
- La sección Servicios tiene funcionando la actualización de datos.
- La sección Contacto se modificaron sus vistas a: mostrar datos > editar y guardar.
- La sección Contacto tiene funcionando la actualización de datos.
- Sección asesoria funcionando la actualización de datos e iconos.
- Sección de Clientes tiene funcionando la actualización de textos e imagenes

## Pendientes
-

## Actualizar
Para mantener el proyecto en la última versión:

```
git pull origin main
```
Crear el enlace simbólico para ver la carpeta Storage directamente en Public
```
php artisan storage:link
```
Actualizar migraciones y poblar la base de datos
```
php artisan migrate:refresh --seed
```
