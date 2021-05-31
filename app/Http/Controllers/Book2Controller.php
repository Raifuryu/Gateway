<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Book2Service;
use App\Traits\ApiResponser;

class Book2Controller extends Controller
{
    use ApiResponser;
    private $request;
    /**
     * The service to consume the Book2 Microservice
     * @var Book2Service
     */
    public $book2Service;
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(Book2Service $book2Service)
    {
        $this->book2Service = $book2Service;
    }

    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->book2Service->obtainBooks2()); 
    }
    public function add(Request $request)
    {
        return $this->successResponse($this->book2Service->createBook2($request->all(),Response::HTTP_CREATED));
    }
    /**
     * Obtains and show one user
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->book2Service->obtainBook2($id));
    }
    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->book2Service->editBook2($request->all(), $id));
    }
    /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        return $this->successResponse($this->book2Service->deleteBook2($id));
    }
}
