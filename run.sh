cd ./docker

# Run docker
docker-compose down --remove-orphans

# Run docker
docker-compose up -d

# Time to up services
sleep 10s

# Install dependencies
docker exec -it pizzeria_php bash -c "composer install"

# Run migrations and seeders
docker exec -it pizzeria_php bash -c "php artisan migrate --seed"

echo "Se finalizo el proceso para correr el proyecto, verificar en http://localhost:8111/pizzas"
