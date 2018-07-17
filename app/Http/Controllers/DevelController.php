<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use Hash, Auth;

class DevelController extends Controller
{
    public function create()
    {
        $data = new User;
        $data->name         = 'ahmad juma';
        $data->email        = 'ahmadnorin@gmail.com';
        $data->password     = Hash::make('admin');
        $data->save();

        dd($data);
    }

    public function login()
    {
        $email              = 'ahmadnorin@gmail.com';
        $password           = 'admin';

        $login              = Auth::attempt(['email'    => $email, 'password' => $password]);
        if($login)
        {
            //dd(Auth::user());
            return Auth::user()->email;

        }
        else
        {
            return 'gagal';
        }
    }

    public function check()
    {
        var_dump(Auth::check());

    }

    public function logout()
    {
        Auth::logout();
        return 'logout';
    }

    public function create_admin()
    {
        $data = new Admin;
        $data->name         = 'ahmad juma';
        $data->email        = 'ahmadnorin2@gmail.com';
        $data->password     = Hash::make('admin');
        $data->save();

        dd($data);
    }

    public function login_admin()
    {
        $email              = 'ahmadnorin2@gmail.com';
        $password           = 'admin';

        $login              = Auth::attempt('admin',['email'    => $email, 'password' => $password]);
        if($login)
        {
            //dd(Auth::user());
            return Auth::user('admin')->email;

        }
        else
        {
            return 'gagal';
        }
    }

    public function check_admin()
    {
        var_dump(Auth::check('admin'));

    }

    public function logout_admin()
    {
        Auth::logout('admin');
        return 'logout';
    }
}
