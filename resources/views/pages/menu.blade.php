<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">

    <!-- bootstrap js -->

    <!-- font-awesome -->
    <script defer src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>

</head>

<body>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-light">

        <a href="{{url()->previous()}}">Back</a>

    </nav>

    <div class="container">
        <div class="row">

            @foreach ($post as $menu)
                <div class="col-4 d-flex justify-content-center addMargin">
                    <div class="card" style="width: 18rem;">
                        <h5 class="card-title">{{ $menu->title }}</h5>
                        <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top">
                        <p class="card-text">{{ $menu->description }}</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="orderButton" class="container-fluid">
            <a href="" class="btn btn-primary">Order</a>
        </div>
    </div>

</body>

</html>
