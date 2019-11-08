<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
        
    
<div class="container">
    <div class="row">
    <div class="col-1">    
            <a href="{{route('users.index')}}" ><img src="https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/194_Laravel-512.png" width="100%" height="80%"></a>
    </div>
    <div class="col-11">
            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{route('users.index')}}">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Cruds</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{route('users.index')}}">User</a>
                          <a class="dropdown-item" href="{{route('boutique.index')}}">Boutique</a>
                          <a class="dropdown-item" href="{{route('categoria.index')}}">Categorias</a>
                          <a class="dropdown-item" href="{{route('gallery.index')}}">Gallerias</a>
                          <a class="dropdown-item" href="{{route('inventario.index')}}">Inventarios</a>
                          <a class="dropdown-item" href="{{route('likedislike.index')}}">Likes&Dislikes</a>
                          <a class="dropdown-item" href="{{route('rates.index')}}">Rates</a>
                          <a class="dropdown-item" href="{{route('talla.index')}}">Tallas</a>
                          <a class="dropdown-item" href="{{route('tallas_item.index')}}">Tallas de Items</a>
                          <a class="dropdown-item" href="{{route('vista.index')}}">Vistas</a>
                        </div>
                      </li>
                     
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Apis</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="./api/getUser">User</a>
                          <a class="dropdown-item" href="./api/getBoutique">Boutique</a>
                          <a class="dropdown-item" href="./api/getGallery">Gallery</a>
                        </div>
                      </li>                     
                    </ul>
                  </nav>
    </div>
    </div><br><hr>
</div>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>