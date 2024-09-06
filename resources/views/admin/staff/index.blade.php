@extends('admin.layout')

@section('title', 'Tout les employés')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Staff</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card bg-white shadow border-0 border-top-primary text-dark mb-4">
                    <div class="card-header bg-light d-flex justify-content-end">
                        <a href="{{ route('admin.staff.create') }}" class="btn btn-primary my-3 me-3">Ajouter</a>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table-white table-hover">
                            <thead>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Genre</th>
                                    <th>Email</th>
                                    <th>Poste</th>
                                    <th>Departement</th>
                                    <th>Role</th>
                                    <th>Statut</th>
                                    <th>Date d'embauche</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Genre</th>
                                    <th>Email</th>
                                    <th>Poste</th>
                                    <th>Departement</th>
                                    <th>Role</th>
                                    <th>Statut</th>
                                    <th>Date d'embauche</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($employes as $employe)
                                <tr>
                                    <td>{{ $employe->empl_matricule }}</td>
                                    <td>{{ $employe->prenom_et_nom }}</td>
                                    <td>{{ $employe->empl_genre }}</td>
                                    <td>{{ $employe->user->email }}</td>
                                    <td>{{ $employe->poste->poste_nom }}</td>
                                    <td>{{ $employe->departement->depart_nom }}</td>
                                    <td>{{ $employe->is_admin_statut }}</td>
                                    <td>{{ $employe->empl_statut }}</td>
                                    <td>{{ $employe->created_at }}</td>
                                    <td>
                                        <a href="#" class="ms-1" title="Activer"><i class="fas fa-check text-success"></i></a>
                                        <a href="#" class="ms-1" title="Desactiver"><i class="fas fa-x text-warning"></i></a>
                                        <a href="#" class="ms-1" title="Supprimer"><i class="fas fa-trash text-danger"></i></a>
                                        <a href="#" class="ms-1" title="Voir plus"><i class="fas fa-plus text-info"></i></a>
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