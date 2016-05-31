# cursojunio2016

## Documentación

- [php.net](http://www.php.net/)
- [w3schools](http://www.w3schools.com/)


## Ejemplos


### 01_holamundo.php

ejecución php por comando
aperturay cierre de php (ejecutar sin cierre y ejecutar sin apertura)


### 02_argumentos.php

llamada por consola con argumentos
variables empiezan con $

### 03_argumentos.php

acceso arrays
No se indica tipo de dato (string, int...), php intenta funcionar como sea.
Llamada con un número
llamada sin argumento => Notice => php continúa ejecutándose
Tipos de errores: Notice, Error, Deprecated... 
Cambiar código para producir Fatal Error => php se detiene


### 04_html.php

Propósito de php => páginas html


### 05_html.php

código fuera de etiquetas php




### 10_html.php

Ejecutar php en servidor web (desde navegador).
Notice y otros errores => muchas veces están ocultos
Más adelante vemos paso de variables
Más adelante vemos display_errors


### 11_variaspaginas

Por defecto se ejecuta index.php o index.html...
URL (Uniform Resource Locator)
Esquema o protocolo: http:
Autoridad o máquina: 127.0.0.1
Puerto: :80
Ruta: /11_variaspaginas/index.php
Consulta: ?nombre=carlos&apellido=herrera





### 12_variaspaginas.php

includes/requires





## Conceptos pendientes

La memoria de php se destruye tras cada ejecución. No hay persistencia de variables. Soluciones:
Base de datos
Ficheros
Sesión
Cookies

### Herramientas de desarrollo
methods: GET, POST, PUT, DELETE


### Métodos de php para depuración:
echo
print_r
var_dump
exit
console.log (para javascript en el navegador)
