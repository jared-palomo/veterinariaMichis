@extends('layouts.vistapadre')
@section('contenidoprincipal')
<div class="row mt-3">
    <div class="col-6">
        <h1 class="text-center text-primary bg-dark">Column 1</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">{{$nombre}}</h3>
            </div>
            <div class="card-body">
                <img src="/img/pet2.jpg" class="card-img rounded mx-auto d-block">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   <strong>Doloremque</strong> nulla, quidem perferendis distinctio deleniti
                   ullam accusamus dolor sunt ratione explicabo saepe quod autem. 
                   Earum adipisci culpa reiciendis totam, quasi dicta?</p>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h1 class="text-center text-success bg-dark">Column 2</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Header</h3>
            </div>
            <div class="card-body">
                <img src="/img/pet3.jpg" class="card-img rounded mx-auto d-block">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Laudantium, quae quaerat. Modi veritatis quaerat atque, possimus sint iste dolores unde 
                     tempore vel nostrum velit quos error! <strong>Eveniet maiores</strong> et ipsum.Dolores sequi in, id quia 
                     quas odio, modi eum iste maiores possimus libero maxime a pariatur.</p>
            </div>
        </div>
    </div>
</div>
@endsection