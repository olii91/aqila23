<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/style.css">
    <title>Document</title>
</head>


<body>


    <!-- navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="">PengaduanKita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="{{route ('login')}}">Log In</a>
            <a class="nav-link" href="{{route ('register')}}">Register</a>
            <a class="nav-link" href="#">About</a>
        </div>
    </div>
    </div>
</nav>    


<!-- jumbotron -->


    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Laman Pengaduan Masyarakat</h1>
        <p class="lead"></p>
        <br><br>
        <a href="{{route ('register')}}" class="btn btn-primary tombol">Buat Pengaduan</a>
    </div>
    </div>


</body>


</html>



