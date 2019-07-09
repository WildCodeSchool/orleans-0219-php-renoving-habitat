clone the repo then : 
"composer install"
"npm install"

"php bin/console doctrine:migration:migrate" to update the database.

copy/paste the .env file and rename it .env.local then modify these 2 lines :
-DATABASE_URL
-MAILER_URL
following the examples in the file.

MAILER_URL isn't mandatory for the website to work, but the database must be set.

"npm run build" to build the website, "php bin/console server:run" to serve it.