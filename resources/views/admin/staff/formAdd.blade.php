@extends('admin.layout')

@section('title', 'Manager')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Staff</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Ajouter</li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card bg-white shadow border-0 border-top-primary text-white mb-4">
                    {{-- <div class="card-header bg-primary bg-opacity-25">
                        <strong>Message</strong>
                    </div> --}}
                    <div class="card-body bg-white">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active text-dark border-4 border-primary border-start-0 border-end-0 border-top-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-plus"></i></button>
                            </li>
                        </ul>
                        <div class="card bg-white border-0">
                            <div class="card-head">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="my-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="card-body text-dark">
                                {{-- Formulaire d'ajout --}}
                                <form class="row g-3" action="" method="POST">
                                    @csrf
                                    <div class="col-md-4">
                                        <input type="text" name="nom" class="form-control bg-white text-dark" placeholder="Nom">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="prenom" class="form-control bg-white text-dark" placeholder="Prénom">
                                    </div>
                                    <div class="col-md-4">
                                        <select id="inputState" name="genre" class="form-select bg-white text-dark">
                                            <option selected disabled>Genre</option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="tel" name="telephone" class="form-control bg-white text-dark" placeholder="Numéro de téléphone">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="adresse" class="form-control bg-white text-dark" placeholder="Adresse">
                                    </div>

                                    <div class="col-md-4">
                                        <select id="inputState" name="departement" class="form-select bg-white text-dark">
                                            <option selected disabled>Departement</option>
                                            @foreach ($departements as $departement)
                                                <option value="{{ $departement->depart_nom }}">{{ $departement->depart_nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <input type="number" name="salaire" class="form-control bg-white text-dark " aria-label="Amount (to the nearest dollar)" placeholder="Salaire">
                                            <span class="input-group-text bg-white text-dark">$</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <input type="text" name="poste" class="form-control bg-white text-dark " placeholder="Poste">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-1">
                                        <div class="form-group">
                                            <label for="dateNaissance" class="form-label">Date de naissance</label>
                                            <input type="date" name="dateNaissance" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <button type="submit" name="ajouter" class="btn btn-primary w-100">Ajouter</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-outline-primary w-100">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection