# pruebaCrud
CRUD

Importante!! -> Para ingresar al index nos dirigimos a la ruta modulos/view/configuracion/Ocupacion/index.php

- Allí hay una tabla con los elementos guardados en la base de datos - en este caso sería ocupaciones

- En la tabla encontraremos una serie de botones: Agregar, editar y eliminar

///////////// Insertar\\\\\\\\\\\\\\\\\

- Al dar click en el botón agregar (Imagen con un simbolo '+') nos llevará a un formulario para ingresar una nueva ocupación

- Al dar click en el boton GUARDAR; los datos del formulario serán enviados al archivo funciones.ajax.js, allí se validan los campos, luego hace una peticion Ajax y 
  se envian los datos al archivo Ocupaciones.controller.php incluyendo una varible donde almacene la accion a realizar (INSERTAR, Editar, Eliminar), 
  allí se reciben y se crea una variable por campo del formulario, luego se valida la accion (en este caso será INSERTAR) se crea una funcion para enviar los datos
  a la clase y allí se ejecutan los Querys de insertar y por ultimo se envia una alerta de SUCCESS desde Ajax al HTML y una funcion de redireccionar al index.php,
  o DANGER en caso de algun error.

///////////// Editar \\\\\\\\\\\\\\\\\

- Al dar click en el botón editar (Icono edit y boton color amarillo) nos llevará a un formulario para editar una ocupación

- Al dar click en el boton EDITAR; se mostrará un Sweet Alert para confirmar los cambios y los datos del formulario serán enviados al archivo funciones.ajax.js,
  allí se validan los campos, luego hace una peticion Ajax y 
  se envian los datos al archivo Ocupaciones.controller.php incluyendo una varible donde almacene la accion a realizar (Insertar, EDITAR, Eliminar), 
  allí se reciben y se crea una variable por campo del formulario, luego se valida la accion (en este caso será EDITAR) se crea una funcion para enviar los datos
  a la clase y allí se ejecutan los Querys de EDITAR y por ultimo se envia una alerta de SUCCESS desde Ajax al HTML y una funcion de redireccionar al index.php,
  o DANGER en caso de algun error.

///////////// Eliminar \\\\\\\\\\\\\\\\\

- Al dar click en el botón editar (Icono delete y boton color rojo) Esto pasa en el mismo Index.php <-----------------------------------

- Al dar click en el boton ELIMINAR; se mostrará un Sweet Alert para confirmar la petición y los datos del formulario serán enviados al archivo funciones.ajax.js,
  allí se validan los campos, luego hace una peticion Ajax y 
  se envian los datos al archivo Ocupaciones.controller.php incluyendo una varible donde almacene la accion a realizar (Insertar, Editar, ELIMINAR), 
  allí se reciben y se crea una variable por campo del formulario, luego se valida la accion (en este caso será ELIMINAR) se crea una funcion para enviar los datos
  a la clase y allí se ejecutan los Querys de EDITAR y por ultimo se envia una alerta de SUCCESS desde Ajax al HTML y una funcion de remover el campo de la tabla en el index.php,
  sin necesidad de recargar para visualizar los cambios; en caso de haber un error se envia una alerta de Error DANGER.
  
  
  
