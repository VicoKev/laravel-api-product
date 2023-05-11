<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    function commandesClient($idClient){
        //return response()->json(Client::find($idClient)->commandes()->with('produit')->get());
        //return response()->json(Commande::where('id_client', $idClient)->with('produit')->get());
        return response()->json(Client::find($idClient)->commandes()->get());
    }

    function supprimerCommande($idCommande){
        Commande::destroy($idCommande);
        return response()->json("La commande a bien été supprimée !");
    }
}
