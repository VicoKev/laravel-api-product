<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    function commandesClient($idClient){
        //return response()->json(Client::find($idClient)->commandes()->with('produit')->get());
        //return response()->json(Commande::where('id_client', $idClient)->with('produit')->get());
        return response()->json(Client::find($idClient)->commandes()->get());
       }
}
