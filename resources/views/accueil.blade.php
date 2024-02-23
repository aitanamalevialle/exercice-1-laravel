@extends('master')
@section('title', 'Accueil')

@section('content')
<section class="page-section clearfix">
<div class="container">
    <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/magasin.jpg" alt="plantes" />
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Nature vivante</span>
                <span class="section-heading-lower">À cultiver</span>
            </h2>
            <p class="mb-3">Venez découvrir notre collection exclusive de plantes provenant du monde entier. Une fois que vous les accueillez, nos plantes deviendront une source de bonheur dans votre quotidien, une véritable invitation à cultiver votre propre paradis vert.</p>
        </div>
    </div>
</div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="cta-inner bg-faded rounded">
                <h2 class="section-heading mb-4">
                        <span class="section-heading-lower">Contact</span>
                </h2>
                @isset($data)
                <p><strong>Nom :</strong> {{ $data->name }}</p>
                <p><strong>Courriel :</strong> {{ $data->email }}</p>
                <p><strong>Téléphone :</strong> {{ $data->phone }}</p>
                <p><strong>Message :</strong> {{ $data->message }}</p>
                @else
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input class="form-control form-control-sm mb-2" name="name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Courriel</label>
                        <input class="form-control form-control-sm mb-2" name="email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input class="form-control form-control-sm mb-2" name="phone" type="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message"  class="form-control form-control-sm mb-4"id="message" rows="4" required></textarea>
                    </div>
                    <button class="btn btn-primary text-uppercase" type="submit">Envoyer</button>
                </form>
                @endisset
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')