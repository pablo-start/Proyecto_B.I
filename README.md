# Proyecto_B.I
SISTEMA ABCC BASES DE INGENIERIA
## Configuración
Entraremos a la carpeta de XAMPP una vez ahí entraremos a la carpeta "apache" posteriormente entraremos a la carpeta "conf"  entraremos a la carpeta "extra" y modificaremos el archivo  httpd-vhosts
```bash
##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example2.com
    ##DocumentRoot "C:/xampp/htdocs/dummy-host2.example2.com"
    ##ServerName dummy-host2.example2.com
    ##ErrorLog "logs/dummy-host2.example2.com-error.log"
    ##CustomLog "logs/dummy-host2.example2.com-access.log" common
##</VirtualHost>

<VirtualHost *:80>
    ServerAdmin example2.com
    DocumentRoot "C:/xampp/htdocs/+nombre de la carpeta+.com/public"
    ServerName example2.com
    ErrorLog "logs/+nombre de la carpeta+.com-error.log"
    CustomLog "logs/+nombre de la carpeta+.com-access.log" common
    <Directory "C:/xampp/htdocs/example2.com/public">
   Options All
   AllowOverride All
   Require all granted
  </Directory>
</VirtualHost>
```

Entramos a la siguiente liga en nuestro equipo 
```bash
C:\Windows\System32\drivers\etc # abres el archivo 'hosts'
```
```bash
127.0.0.1 +nombre de la carpeta+.com ##agregas esta linea al archivo
```

Proseguimos prendiendo y apagando XAMPP para que el sistema note los cambios hechos

##  Configuración de la base de datos

Entraremos a  [phpMyAdmin](http://localhost/phpmyadmin) para crear nuestra base de datos adoptadad a nuestras necesidades al igual que una tabla con los aspectos que necesites.

## Configuración de constans.php y funcions.php

En esta parte debes de configurar el código de constans.php para poder realizar la conexión de la base de datos.

```bash
<?php
    define("DBNAME", "almacen");  #Coloca el nombre de tu base de datos
    define("SERVERNAME", "localhost"); #Si cuentas con xampp debes de colocar el valor establecido
    define("PORT", "3306"); #Depende de donde esten alojados los datos que hacen funcionar xampp tu puedes cambiarlo segun sea el caso
    define("USERNAME", "root"); #Coloca tu nombre de usuario 
    define("PASSWORD", ""); #Coloca la contraseña de tu sistema de base de datos
?>
```

Posteriormente pasaremos al archivo funtions.php y cambiaremos la función de redirect.

```bash
function redirect(){
       header("Location: http://+nombre de la carpeta+");

   } 
```


## Configuración de public y templates

En el aspecto de public solo cambiaremos las consultas debido a que al cambiar la base de datos las estructura de la consulta tambien cambiara.

En cuanto a templates Aquí en el archivo index y perfume debemos cambiar el codigo de php que muestra los productos en las cards. Se cambia solamente el texto dentro de los corchetes por el nombre de los campos de la nueva base de datos.

```bash
< ?=$auto['imagen'] ?> -> < ?=$auto['nombre de tu campo'] ?>
```

Posteriormente en los formularios cambiamos el atributo name por los campos que se tiene en la base de datos, al igual los placeholder y adaptarlos a los datos que estas solicitando


## Autor

Pablo Bernal Lazcano 

Estudiante del Colegio de Estudios Científicos y Tecnológicos del Estado de México
Plantel Xonacatlán



