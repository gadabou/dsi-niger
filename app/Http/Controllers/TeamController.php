<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les membres de l'équipe
        $teams = Team::orderBy('date_joined', 'desc')->get();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer toutes les sous-équipe pour le formulaire
        $subTeams = SubTeam::all();
        return view('teams.create', compact('subTeams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données envoyées par le formulaire
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'sub_team_id' => 'required|exists:sub_teams,id',
            'civility' => 'nullable|string|max:20',
            'profession' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('media'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Créer un nouveau membre de l'équipe avec les données validées
        Team::create($validatedData);

        // Rediriger vers la liste des membres de l'équipe avec un message de succès
        return redirect()->route('teams.index')->with('success', 'Team member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        // Afficher les détails d'un membre de l'équipe spécifique
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        // Récupérer toutes les sous-équipe pour le formulaire
        $subTeams = SubTeam::all();
        return view('teams.edit', compact('team', 'subTeams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        // Valider les données envoyées par le formulaire
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'sub_team_id' => 'required|exists:sub_teams,id',
            'civility' => 'nullable|string|max:20',
            'profession' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($team->image && file_exists(public_path('media/' . $team->image))) {
                unlink(public_path('media/' . $team->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('media'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Mettre à jour le membre de l'équipe avec les nouvelles données
        $team->update($validatedData);

        // Rediriger vers la liste des membres de l'équipe avec un message de succès
        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        // Supprimer l'image associée si elle existe
        if ($team->image && file_exists(public_path('media/' . $team->image))) {
            unlink(public_path('media/' . $team->image));
        }

        // Supprimer le membre de l'équipe spécifié
        $team->delete();

        // Rediriger vers la liste des membres de l'équipe avec un message de succès
        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }
}
