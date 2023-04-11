<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator as V;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all()->sortBy('surname');

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'personal_id' => 'required|integer|unique:clients,personal_id|regex:/^([3-6]{1})([0-9]{2})([0-1]{1})([0-9]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/',
        ]);

        //        $validator->after(function (V $validator) {
        //     $validator->errors()->add('Fancy', 'Fancy is wrong!');
        // });


        if ($validator->fails()) {
            $request-> flash();
            return redirect()
                        ->back()
                        ->withErrors($validator);
        }


        $client = new Client;
        $client->name = $request->name;
        $client->surname = $request->surname; 
        $client->personal_id = $request->personal_id;
        $client->iban = 'LT' . rand(40,60) . 35000 . rand(10000000000,99999999999);;
        $client->balance = $request->balance;
        // likusi kliento informacija papildyti
        $client->save();
        return redirect()
        ->route('clients-index')
        ->with('ok', 'New client was created');

    }

    public function show(Client $client)
    {
        return view('clients.show', [
            'client' => $client
        ]);
    }


    public function edit(Client $client)
    {
        return view('clients.edit', [
            'client' => $client
        ]);
    }


    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            $request-> flash();
            return redirect()
                        ->back()
                        ->withErrors($validator);
        }

        $client->name = $request->name;
        $client->surname = $request->surname; 
        $client->personal_id = $request->personal_id;
        $client->iban = $request->iban;
        $client->balance = $request->balance;
        $client->save();
        return redirect()
        ->route('clients-index')
        ->with('ok', 'Client was updated');;
    }

    public function destroy(Client $client)
    {
        if ($client->money != 0) {
            return redirect()
            ->back()
            ->with('warn', 'Cannot delete 
            client - there is money in account.');

        } else {
            $client->delete();
            return redirect()
            ->route('clients-index')
            ->with('info', 'Client was deleted');
        }
    }
    public function addMoney(Request $request, Client $client)
{
    $request->validate([
        'amount' => 'required|numeric|min:0.01',
    ]);

    $client->balance += $request->amount;
    $client->save();

    return redirect()->route('clients-show', $client)->with('success', 'Money added successfully.');
}

public function withdrawMoney(Request $request, Client $client)
{
    $request->validate([
        'amount' => 'required|numeric|min:0.01|max:' . $client->balance,
    ]);

    $client->balance -= $request->amount;
    $client->save();

    return redirect()->route('clients-show', $client)->with('success', 'Money withdrawn successfully.');
}

}