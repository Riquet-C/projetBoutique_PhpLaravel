<div class="row mb-4 d-flex justify-content-between align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-2">
        <img
            src="{{$picture}}"
            class="img-fluid rounded-3" alt="Cotton T-shirt">
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <h6 class="text-muted">{{$name}}</h6>
        <h6 class="mb-0">{{$description}}</h6>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
        <input id="nombre" min="0" name="combienDeProduits" value="{{$quantity}}" type="number"
               class="form-control form-control-sm"/>
    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
        <h6 class="mb-0">{{$price}} €</h6>
    </div>
    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
        <a href="{{ route('cart.remove', $id)}}">Supprimer</a>
    </div>
