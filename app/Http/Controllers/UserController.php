<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();

        return view('users', ['contacts' => $contacts]);
    }
}
