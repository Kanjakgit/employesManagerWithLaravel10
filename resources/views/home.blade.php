<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap : css | js --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        img{
            width: 150px;
            height: auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>EMPLOYEE MANAGER | Welcome Page</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-sm bg-primary">
        <div class="container text-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="image img-fluid"></a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    {{-- End Navbar --}}

    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Welcome to Employee Manager Application</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aperiam, animi sapiente nisi quod tenetur minima. 
                Ipsa non nulla, impedit earum nihil minima iusto iure optio aut atque dolorum. 
                A cupiditate voluptatum exercitationem ullam libero maiores, 
                officia fugit unde laudantium possimus ducimus aliquid quam 
                ex eveniet molestias illum, sint incidunt! Deleniti.
            </p>
        </div>
    </div>
    <div class="container">
        <a href="/login" class="btn btn-lg btn-primary align-center w-100">GO TO LOGIN PAGE</a>
    </div>
</body>
</html>