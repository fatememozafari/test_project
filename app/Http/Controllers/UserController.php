<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $titleCard = 'لیست';
        $th = [
            'id',
            'name',
            'phone_number',
            'email',
            'date_of_birth'
            ];

        $query = User::query()
            ->orderBy('id', 'DESC')
            ->get();

        return view('users.index',
            [
                'users' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
    }
}
