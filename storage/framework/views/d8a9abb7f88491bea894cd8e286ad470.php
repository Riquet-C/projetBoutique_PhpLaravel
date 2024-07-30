<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card" style="width: 24rem;">
        <img src="https://www.artmaux.com/305-large_default/t-shirt-noir-neutre.jpg" class="card-img-top" alt="T-shirt noir neutre">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Voici le plus beau t-shirt de France, il est souple et en plus il permet d'attirer un maximum de gens du même genre ou non !</p>
            <p>Prix: 40 €</p>
            <a href="<?php echo e(url('/cart')); ?>" class="btn btn-primary">Ajouter au Panier</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\projetgroupe\boutique-groupe\resources\views/product-details.blade.php ENDPATH**/ ?>