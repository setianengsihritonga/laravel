<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- navbar -->
   <div class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Setia Nengsih Ritonga</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Profile">Profile</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<div class="container">
<div>
<P></p>
</div>
  </div>
<!-- Akhir Navbar -->

<!-- Table -->
<div class="container">
    <div class="row">
    <div class="col-md-6">

    <form method="post" action="{{route('profile.store')}}">
    @csrf
  <div class="form-group row">
    <label for="Nama" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukan Nama Lengkap">
    </div>
  </div>
  <div class="form-group row">
    <label for="Agama" class="col-sm-4 col-form-label">Agama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Agama" name="Agama" placeholder="Agama">
    </div>
  </div>
  <div class="form-group row">
    <label for="TTL" class="col-sm-4 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" id="TTL" name="TTL">
    </div>
  </div>
  <div class="form-group row">
    <label for="NoHanphone" class="col-sm-4 col-form-label">No Handphone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="NoHanphone" name="NoHandphone" placeholder="Masukan No Handphone">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
  </div>
</form>
    </div>
    </div>
   
    </div>
  </div>
</div>
<!-- Akhir Table -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>