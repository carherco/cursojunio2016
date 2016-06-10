# cursojunio2016

## Documentación

- [php.net](http://www.php.net/)
- [w3schools](http://www.w3schools.com/)


## 0 - PHP en consola


### 01_holamundo.php

- ejecución php por comando
- aperturay cierre de php (ejecutar sin cierre y ejecutar sin apertura)


### 02_argumentos.php

- llamada por consola con argumentos
- variables empiezan con $

### 03_argumentos.php

- acceso arrays
- No se indica tipo de dato (string, int...), php intenta funcionar como sea.
- Llamada con un número
- llamada sin argumento => Notice => php continúa ejecutándose
- Tipos de errores: Notice, Error, Deprecated... 
- Cambiar código para producir Fatal Error => php se detiene


### 04_html.php

- Propósito de php => páginas html


### 05_html.php

- código fuera de etiquetas php

### 06_tiposapertura.php
- <?php echo $var ?>
- <? echo $var ?> (necesita habilitar short_open_tag)
- <script language="php">echo $var</script> (eliminada en PHP 7.0.0.)
- <% echo $var %> (eliminada en PHP 7.0.0.)
- <?= $var ?> (a partir de php 5.4.0)

## 1 - PHP en servidor web

### 10_html.php

- Ejecutar php en servidor web (desde navegador).
- Mostrar código fuente en navegador y comparar con el código del servidor.
- Notice y otros errores => muchas veces están ocultos
- Más adelante vemos paso de variables
- Más adelante vemos display_errors


### 11_variaspaginas

- Por defecto se ejecuta index.php o index.html...

- Rellenar nombre y apellido. Observar URL (Uniform Resource Locator):
  - Esquema o protocolo: http:
  - Autoridad o máquina: 127.0.0.1
  - Puerto: :80
  - Ruta: /11_variaspaginas/index.php
  - Consulta: ?nombre=carlos&apellido=herrera

- Paso de variables en peticiones GET

- Ir hacia adelante y hacia atrás. Observar la pérdida de los datos "nombre" y "apellido".
La memoria de php se destruye tras cada ejecución. No hay persistencia de variables.
A saludo.php se puede llegar desde index.php, desde suma.php o resta.php o incluso se puede llegar escribiendo a mano la url.
El script saludo.php se ejecuta sin "historia", no conoce el camino tomado hasta llegar a él.


#### Explicar request y response

- Paso de variables en peticiones POST.
Uso de las herramientas de desarrrollo de los navegadores.

- Soluciones a la no persistencia de variables:
  - Ir arrastrando todos los datos necesarios entre páginas (por ejemplo en campos hidden) 
  - Ficheros
  - Base de datos
  - Sesión
  - Cookies

- Siguiendo con el tema de las URL, acceder por ejemplo a 21_depuracion/plantillas/cabecera.php



### 12_variaspaginas

- include/require

Cuando se incluye un archivo, el código que contiene hereda el ámbito de las 
variables de la línea en la cual ocurre la inclusión. Cualquier variable 
disponible en esa línea del archivo que hace el llamado, estará disponible en 
el archivo llamado, desde ese punto en adelante. 

[Diferencia entre include y require](http://php.net/manual/es/function.require.php)

- Sesión


## 2 - Depuración de aplicaciones PHP

### 21_depuracion

Hay un error al hacer la resta; hay que encontrarlo y corregirlo.

#### Métodos de php para depuración (21_depuracion/comparativa.php):
- echo
- print_r()
- var_dump()
- var_export()
- exit
- console.log (para javascript en el navegador)
- instanceof

#### Depuración en producción

En producción no se debe andar poniendo echo, print_r, exit...

- phpinfo()
- [Xdebug](https://xdebug.org/docs/)
- [Z-Ray (antes Zend Debugger)] (https://www.zend.com/en/products/server/z-ray)

#### Configuración del web server (php.ini)

Se puede la ubicacón del fichero php.ini en el phpinfo()

 - display_errors (On/Off)
 - error_reporting (E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED)

[error_reporting](http://php.net/manual/es/errorfunc.configuration.php#ini.error-reporting)

Volver a ejecutar 10_html.php


#### Ficheros de log

Se puede la ubicacón del fichero de log en el phpinfo(), en la variable *APACHE_LOG_DIR*

 - access_log
 - error_log


### 22_superglobals

- [Variables superglobales](http://php.net/manual/es/language.variables.superglobals.php)

Algunas variables predefinidas en PHP son "superglobales", lo que significa que
están disponibles en todos los ámbitos a lo largo del script.

- $GLOBALS
- $_SERVER
- $_GET
- $_POST
- $_FILES
- $_COOKIE
- $_SESSION
- $_REQUEST
- $_ENV

http://www.w3schools.com/php/php_superglobals.asp

### 23_trycatch


- Comentarios
  - //
  - # 
  - /* */ ($x = 5 /* + 15 */ + 5;)

- Sensibilidad a mayúsculas/minúsculas
  - Los nombres de las variables son case-sensitive. ($color, $COLOR, y $coLOR son diferentes)
  - Todo lo demás, no: keywords (e.g. if, else, while, echo, etc.), clases, funciones...


Reglas para los nombres de las variables:
  - Siempre empiezan con $
  - Deben empezar con una letra o un guión bajo. No pueden empezar con un número.
  - Solamente pueden contener caracteres alfanuméricos y guiones bajos (A-z, 0-9, y _ )
  - Son case-sensitive ($edad y $EDAD son diferentes)

Todos los ejemplos de aquí son interesantes:
http://www.w3schools.com/php/php_variables.asp

[PHP Data Types](http://www.w3schools.com/php/php_datatypes.asp)

- Constantes: define(name, value, case-insensitive)
  - Las constantes son de ámbito global

[Operadores](http://www.w3schools.com/php/php_operators.asp)

- bucles
  - foreach

- parámetros en funciones (valor/referencia, parámetros opcionales)
  - valor/referencia
  - parámetros opcionales
  - No pueden existir dos funciones con el mismo nombre en el mismo ámbito 

- Clases
  - Alternativas para declarar constructores
  - __toString()
  - herencia (extends)
  - interfaces (interface)
  - clases abstractas

- Validación en cliente/validación en servidor
