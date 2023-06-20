php artisan make:model Frilenser
php artisan make:model Klijent
php artisan make:model Dizajner
php artisan make:model Posao

php artisan make:migration create_frilensers_table
php artisan make:migration create_klijents_table
php artisan make:migration create_dizajners_table
php artisan make:migration create_posaos_table

php artisan make:seeder FrilensersSeeder
php artisan make:seeder KlijentsSeeder
php artisan make:seeder DizajnersSeeder

// Prvi put pokrecemo samo migrate jer ce on i da napravi bazu
php artisan migrate 

// Svaki sledeci put pokrecemo refresh i seed da automatizujemo sve
php artisan migrate:refresh --seed