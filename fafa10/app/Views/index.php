<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Katagori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Tentang Film</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row"></div>
    <div class="col-md-12"></div>

                <table class="table table-hover">
                    <tr>
                        <th>NO</th>
                        <th>Nma Film</th>
                        <th>Genre<th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <?php  $i = 1;
                    foreach($data_film as $film) : ?>
                        <tr>
                            <td></td>
                            <td><?=$film["nama_film"] ?><td>
                            <td><?=$film["nama_genre"] ?><td>
                            <td><?=$film["duration"] ?><td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                            <a href="" class="btn btn-warning">Delete</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
    </div>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>