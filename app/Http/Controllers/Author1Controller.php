<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Author1Service;
use App\Traits\ApiResponser;

class Author1Controller extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the Book1 Microservice
     * @var Author1Service
     */
    public $author1Service;
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(Author1Service $author1Service)
    {
        $this->author1Service = $author1Service;
    }

    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->author1Service->obtainAuthors1()); 
    }
    public function add(Request $request)
    {
        return $this->successResponse($this->author1Service->createAuthor1($request->all(),Response::HTTP_CREATED));
    }
    /**
     * Obtains and show one user
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->author1Service->obtainAuthor1($id));
    }
    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->author1Service->editAuthor1($request->all(), $id));
    }
    /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        return $this->successResponse($this->author1Service->deleteAuthor1($id));
    }
}
