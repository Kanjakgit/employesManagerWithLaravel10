<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EMPLOYEE MANAGER</title>
    {{-- BOOTSTRAP CSS | JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- MY CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        {{-- SECTION DU LOGO --}}
        <div class="col-lg-6 col-md-6 col-sm-12">
            <section class="section bg-primary register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="image w-100 h-100">
                        </div>
                    </div>
                </div>
            </section>
        </div> {{-- FIN SECTION DU LOGO --}}

        {{-- SECTION DU FORMULAIRE --}}
        <div class="col-lg-6 col-md-6 col-sm-12">
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="">
              <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                  <div class="card shadow mb-3 border-4 border-primary border-end-0 border-start-0">
                    <div class="card-body">
                      <div class="pt-4 pb-2 mb-3">
                        <h5 class="card-title text-center pb-0 display-6">Login</h5>
                      </div>

                      {{-- FORMULAIRE DE CONNEXION --}}
                      <form action="{{ route('login') }}" method="post" class="row g-3 needs-validation">
                        @csrf
                        <div class="col-10 offset-1 mb-2">
                            <input type="text" name="name" class="form-control" id="yourUsername" placeholder="Username" autofocus>
                        </div>

                        <div class="col-10 offset-1 mb-2">
                            <select name="role" class="form-control">
                                <option value="Role" selected disabled>Select role</option>
                                <option value="admin">ADMIN</option>
                                <option value="user">USER</option>
                            </select>
                        </div>

                        <div class="col-10 offset-1 mb-3">
                          <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" autocomplete="off">
                        </div>

                        <div class="col-10 offset-1 mb-3">
                          <button class="btn btn-primary text-light w-100" type="submit" name="btn_login">Login</button>
                        </div>
                      </form> {{-- FIN DU FORMULAIRE DE CONNEXION --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
        </div>
        {{-- FIN SECTION DU FORMULAIRE --}}
      </div>    
    </div>

    {{-- SCRIPTS --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
    
</body>
</html>