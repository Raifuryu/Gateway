<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class Author2Service
{
    use ConsumesExternalService;
    /**
     * The base uri to consume the Author2 Service
     * @var string
     */
    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.books2.base_uri');
        $this->secret = config('services.books2.secret');
    }

    public function obtainAuthors2()
    {
        return $this->performRequest('GET', '/authors');
    }

    public function createAuthor2($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    public function obtainAuthor2($id)
    {
        return $this->performRequest('GET', "/authors/{$id}");
    }

    public function editAuthor2($data, $id)
    {
        return $this->performRequest('PUT', "/authors/{$id}", $data);
    }

    public function deleteAuthor2($id)
    {
        return $this->performRequest('DELETE', "/authors/{$id}");
    }
}
