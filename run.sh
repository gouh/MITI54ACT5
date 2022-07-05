cd ./docker

# Run docker
docker-compose down --remove-orphans

# Run docker
docker-compose up -d

# Time to up services
sleep 10s

echo "Espere por favor, en un momento realizaremos las instalaciones de dependencias."

# Install dependencies
docker exec -it pizzeria_php bash -c "composer install"

# Run migrations and seeders
docker exec -it pizzeria_php bash -c "php artisan migrate --seed"

docker exec -it pizzeria_php bash -c "cd /var/www/pizzeria && chmod 777 -R ."

echo "Se finalizo el proceso para correr el proyecto, verificar en http://localhost:8111/pizzas ."
