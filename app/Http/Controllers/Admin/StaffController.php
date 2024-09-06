<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Employe;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\ManagerFormRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::with('poste','departement', 'user')->get();
        return view('admin.staff.index', ['employes' => $employes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::get();
        return view('admin.staff.formAdd', ['departements' => $departements]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
