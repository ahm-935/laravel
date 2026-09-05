<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    public function test()
    {
        $org = "IsDB";
        $tsp = "TCL";
        $round = 70;
        // return view('pages.price',[
        //     'organization' => $org,
        //     'tsp' => $tsp,
        //     'round' => $round
        // ] );
        return view('pages.price', compact('org', 'tsp', 'round'));
    }
} 
 
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        // $users = User::orderBy('id', 'desc')->get();
        // $users = User::orderBy('id', 'asc')->offset(10)->limit(10)->get();
        // $users = User::orderBy('id', 'asc')->offset(10)->first();
        // $users = User::orderBy('id', 'asc')->where('role_id', 1)->get();
        // $users = User::orderBy('id', 'asc')
        // // ->where('role_id', 2)
        // ->whereIn('role_id', [2, 3])
        // ->get();
        // $users = User::orderBy('id', 'asc')
        // ->select('id', 'name', 'email', 'role_id')
        // ->first(); 

        // $users = User::from('users as u')
        // ->join('roles as r', 'u.role_id', '=', 'r.id')
        // ->orderBy('id', 'asc')
        // ->select('u.id', 'u.name', 'u.email', 'role_id', 'r.name as role_name')
        // ->first();

        $users = User::join('roles as r', 'users.role_id', '=', 'r.id')
        ->orderBy('id', 'asc')
        ->select('users.id', 'users.name', 'users.email', 'r.name as role')
        // ->limit(10)               
        ->paginate(10);
        // ->get();
        // dd($users);
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
>>>>>>> f5e64f3 (sparkAdmin templating on L13)
