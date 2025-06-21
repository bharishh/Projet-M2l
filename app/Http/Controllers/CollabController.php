<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupère tous les utilisateurs (collaborateurs)
        $collaborateurs = User::all();

        // Passe la collection à la vue sous le nom 'collaborateurs'
        return view('home.liste', compact('collaborateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Request $request)
    {
        $user = new User();
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('Prenom');
        $user->email = $request->input('mail');
        $user->categorie = $request->input('categorie');
        $user->password = $request->input('mot_de_passe');
        $user->pays = $request->input('pays');
        $user->telephone = $request->input('telephone');
        $user->ville = $request->input('ville');
        $user->civility = $request->input('civility');
        $user->date_naissance = $request->input('date_naissance');
        $user->age = Carbon::parse($request->input('date_naissance'))->age;
        $user->image  = $request->input('photo');
        $user->save();
        return redirect()->route('collab.index')->with("Success, Collab Add");
    }

    /**
     * Display the specified resource.
     */
        public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $collaborateur = User::findOrFail($id);
        return view('home.edit', compact('collaborateur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required|string|max:255',
            'civility' => 'required|string|in:homme,femme',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pays' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'date_naissance' => 'nullable|date',
            'password' => 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $collaborateur = User::findOrFail($id);

        $collaborateur->categorie = $request->categorie;
        $collaborateur->civility = $request->civility;
        $collaborateur->nom = $request->nom;
        $collaborateur->prenom = $request->prenom;
        $collaborateur->email = $request->email;
        $collaborateur->pays = $request->pays;
        $collaborateur->ville = $request->ville;
        $collaborateur->telephone = $request->telephone;
        $collaborateur->date_naissance = $request->date_naissance;

        if ($request->filled('password')) {
            $collaborateur->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $photoPath = $request->file('image')->store('photos', 'public');
            $collaborateur->image = $photoPath;
        }

        $collaborateur->save();

        return redirect()->route('collab.index')->with('success', 'Collaborateur modifié avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $collab)
    {
        $collab->delete();
        return redirect()->route('collab.index')->with('success', 'Collaborateur supprimé');
    }
}
