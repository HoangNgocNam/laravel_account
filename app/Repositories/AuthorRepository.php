<?php

namespace App\Repositories;

use App\Repositories\Impl\AuthorRepositoryInterface;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class AuthorRepository extends BaseRepositories implements AuthorRepositoryInterface
{
    protected $table = 'authors';

    public function store($request)
    {
        DB::table($this->table)->insert([
            'name' => $request->name,
            'country' => $request->country
        ]);
    }

    public function updateAu($id, $request)
    {
        $data = $request->only("name", "country");
        DB::table('authors')
            ->where('id', $id)
            ->update($data);
        return $data;
    }
}
