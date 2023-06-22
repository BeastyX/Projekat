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

php artisan make:controller HomepageController
php artisan make:controller DizajnerController
php artisan make:controller FrilenserController
php artisan make:controller KlijentController
php artisan make:controller PosaoController

php artisan serve

php artisan make:controller UserController

// Sortirajuce tabele
composer require kyslik/column-sortable

// Posle toga dodaj: 
//      'providers' => [
//	        Kyslik\ColumnSortable\ColumnSortableServiceProvider::class,
//      ]
// u config/app.php

// i na kraju: 
php artisan vendor:publish --provider="Kyslik\ColumnSortable\ColumnSortableServiceProvider" --tag="config"


// Da bi radila paginacija u bootstrapu potrebno je dodati
// Paginator::useBootstrap();
// u App/Providers/AppServicesProvider.php

// Da bi radio ->middleware('guest') i ->middleware('auth') potrebno je izmeniti
// return $request->expectsJson() ? null : route('users.login');
// u App/Http/Middleware/Authenticate.php