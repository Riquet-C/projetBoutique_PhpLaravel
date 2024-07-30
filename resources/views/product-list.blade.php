<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>{{ $message }}</h1>

<div class="container d-flex justify-content-around">
    <div class="card marg" style="width: 18rem;">
        <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nom du produit</h5>
            <p class="card-text">Prix HT: 1500 €</p>
            <p class="card-text text-decoration-line-through">Prix: 20000 €</p>
            <p class="card-text">Réduction: 10%</p>
            <p class="card-text">Nouveau Prix: 50000 €</p>
            <p class="card-text">Poids: 5000 g</p>

            <form action="#" method="POST">
                <label for="quantity">Quantité</label>
                <input type=number name="quantity" min="0" max="100" step="1" value="0"> *
                <input style="background-color:powderblue; color:black" type="submit" value="Ajouter au Panier">
                <input type="hidden" name="categorie" value="#">
                <input type="hidden" name="productName" value="#">
            </form>
        </div>
    </div>
</div>

<h6 class="mb-0"><a href="{{url('/cart') }} "class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Ajouter au panier</a></h6>

<h6 class="mb-0"><a href="{{url('/product/{id}') }} "class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Fiche produit</a></h6>

@include ('components.footer')

</body>
</html>
