@extends('admin.layout')

@section('title', 'Départements')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Départements</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card bg-white shadow border-0 border-top-primary text-dark mb-4">
                    <div class="card-head bg-light d-flex justify-content-end">
                        <a href="{{ route('admin.departement.create') }}" class="btn btn-primary my-3 me-3">Ajouter</a>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table-white table-hover">
                            <thead>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Nombre d'employés</th>
                                    <th>Chef</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Nombre d'employés</th>
                                    <th>Chef</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($departements as $departement)
                                <tr>
                                    <td>{{ $departement->depart_matricule }}</td>
                                    <td>{{ $departement->depart_nom }}</td>
                                    <td>{{ $departement->employes_count }}</td>
                                    <td>{{ $departement->depart_chef }}</td>
                                    <td>
                                        <a href="#" class="ms-1" title="Supprimer"><i class="fas fa-trash text-danger"></i></a>
                                        <a href="#" class="ms-3" title="Voir plus"><i class="fas fa-plus text-info"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection