clone the repo then : 
"composer install"
"npm install"

Modify these 2 lines in the .env file
-DATABASE_URL
-MAILER_URL
following the exemples in the file.

MAILER_URL isn't mandatory for the website to work, but the database must be set.

then : "php bin/console doctrine:migration:migrate" to update the database.

"npm run dev" to build the website, "php bin/console server:run" to serve it.