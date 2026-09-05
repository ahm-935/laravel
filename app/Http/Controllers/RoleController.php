<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
<<<<<<< HEAD
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
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
>>>>>>> 12840fa (db data fetch)
    }
}
