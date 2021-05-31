<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'], function () use ($router) {
    $router->get('/books1', 'Book1Controller@index'); // Get all books from Books Service
    $router->post('/books1', 'Book1Controller@add'); // Create a new book from Books Service
    $router->get('/books1/{id}', 'Book1Controller@show'); // Get the book info based on book id from Books Service
    $router->put('/books1/{id}', 'Book1Controller@update'); // Update a book record based on book id from Books Service
    $router->delete('/books1/{id}', 'Book1Controller@delete'); // Delete a book record based on book id from Books Service

    $router->get('/authors1', 'Author1Controller@index'); // Get all authors from Authors Service
    $router->post('/authors1', 'Author1Controller@add'); // Create a new author from Authors Service
    $router->get('/authors1/{id}', 'Author1Controller@show'); // Get the author info based on author id from Authors Service
    $router->put('/authors1/{id}', 'Author1Controller@update'); // Update a author record based on author id from Authors Service
    $router->delete('/authors1/{id}', 'Author1Controller@delete'); // Delete author record based on author id from Authors Service

    $router->get('/books2', 'Book2Controller@index'); // Get all books from Books Service
    $router->post('/books2', 'Book2Controller@add'); // Create a new book from Books Service
    $router->get('/books2/{id}', 'Book2Controller@show'); // Get the book info based on book id from Books Service
    $router->put('/books2/{id}', 'Book2Controller@update'); // Update a book record based on book id from Books Service
    $router->delete('/books2/{id}', 'Book2Controller@delete'); // Delete a book record based on book id from Books Service

    $router->get('/authors2', 'Author2Controller@index'); // Get all authors from Authors Service
    $router->post('/authors2', 'Author2Controller@add'); // Create a new author from Authors Service
    $router->get('/authors2/{id}', 'Author2Controller@show'); // Get the author info based on author id from Authors Service
    $router->put('/authors2/{id}', 'Author2Controller@update'); // Update a author record based on author id from Authors Service
    $router->delete('/authors2/{id}', 'Author2Controller@delete'); // Delete author record based on author id from Authors Service
});
