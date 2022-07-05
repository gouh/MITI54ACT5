## Instalacion
#### dependencias
* docker
* docker-compose (en especifico "docker-compose" no "docker compose")

Posterior a descargar el proyecto, es posible ejecutar desde el archivo "run.sh" dentro de la raíz del proyecto.

```sh
sudo chmod +x ./run.sh
./run.sh
```

Como se puede apreciar únicamente es necesario darle permisos al archivo indicado, de otra manera será necesario configurarlo
con alguna otra herramienta como xampp.

No es necesario ejecutar ningún comando mas ya que el script se encarga de correr instalación de composer, migrations y seeders

## CRUD Pizza

### Routes
![delete](gitimg/routes.png)

### Create
![create](gitimg/create.png)

![after_create](gitimg/after_create.png)

### Retrieve
![create](gitimg/show.png)

### Update
![update](gitimg/update.png)
![after_update](gitimg/after_update.png)

### Delete
![delete](gitimg/delete.png)
