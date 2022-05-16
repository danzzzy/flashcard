# Memo
## Set Up
- [Official Document](https://readouble.com/laravel/8.x/ja/sail.html)
- set up the alias in the bash
- `alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`
- `alias sail='bash vendor/bin/sail'`
- `sail up -d` to run
- open browser localhost
- `sail artisan make:controller HomeController --resource` to create home controller
- `sail artisan migrate` to migrate tables to database
## Route
- use `App\Http\Controllers\HomeController` to set up initial home controller as home page
- `Route::get('/', [SlideAction::class, 'index'])->name('home.index');` as base for definig route
- `Route::get('/', [HomeController::class, 'index'])->name('home.index');` to set the route to the controller
## See DB
- `sail mysql` to view the database tables
  - `show databases;` to see the databases within mysql
  - `use (database_name)` to see the database table
  - `show tables` to see the tables
  - use sql code to find the correct information within the tables
## Create Table
- `sail_artisan make:migration create_name_table` to create a table template
- `$table->string('name');` to add table columns
- `sail artisan migrate` to migrate the created table with columns
- add to down when adding new columns after migrating to allow flexibility of reverting back
