@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card bg-light shadow border-0 border-top-primary text-white mb-4">
                    <div class="card-body bg-primary">
                        Employés actifs
                        <span class="badge bg-info">{{ $nombre_employes }}</span>
                    </div>
                    <div class="card-footer py-4 d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="{{ route('admin.staff.index') }}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card bg-light shadow border-0 border-top-primary text-white mb-4">
                    <div class="card-body bg-primary">
                        Départements
                        <span class="badge bg-info">{{ $nombre_departements }}</span>
                    </div>
                    <div class="card-footer py-4 d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="{{ route('admin.departement.index') }}">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card bg-light shadow border-0 border-top-primary text-white mb-4">
                    <div class="card-body bg-primary">
                        Tâches
                        <span class="badge bg-info">12</span>
                    </div>
                    <div class="card-footer py-4 d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card bg-light shadow border-0 border-top-primary text-white mb-4">
                    <div class="card-body bg-primary">
                        Projets
                        <span class="badge bg-info">9</span>
                    </div>
                    <div class="card-footer py-4 d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection