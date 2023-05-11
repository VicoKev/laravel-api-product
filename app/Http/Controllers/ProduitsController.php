<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }

    function detail($id){
        return response()->json(Produit::find($id));
    }

    function ajouter(Request $request){
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }

    function ajouterCommande(Request $request){
        $idClient = $request->idClient;
        $idProduit = $request->idProduit;
        $commande = new Commande();
        $commande->id_client = $idClient;
        $commande->id_produit = $idProduit;
        $commande->quantite = $request->quantite;
        $commande->date= date("Y/m/d");
        $commande->save();
        return response()->json($commande);


    }
}
