@extends('admin.layout')

@section('title', 'Paramètres')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Paramètres</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <!-- Profile -->
            <div class="col-xl-4">
                <div class="card shadow bg-dark text-light border-3 border-primary border-start-0 border-end-0 border-bottom-0">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="#" alt="Profile" class="rounded-circle w-50 h-50">
                        <h2 class="fs-4 text-warning text-uppercase">::Nom et role</h2>
                        <h3 class="fs-6 text-capitalize">Poste</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card shadow border-3 border-primary border-start-0 border-end-0 border-bottom-0">
                    <div class="card-head bg-light">
                        <div class="row mx-2 mt-3">
                            <div class="col-md-12 col-lg-12">
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong><i class='bi check-lg'></i>Message</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Nom prenom</div>
                                    <div class="col-lg-9 col-md-8 text-capitalize">Nom prenom</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8 text-capitalize">email</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Poste</div>
                                    <div class="col-lg-9 col-md-8 text-capitalize">Poste</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">tel</div>
                                </div>
                            </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="#" method="POST">
                                @csrf
                                <div class="row mb-3 d-flex">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="" class="w-75 h-75" alt="Photo de profile">
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm" title="Edit my profile image"><i class="fas fa-pen"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="">

                                <div class="row mb-3">
                                    <label for="Name" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="name" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Prenom" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="prenom" type="text" class="form-control" id="lastName" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Addresse</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" id="Address" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Numéro de téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="Phone" value="">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="save" class="btn btn-primary">Enregistrer les modifications</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form action="#" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="">

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe actuel</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau mot de passe</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Retapez le mot de passe</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="change" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form><!-- End Change Password Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection