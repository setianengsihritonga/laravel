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
<h4>DATA DIRI</h4>
  <div class="row">
    <div class="col-md-12">

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Agama</th>
      <th scope="col">TTL</th>
      <th scope="col">No Handphone</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1;?>
  @foreach($data as $item)
    <tr>
      <th scope="row"><?= $i ?></th>
      <td>{{$item->Nama}}</td>
      <td>{{$item->Agama}}</td>
      <td>{{$item->TTL}}</td>
      <td>{{$item->NoHandphone}}</td>
      <td><a href="{{route('profile.edit',$item->id)}}" class="btn btn-primary">Edit</a>
      <!-- rooute buat ngarah ke form -->
      <a href="{{route('profile.create')}}" class="btn btn-warning">Tambah</a>
      <form action="{{ route('profile.destroy', $item->id) }}" method="POST" class="d-inline">
        @csrf
        @method('delete')

         <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Data Mau Dihapus??');"> delete</button>
                                    </form> </td>
    </tr>
   <?php $i++ ?>
    @endforeach
    
  </tbody>
</table>
   
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