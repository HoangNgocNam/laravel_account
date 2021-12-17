<?php

namespace App\Repositories\Impl;

interface AuthorRepositoryInterface extends BaseRepositoryInterface
{
    public function store($request);

    public function updateAu($id, $request);
}
