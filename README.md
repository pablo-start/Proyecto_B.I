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
    DocumentRoot "C:/xampp/htdocs/example2.com/public"
    ServerName example2.com
    ErrorLog "logs/example2.com-error.log"
    CustomLog "logs/example2.com-access.log" common
    <Directory "C:/xampp/htdocs/example2.com/public">
   Options All
   AllowOverride All
   Require all granted
  </Directory>
</VirtualHost>
```
