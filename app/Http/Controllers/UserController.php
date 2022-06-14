<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;


class UserController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = new Users;
    }

    public function list() {

        $detail = $this->data-> listProduct();

        return view('users.home', compact('detail'));
    }
    public function infor() {

        // $detail = $this->data-> listProduct();

        return view('users.infor');
    }
}
