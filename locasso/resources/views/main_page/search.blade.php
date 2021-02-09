@extends('layouts.app') @section('content')

<div class="container-fluid searchpage__formcontainer">
  <div class="container m-auto d-flex justify-content-center">
    <form class="w-100">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="address">Adresse</label>
          <input type="text" class="form-control" id="address" placeholder="Où cherchez-vous ?" />
        </div>
        <div class="form-group col-md-4">
          <label for="from-date">Arrivée</label>
          <input type="date" class="form-control" id="from-date" placeholder="De quand ?" />
        </div>
        <div class="form-group col-md-4">
          <label for="to-date">Départ</label>
          <input type="date" class="form-control" id="to-date" placeholder="A quand ?" />
        </div>
      </div>
      <input type="submit" value="Rechercher" class="btn btn-primary btn-lg w-100">
    </form>
  </div>
</div>

<div class="container-fluid searchpage__searchresults">
  <div class="container m-auto">
    <div class="row">
      <div class="col-md-6">
        <div id="searchresult-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#searchresult-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#searchresult-carousel" data-slide-to="1"></li>
            <li data-target="#searchresult-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://via.placeholder.com/450x400" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://via.placeholder.com/450x400" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://via.placeholder.com/450x400" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#searchresult-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#searchresult-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="d-flex flex-column flex-1">
          <h3 class="h3 mt-4">Nom</h3>
          <small class="text-muted">120m² - Cuisine - Ménage inclus</small>
          <div class="flex-grow-1 d-flex align-items-center">
            <p class="text-base">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,lectus
              magna fringilla urna, porttitor rhoncus dolor purus non enim
            </p>
          </div>
          <div class="d-flex mb-4">
            <div class="flex-grow-1">
              <span class="h5">650€</span>
              <span class="h4">Note</span>
            </div>
            <button class="btn btn-primary">Voir la fiche</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection