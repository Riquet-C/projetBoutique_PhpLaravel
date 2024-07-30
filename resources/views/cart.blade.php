<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
<h1>{{ $message }}</h1>

<h6 class="mb-0"><a href="{{url('/product') }} "class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>

@include ('components.footer')

</body>
</html>

