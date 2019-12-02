<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
class usersController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin/users',compact('user'));
    }
}
