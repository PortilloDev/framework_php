#Bibliografía base libro "PHP POO MVC - Crea un marco de trabajo y haz con ello una aplicación" @Autor:E. Cituk Caamal


Proceso de carga de archivos

Public/.htaccess 
    |->apunta al index.php, este a su vez apunta a
        |-> app/boostrap, que carga las librerias principales del proyecto
            |-> app/libraries/Core.php




#Cambio respecto a la Bibliografía base del libro: 

1 - En el .htaccess de la carpeta public, 
    * cambiar la línea " RewriteRule^(.+)$index.php?url=$1 " por  " RewriteRule ^ index.php [L] "
