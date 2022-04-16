<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into users (name,email,password) values (?, ?, ?)', ["Debankar", "tet@test", '12345']);
        // return view('welcome');

        $data=[
            'name' => 'Ralph',
            'email'=> 'test22@test',
            'password'=>bcrypt('12345'),
            'text' => "test"
        ];

        User::insert($data);
        return(User::all());
    }
}
