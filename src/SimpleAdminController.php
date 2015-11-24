<?php namespace Hofkens\SimpleAdminGit;
use App\Http\Controllers\Controller;
use App\User;

class SimpleAdminController extends Controller {

    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return "hallokes";
        //return view('simpleAdminGit::admin')->with('users', $users);
    }
}