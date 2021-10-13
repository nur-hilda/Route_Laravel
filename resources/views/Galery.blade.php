<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
</style>
    <title>Laravel</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Beranda">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Profil.blade.php">Profil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Galery.blade.php">Galery</a>
        </li>       
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
</header>

<!-- Page Content -->
<section class="py-5 text-center">
      <div class="container"> 
         <h2 class="text-center">Animals</h2>
        <p class="text-muted mb-5 text-center"></p>
        <div class="row">
          
        <div class="card shadow border-5">
            <div class="card-body">
              <h5 class="card-title">Hewan Darat</h5>
            </div>

            <tr>
              <div class="box">
            <td><img src="https://i.pinimg.com/originals/a1/60/99/a160991b449645a2bf53dc5185e6c940.jpg" width="285px" height="300px"> </td>
              <td><img src="https://i.pinimg.com/originals/64/b4/30/64b4300480fbb6a2b6fdf51180f25b5f.jpg" width="400px" height="250px"> </td>
              <td><img src="https://i.pinimg.com/originals/30/61/7c/30617c6c5912d32e1b6744ede63bfde2.jpg" width="250px" height="250px"> </td>
              <td><img src="https://i.pinimg.com/originals/73/c6/af/73c6af2244005fd9adee1f73a3300818.jpg"  width="400px" height="250px"></td>
              <td><img src="https://i.pinimg.com/originals/d7/44/5b/d7445ba37af7a778ba56142d3e7074aa.jpg"  width="275px" height="230px"></td>  
              </tr>      
              
              <div class="box">
                <div class="card-body">
                  <h5 class="card-title">Hewan Laut</h5>
                </div>
                
              <tr>
              <div>
              <td><img src="https://i.pinimg.com/originals/44/71/5c/44715cce02bfe446778c0c680d489acb.jpg" width="300px" height="200px"> </td>
              <td><img src="https://i.pinimg.com/originals/c1/11/8a/c1118ad6b8e03c126a834bc7313910c0.jpg"  width="300px" height="200px"> </td>
              <td><img src="https://i.pinimg.com/originals/1c/16/13/1c161379a08e31f18511b975efb8e872.jpg"  width="300px" height="200px"> </td>   
              <td><img src="https://i.pinimg.com/originals/18/bf/04/18bf043273e1fbb5b0cbaf1db47c006c.jpg"  width="300px" height="200px"> </td>
              <td><img src="https://i.pinimg.com/originals/11/99/35/119935a3006b41027fed79bd17785341.jpg"  width="300px" height="250px"> </td>                                              

              <div class="box">
                <div class="card-body">
                  <h5 class="card-title">Macam-Macam Burung</h5>
                </div>

                <tr>
                  <div>
                  <td><img src="https://i.pinimg.com/originals/3a/78/04/3a78049dcc1ec9dc7bd5c22a2185ea63.jpg"  width="250px" height="200px"> </td>
                  <td><img src="https://i.pinimg.com/originals/65/f1/8f/65f18f92a5dbfdd2dcc3ad74d0de1319.jpg"  width="250px" height="200px"> </td>
                  <td><img src="https://i.pinimg.com/originals/e5/7c/d4/e57cd489ecf9480d8270ad904d706891.jpg"  width="250px" height="200px"></td>
                  <td><img src="https://i.pinimg.com/originals/d6/f5/ca/d6f5caffe9e968714751f03c6b898cd2.jpg"  width="250px" height="200px"></td>
                  <td><img src="https://i.pinimg.com/originals/fd/f0/87/fdf0876166ddd1ecd3b478a2898dd880.jpg" width="400px" height="250px"> </td>
                </tr> 
        </div>
        </div>
</section>
<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>