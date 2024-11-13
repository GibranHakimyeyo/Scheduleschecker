Unzip the sampleapp.zip file.
Change directory to sampleapp.
Docker Setup:

Start Docker: docker compose up -d
Open a Docker shell: docker exec -it sample bash
Laravel Setup:

Create a new project: composer create-project --prefer-dist raugadh/fila-starter .
Configure the .env file.
Laravel Artisan Commands:

Generate an application key: php artisan key:generate
Link storage: php artisan storage:link
Run migrations: php artisan migrate
Set ownership for storage and bootstrap directories:
chown -R www-data:www-data storage/*
chown -R www-data:www-data bootstrap/*
Initialize the project: php artisan project:init
Create a Model:

Create the Classroom model with migration and seeder files:
php artisan make:model Classroom -ms
Customize Migration, Seeder, and Model Files:

Adjust the migration, seeder, and model files as per your requirements.
Filament Resource:

Create a Filament resource for the Classroom model:
php artisan make:filament-resource Classroom --generate
Run migrations again: php artisan migrate
Reinitialize the project: php artisan project:init
