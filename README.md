# Form Dispatcher #

El proyecto usa el patrón de diseño Orden ( Command ) de modo que más de un formulario puede llamar a más de una solicitud (orden)
como es el caso de algunos formularios de los dos sitios de ejemplo.

Para agregar un nuevo formulario no se require cambiar la clase Procesador ni demás, lo unico que debe hacerse es crear un 
nuevo elemento en el arreglo del archivo **solicitudes.php** respetando el formato de los demás elementos.

Las conexiones para la base de datos y las configuraciones para los emails están en el archivo keys.php **no incluido por razones de seguridad**

Para habilitar el modo de pruebas debe poner el valor de **BOWLERO_DEBUG** en **true** y modificar el código con base en esa
constante para evitar mostrar más datos de los necesarios en producción. 

Para alguna duda envie un email a angeldomp49@gmail.com
