<?php

namespace App\Repositories;

use App\Repositories\Impl\AuthorRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BaseRepositories implements AuthorRepositoryInterface
{
    protected $table;

    public function getAll()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function getById($id)
    {
        $data = DB::table($this->table)->where('id', '=', $id)->get()->first();
        return $data;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        DB::table($this->table)->where('id', $id)->delete();
    }
}
