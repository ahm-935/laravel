<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        // $roles = Role::all()->toArray();    //Ascending order
        $roles = Role::latest()->get();     //Descending order
        // dd($roles); 
        // return view('admin.role.manage', compact('roles'));
        return view('admin.role.manage', ['roles' => $roles]);
    }

    public function create(){
        return view('admin.role.create');
    }

    public function details(){
        return view('admin.role.details');
    }

    public function edit(){
        return view('admin.role.update');
    }
}
