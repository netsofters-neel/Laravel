//create project
composer create-project laravel/laravel crud


//live
php artisan serve


//migrate database tables
php artisan make:migration create_NameOfTable_table
php artisan migrate


//generate model
php artisan make:model Name


//generate controller
php artisan make:controller NameController


//make route
Route::get('/products',[NameController::class,'index']);   //index will replaced by function name
or
Route::get('/products',[NameController::class,'index'])->name('name.index'); // it will give name , so no need to edit all Href in case of url edit
