<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Departement;
use App\Models\Poste;
// use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Departement;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        // $employe = new Employe();
        // $employe->empl_matricule = 'EM001';
        // $employe->empl_prenom = 'kanjak';
        // $employe->empl_nom = 'kanjak mickelson';
        // $employe->empl_genre = 'M';
        // $employe->empl_tel = '0987650900';
        // $employe->empl_adresse = 'numero 5, av de la justice';
        // $employe->empl_date_naissance = '2003-10-19';
        // $employe->empl_salaire = 200000;
        // $employe->poste_id = 3;
        // $employe->departement_id = 1;
        // $employe->save();
        // $poste1 = new Poste();
        // $poste1->poste_nom = 'admin reseau';
        // $poste1->departement_id = 1;
        // $poste1->save();
        // $poste2 = new Poste();
        // $poste2->poste_nom = 'comptable';
        // $poste2->departement_id = 2;
        // $poste2->save();
        $nombreDepartement = Departement::all()->count();
        $nombreEmploye = Employe::all()->where('empl_statut', '==', 'actif')->count();
        return view('admin.dashboard', [
            'nombre_departements' => $nombreDepartement,
            'nombre_employes' => $nombreEmploye
        ]);
    }
}