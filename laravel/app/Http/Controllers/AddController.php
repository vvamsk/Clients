<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class AddController extends Controller {

  public function AddClient(Request $request) {
    $validate = $request->validate([
      'name' => 'required|min:2|max:50',
      'surname' => 'required|min:2|max:50',
      'email' => 'required|min:5|max:50',
      'phone' => 'required|min:10|max:30',
      'type' => 'required|min:1|max:10',
    ]);

    $client = new Clients();
    $client->name = $request->input('name');
    $client->surname = $request->input('surname');
    $client->email = $request->input('email');
    $client->phone = $request->input('phone');
    $client->type = $request->input('type');

    $client->save();

    return redirect()->route('clients')->with('success', 'The client added');

  }

  public function AllClients(Request $request) {
    return view('clients', ['data' => Clients::all()]);
  }

  public function EditClient($id) {
    $client = new Clients();
    return view('edit', ['data' => $client->find($id)]);
  }

  public function SaveClient($id, Request $request) {
    $validate = $request->validate([
      'name' => 'required|min:2|max:50',
      'surname' => 'required|min:2|max:50',
      'email' => 'required|min:5|max:50',
      'phone' => 'required|min:10|max:30',
      'type' => 'required|min:1|max:10',
    ]);

    $client = Clients::find($id);
    $client->name = $request->input('name');
    $client->surname = $request->input('surname');
    $client->email = $request->input('email');
    $client->phone = $request->input('phone');
    $client->type = $request->input('type');

    $client->save();

    return redirect()->route('clients')->with('success', 'The client edited');
  }

  public function DeleteClient($id) {
    Clients::find($id)->delete();
    return redirect()->route('clients')->with('success', 'The client deleted');
  }

}
