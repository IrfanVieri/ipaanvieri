<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">Toko Irfan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item {{ $active === "home" ? "active" : " " }}">
          <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
        </li>
        <li class="nav-item {{ $active === "produk" ? "active" : " " }}">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item {{ $active === "kategori" ? "active" : " " }}">
          <a class="nav-link" href="{{route('home.kategori')}}">Kategori</a>
        </li>
        <li class="nav-item {{ $active === "kontak" ? "active" : " " }}">
          <a class="nav-link" href="{{route ('home.kontak')}}">Kontak</a>
        </li> 
        <li class="nav-item {{ $active === "about" ? "active" : " " }}">
            <a class="nav-link" href="{{route('home.about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class= "nav-link" href="#">Login</a>
      </ul>
    </div>
  </div>
</nav>