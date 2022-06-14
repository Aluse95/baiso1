<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function listProduct() {

        $data = DB::select('SELECT * FROM '.$this->table);

        return $data;
    }
}
