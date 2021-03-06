# NodeShared v1.0.1

## New Features!

  - Modulo de seguridad
  - binario manage desde la shell

### Installation

  1.- configurar el archivo config.php, public.php y supervisor.php que se
  encuentran dentro de la carpeta manage.
  
  2.- verificar soporte con nodeShared desde la ruta https://dominio.com/manage/info

  3.- subir la carpeta manage a tu hosting compartido
  en la carpeta publica de tu servidor comunmente
  tienen como nombre www/html_public.

  4.- si en las configuraciones tienes activo el modo admin
  este te permite acceder a una terminal desde el navegador
  desde la url www.tudominio.com/manage/shell



### ADMINISTRAR TUS APPS DESDE LA LINEA DE COMANDO
```
- debe estar activo el modo admin
  - se accede desde la ruta https://dominio.com/manage/shell

  - ver ayuda
  manage -i help

  - ver version de nodeShared
  manage -i version

  - listar apps configuradas en config.php
  manage -i list

  - ver estado de alguna app
  manage {app} status

  - ejecutar una app como daemon
  manage {app} start

  - detener una app corriendo como daemon
  manage {app} stop

  donde {app} se reemplaza por el nombre que se asigno
  en config.php por ejemplo manage app_django status
```

### DAEMON ESPECIALES QUE VIENEN CON NODESHARED
```
 - actualizar nodeShared
  manage update start

  - activar beat, que se encarga de ejecutar el supervisor
  cada 5 min, para asegurar que tus apps siempre esten dis
  ponibles

  manage beat start

  - ver estado del beat
  manage beat status

  - detener el beat
  manage beat stop

  el supervisor se configura en el archivo supervisor.php
  y desde ajax o curl se accede hacia el por la ruta
  https://dominio.com/manage/supervisor

  recordar que el beat se ejecuta cada 5 min lo que este
  configurado en el archivo supervisor.php, lo que servira
  para que tu app no muera aunque ningun cliente este ejecu
  tando un ajax al supervisor.
```

### MANAGE METHODS GET/POST <- DESACTIVADO POR DEFECTO
```
https://example.com/manage/deamon/exec/key
  https://example.com/manage/?daemon=app&exec=start&key=password

  ARGS:

  daemon === NAME OF THE DAEMON
  key    === API KEY
  exec   === [ start | status | stop ]

```


### LIST STATES

```
  0 === ERROR     | NO ACTION
  1 === START     | RUN THE DAEMON
  2 === RUNNING   | NO ACTION
  3 === NORUNNING | NO ACTION
  4 === STOP      | STOP THE DAEMON
```

### REQUIREMENTS VERSION PHP
```
  1.- hosting shared on linux
  2.- functions enabled: exec
  3.- apache mod_rewrite enabled
```

### REQUIREMENTS VERSION PYTHON (working)
```
  1.- hosting shared on linux
  2.- apache cgi_module  enabled
  3.- apache mod_rewrite enabled
```

