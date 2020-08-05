 # :star: PHP-MVC-FRAMEWORK

Este es un Framework para la creacion aplicaciones y  servicios WEB, diseñado con la arquitectura [MVC (modelo, vista, controlador)](https://si.ua.es/es/documentacion/asp-net-mvc-3/1-dia/modelo-vista-controlador-mvc.html) y el [lenguaje de programación PHP](https://www.php.net/manual/es/intro-whatis.php) de una manera sencilla, simple y escalable. 

### :question: ¿Porque Utilizarlo?
 - Permite el desarrollo ágil, modular, mantenible y escalable.
 - Facilita las la interaccion con la base de datos haciendolo mas amigable y menos tediosa.
 - Tiene una gran escalabilidad para proyectos de grandes magnitudes.
 - Facilita el trabajo en equipo.

### :bookmark_tabs: ¿Qué ofrece?

 - Sistema de rutas. (/controlador/modelo/parametro/...)
 - Multiples conexiones a Bases de Datos con PDO. 
 - Metodos para el uso de modelos en el  controlador.
 - Metodos para el trabajo con Vistas.
 - Metodos de consultas a la base de datos. (QueryBuilder)
 
Este Framework tiene una gran escalabilidad y flexibilidad para cualquier proyecto.

> El limite esta en tu imaginación. :bulb:

### :wrench: Arquitectura

![Example MVC](https://www.c-sharpcorner.com/article/mvc-beginners-tutorial-with-bootstrap/Images/image001.png)  


###  🧪 Instalacion

Para que funcione correctamente, necesita instalar los servicios de Apache y Mysql o instalar un servidor local, por ejemplo.

 - [xampp](https://www.apachefriends.org/es/index.html)
 - [wampserver](https://www.wampserver.com/en/)
 
Una vez lo tenga instalado debe clonar este repositorio en la carpeta del servidor correspondiente:

```console
> git clone https://github.com/KevinDev115/php-mvc-framework.git
```

#### ⚙ Configuracion base de datos

Debe ir al archivo "app/config/DataBase.php" y segun la base de datos que este manejando, ya sea Mysql o Oracle debe rellenar las variables globales
que se utilizaran para las conexiones a bases de datos.

### 🧪 Test  

Para probar que todo esta bien debe ir a la URL `http://localhost/` o `http://127.0.0.1/` y elegir este proyecto.

#### ⚠️ Warning 
**_Este es un proyecto antiguo que contiene algunas buenas prácticas de desarrollo, pero puede mejorarse considerablemente._**

Copyright © 2020 Kevin Galindo 👦
