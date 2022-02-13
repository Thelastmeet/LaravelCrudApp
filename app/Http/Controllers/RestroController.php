<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;
use App\Models\restaurants as ModelsRestaurants;
use Session;

class RestroController extends Controller
{

    public function index()
    {
        return view('Home');
    }
    public function list()
    {

        $data = Restaurants::all();
        return view('list', ["data" => $data]);
    }
    public function add(Request $req)
    {
        $restro = new Restaurants;
        $restro->name = $req->input('name');
        $restro->email = $req->input('email');
        $restro->address = $req->input('address');
        $restro->save();
        $req->session()->flash('status', 'list added successfully');
        return redirect('list');
    }

    public function delete($id)
    {
        $data=Restaurants::find($id);
        $data->delete();
        return redirect()->back()->with('status','Deleted Successfully');

    }
    public function edit($id)
    {

        $data = Restaurants::find($id);
        //dd($data);
        return view('edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
            dd($id);
        $data = Restaurants::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->save();
        return redirect()->back()->with('status', 'data Updated Successfully');
    }
}
