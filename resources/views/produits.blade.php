@extends('master')
@section('title', 'Produits')

@section('content')
<section class="page-section">
<div class="container">
    <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ms-auto rounded">
                <h2 class="section-heading mb-0">
                    <span class="section-heading-lower">Plantes</span>
                </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/plante.jpg" alt="..." />
        <div class="product-item-description d-flex me-auto">
            <div class="bg-faded p-5 rounded"><p class="mb-0">Nous sommes fiers de notre engagement envers les plantes, et cela se reflète dans chaque sélection que vous faites chez nous. Chaque plante que vous choisissez est une garantie d'une expérience exceptionnelle. Que ce soit une variété de fleurs exotiques, des herbes aromatiques savamment cultivées, ou simplement des plantes d'intérieur soigneusement choisies, chaque achat est une invitation à revenir pour explorer davantage la diversité végétale que nous avons à offrir.</p></div>
        </div>
    </div>
</div>
</section>
<section class="page-section">
<div class="container">
    <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex me-auto rounded">
                <h2 class="section-heading mb-0">
                    <span class="section-heading-lower">Pots</span>
                </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/pot.jpg" alt="..." />
        <div class="product-item-description d-flex ms-auto">
            <div class="bg-faded p-5 rounded"><p class="mb-0">Notre gamme de pots pour plantes saura répondre à toutes vos envies de jardinage intérieur.   Fabriqués à partir de matériaux durables, nos pots offrent non seulement un support robuste pour vos plantes, mais ajoutent également une touche élégante à votre décoration intérieure. Optez pour la qualité et l'élégance avec nos pots soigneusement sélectionnés pour accompagner la croissance et la beauté de vos végétaux préférés.</p></div>
        </div>
    </div>
</div>
</section>
<section class="page-section">
<div class="container">
    <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ms-auto rounded">
                <h2 class="section-heading mb-0">
                    <span class="section-heading-lower">Accessoires</span>
                </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/accessoires.jpg" alt="..." />
        <div class="product-item-description d-flex me-auto">
            <div class="bg-faded p-5 rounded"><p class="mb-0">Lorsque vous nous rendez visite, vous découvrirez toujours de nouveaux outils provenant du monde entier, principalement des régions d'Amérique centrale et du Sud. Nous proposons nos accessoires en quantités allant des plus petites aux plus grandes pour répondre à vos besoins. N'hésitez pas à nous rendre visite en personne pour plus de détails.</p></div>
        </div>
    </div>
</div>
</section>
@endsection('content')