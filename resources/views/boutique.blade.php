@extends('master')
@section('title', 'Boutique')

@section('content')
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Venez</span>
                        <span class="section-heading-lower">Nous sommes ouverts</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Dimanche
                            <span class="ms-auto">Fermé</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Lundi
                            <span class="ms-auto">7:00 à 20:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Mardi
                            <span class="ms-auto">7:00 à 20:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Mercredi
                            <span class="ms-auto">7:00 à 20:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Jeudi
                            <span class="ms-auto">7:00 à 20:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Vendredi
                            <span class="ms-auto">7:00 à 20:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Samedi
                            <span class="ms-auto">9:00 à 17:00</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>5485 rue Saint-Urbain</strong>
                            <br />
                            Montréal (Québec)
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Nous joindre par téléphone</em></small>
                        <br />
                        (450) 648-8468
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')