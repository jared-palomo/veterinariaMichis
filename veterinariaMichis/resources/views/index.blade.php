@extends('layouts.vistapadre')

@section('contenidoprincipal')
<div class="row container-fluid d-flex justify-content-center">
    <div class="col-md-6 mt-2">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Protegemos a tus seres queridos</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/pet3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/pet4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/pet5.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/pet6.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-5 mt-2 ml-5 d-flex align-items-center">
        <div class="bg-dark rounded-lg shadow-lg p-5">
            <h4 class="card-title text-md-center text-white">Agenda una cita para tu mascota:</h4>
            <p class="card-text d-flex justify-content-center">
                <a href="/citas" class="btn btn-lg btn-success shadow px-5">Agendar Cita</a>
            </p>
        </div>
    </div>
</div>
@endsection