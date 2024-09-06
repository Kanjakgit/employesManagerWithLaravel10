@extends('admin.layout')

@section('title', 'Départements')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Départements</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Ajouter</li>
        </ol>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card col-md-4 bg-white shadow border-bottom-0 border-start-0 border-end-0 border-top-primary border-3 text-dark mb-4">
                    <div class="card-head bg-light">
                        <div class='alert alert-success alert-dismissible fade show my-2 mx-2' role='alert'>
                            <strong><i class='bi check-lg'></i>Message</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="#" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" name="matricule" class="form-control bg-white text-dark" placeholder="Matricule">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="nom" class="form-control bg-white text-dark" placeholder="Nom">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="chef" class="form-control bg-white text-dark" placeholder="Chef">
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
@endsection