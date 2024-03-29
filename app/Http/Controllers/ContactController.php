<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Yajra\DataTables\DaTatables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('allcontact');
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
    public function allcontact()
    {
        $contact=Contact::all();
        return Datatables::of($contact)->addColumn('action',function($contact)
            {
                '<a onclick="showData('.$contact->id.')" class="btn btn-sm btn-success">Show</a>'.' '.
                '<a onclick="editForm('.$contact->id.')" class="btn btn-sm btn-success">Edit</a>'.' '.
                '<a onclick="deleteData('.$contact->id.')" class="btn btn-sm btn-success">Delete</a>'
            })->make(true);
    }
}

