<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * Misc "static" pages
 */
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/login', 'login');
Route::view('/index', 'index');
Route::view('/resources', 'resources');
Route::view('/calendar', 'calendar');
Route::view('/analytics', 'analytics');
Route::view('/tools', 'tools');
Route::view('/practice', 'practice');
Route::view('/dashboard', 'dashboard');
Route::view('/checklist', 'checklist');
Route::view('/forms/create/audit', 'forms.create.audit');
Route::view('/forms/load/audit', 'forms.load.audit');
Route::view('/forms/delete/audit', 'forms.delete.audit');
Route::view('/forms/update/audit', 'forms.update.audit');
Route::view('/forms/load/checklist', 'forms.load.checklist');
Route::get('/index', 'AppController@index');
Route::get('/login', 'AppController@login');
Route::get('/forms/create/audit','AppController@create');
Route::get('/forms/load/audit', 'AppController@load');
Route::get('/forms/delete/audit', 'AppController@delete');
Route::get('/forms/update/audit', 'AppController@update');
Route::post('/login', 'AppController@processFormLogin');
Route::post('/process/form/create/audit', 'AuditController@create');
Route::post('/process/form/load/audit', 'AuditController@load');
Route::post('/process/form/delete/audit','AuditController@delete');
Route::post('/process/form/update/audit','AuditController@update');


//Route::post('/process/form/login', 'AppController@processFormLogin');
Route::get('/form/create/project', 'AppController@create');
Route::get('/form/load/project', 'AppController@load');
Route::get('/form/load/pm-tools', 'AppController@loadPMTools');
Route::post('/app/action/create', 'AppController@processProjectCreationRequest');

/*
 * Books
 */
Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');

# Show the search form
Route::get('/books/search', 'BookController@search');

# Processing the search form
Route::get('/books/search-process', 'BookController@searchProcess');
Route::get('/books', 'BookController@index');
Route::get('/books/{id}', 'BookController@show');

# Update functionality
# Show the form to edit a specific book
Route::get('/books/{id}/edit', 'BookController@edit');

# Process the form to edit a specific book
Route::put('/books/{id}', 'BookController@update');

# DELETE
# Show the page to confirm deletion of a book
Route::get('/books/{id}/delete', 'BookController@delete');

# Process the deletion of a book
Route::delete('/books/{id}', 'BookController@destroy');
/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');
# Example routes from the discussion of P3 development (Week 6, Part 8 video)
//Route::get('/', 'TriviaController@index');
//Route::get('/check-answer', 'TriviaController@checkAnswer');
Route::get('/practice', function () {
    dump(config('mail.driver'));
});
Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
