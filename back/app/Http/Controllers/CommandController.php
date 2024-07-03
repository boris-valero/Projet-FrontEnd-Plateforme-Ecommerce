<?php


namespace App\Http\Controllers;

use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
   /**
    * Display a listing of the resource.
    * 
    * @return \Illuminate\Http\Response
    */
    // Afficher toutes les commandes
    public function index()
    {
        //
        $commands = Command::all();
        return response()->json($commands);
    }

    // Afficher une commande spécifique
    public function show($id)
    {
        $command = Command::find($id);
        if ($command) {
            return response()->json($command);
        } else {
            return response()->json(['message' => 'Command not found'], 404);
        }
    }


        }
    