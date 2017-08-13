Sistema de Conferencias
========================

Sistema realizado con Symfony Framework.

Tiene la posibilidad de ingresar temas de conferencias, ver el listado y realizar
una distribucion de conferencias segun la tematica.

Que encuentra en el sistema?
--------------

El sistema esta realizado de la siguiente forma:

  * Symfony 3.3.x;

  * FrontEnd realizado con AdminLTE con BootStrap, Jquery;

  * Se utiliza knpPaginatorBundle para paginacion;

  * Doctrine ORM/DBAL para conectarse a la base de datos;

  * Extension Twig para calcular la hora en las conferencias;

  * Se utiliza yml para trabajar con entidades.

Posibles mejoras

  * Generar un checkbox para confirmar las charlas en cada conferencia.

  * Permitir modificar charlas (tema, duracion y descripcion).

  * Permitir cambiar el estado de cada conferencia.

  * Agregar la opcion de crear y editar nuevas tematicas.



Instalacion
--------------

    * Hacer clon del proyecto git clone

    * Actualizar con composer (composer update)

    * Importar Base de datos

    * Configurar un virtualhost a la ruta web de Symfony

    * Probar la url: http://conferencias.dev/admin/

    * Ruta online: http://sd-1123917-h00009.ferozo.net/admin
