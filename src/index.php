<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('nav.php');

$db = new MongoDB\Client("mongodb://mongodb:27017");

echo <<<GFG

<h1 id="infraestructura-de-la-aplicacion">Infraestructura de la
aplicacion</h1>
<p>He decidido desarrollar esta aplicacion con unas herramientas
modernas que la hacen facil de reproducir en otros entornos
independientes del sistema operativo.</p>
<h2 id="github">Github</h2>
<p>He decidido usar el control de versiones de git con Github, que nos
permite implementar workflows avanzados para hacer desarrollo e
integracion continua.<br />
En el siguiente link <a
href="https://github.com/dlgeraghty/abd">https://github.com/dlgeraghty/abd</a>
se puede ver tanto el codigo como las diferentes versiones. Ademas,
Github cuenta con un registro de imagenes de docker que he utilizado en
la aplicacion, se puede encontrar en el siguiente link <a
href="https://github.com/users/dlgeraghty/packages/container/package/abd_web">https://github.com/users/dlgeraghty/packages/container/package/abd_web</a></p>
<h2 id="hosting">Hosting</h2>
<p>Esta aplicacion esta hosteada en mi servidor y puede ser encontrada
en la url: <a
href="https://abd.lopezgeraghty.com/">https://abd.lopezgeraghty.com/</a>,
esto es para hacerla lo mas accesible en caso de que una instalacion
manual fallase. La integracion con entre el sistema de control de
versiones y Github es total, de forma que cada vez que se suben los
cambios a la rama principal de Github, se suben tambien al servidor.</p>
<h2 id="docker">Docker</h2>
<p>He dockerizado la aplicacion, que usa una imagen que yo he compilado
modificando la de base de php. Esta no incluye por defecto soporte para
mongodb. Aunque compilararla de nuevo no es dificil, requiere cierto
tiempo que prefiero ahorrar. He hosteado esta imagen en mi github asi
como su archivo para compilarla si fuera deseable (Dockerfile). Además,
es necesaria otra imagen, la que soportará la base de datos, oficial de
MongoDB.<br />
Para que la aplicación pueda ser más fácilmente reproducible, he
configurado un soporte físico para los archivos de la base de datos (en
docker-compose.yml linea 10) de esta manera cuando se construya la
aplicación, la base de datos leerá y escribirá en esta carpeta.<br />
Finalmente, todo se une gracias al archivo docker-compose.yml, que es el
único al que debemos hacer referencia cuando vayamos a arrancar la
aplicación.</p>
<h2 id="como-arrancar-la-aplicacion">Como arrancar la aplicacion</h2>
<p>Hay dos formas de utilizar la aplicacion:<br />
1. Como he mencionado antes, yo ya tengo la aplicacion instalada y
desplegada en un servidor. Puede ser accedida y usada en la url <a
href="https://abd.lopezgeraghty.com/">https://abd.lopezgeraghty.com/</a>
y el codigo en el repositorio de Github<br />
2. Si se quiere desplegar manualmente, se han de seguir los pasos que
expongo:<br />
2.1 Se debe garantizar que hay una instalacion de docker funcionando
correctamente.<br />
2.2 Se descarga el docker-compose.yml del repositorio, nos dirigimos
directorio donde hayamos descargado el archivo y ejecutamos el comando
docker-compose up -d. </p>
<h1 id="funciones-de-la-aplicacion">Funciones de la aplicacion</h1>
<p>La aplicacion ofrece la gestion de usuarios. Estos pueden ser
creados, leidos, actualizados y eliminados. Estos usuarios pueden a su
vez crear posts en un blog, asi como ver los de los demas, actualizar
los suyos y eliminarlos. ## Usuarios ## Posts</p>

GFG;

?>
