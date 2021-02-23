# challenge48h
1- Run Composer

Run: composer install 

2- Base de donnée

php bin/console doctrine:database:create
php bin/console make:migration 
php bin/console doctrine:migrations:migrate 
php bin/console doctrine:fixtures:load
