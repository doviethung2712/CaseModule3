<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository
{
    public function getTable()
    {
        return 'posts';
    }

    public function store($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function update($data, $id)
    {
        DB::table($this->table)->where('id',$id)->update($data);
    }
}
