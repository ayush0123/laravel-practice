<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Profile;

class UsersController extends Controller
{


    public function login() {
        return view('users.login');

    }


    public function register(Request $request) {
        if ($request->isMethod('post')) {
            $errors = $request->validate([
                'name' => 'required',
                'phone_no' => 'required|unique:users,phone_no',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);
            $request['hash_key'] = md5(time());
            $user = Profile::create($request->all());
            if ($user) {
                Session::flash('success', 'User has been added successfully');
                // $request->session()->flash('User', 'User has been updated successfully');

                return redirect('login');
            }
        }
        // Session::flash('success', 'User has been updated successfully');
        return view('users.register');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
