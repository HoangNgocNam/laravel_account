<?php

namespace App\Repositories\Impl;

interface BaseRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function delete($id);
}
