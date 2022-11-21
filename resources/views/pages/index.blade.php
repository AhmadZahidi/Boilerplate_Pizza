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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap js -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- font-awesome -->
    <script defer src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>

</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid">
            <a class="navbar-brand navbar-nav" href="#index">
                <img src="data:image/png;base64,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"
                    alt="Logo" width="30px" height="24px" class="d-inline-block align-text-top">
                Pizzaria
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#takeaway">Takeaway</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>

                @guest('customer')
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('customerLoginPage') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('customerRegisterPage') }}">Register</a>
                        </li>
                    </ul>
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Setting
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('customerDashboard') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('customerLogout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    {{-- <form action="{{ route('customerLogout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form> --}}
                @endguest

            </div>
        </div>
    </nav>

    <!-- index section -->


    <section id="index">

        <div class="container-fluid">
            <div class="row">
                <div class="index-content col-lg-7">
                    <h1>FRESHLY BAKED PIZZA</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus
                        venenatis, lectus
                        magna
                        fringilla urna, porttitor</p>
                    <a type="button" class="btn btn-primary btn-lg" href="{{ url('/menu') }}">
                        View Menu
                    </a>
                </div>
                <div class="col-lg-5">
                    <img class="index-pizza"
                        src="https://media.istockphoto.com/photos/pepperoni-pizza-picture-id1373129580?b=1&k=20&m=1373129580&s=170667a&w=0&h=jmpmdRG7bQYVj8lToKUblCbIDDA-0YQhtQSA7MPxt-s="
                        height="100%" width="100%">
                </div>
            </div>
        </div>
    </section>

    <!-- Menu section -->
    <section id="menu">
        <h1 class="Menu-title">Menu</h1>
        <div class="row">
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <h5 class="card-title">Pepperoni Pizza</h5>
                    <img src="https://media.istockphoto.com/photos/hand-takes-pizza-picture-id1218105733?b=1&k=20&m=1218105733&s=170667a&w=0&h=p4OpHL3nL2f1spQkrHhxLDcOpyFGQhqzM_htCj2nifo="
                        class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                            sit amet
                            luctus venenatis, lectus magna fringilla urna, porttitor</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title">Island Tuna pizza</h5>
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aXNsYW5kJTIwdHVuYSUyMHBpenphfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                            sit amet
                            luctus venenatis, lectus magna fringilla urna, porttitor</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title">Vegie Pizza</h5>
                    <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGl6emF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                            sit amet
                            luctus venenatis, lectus magna fringilla urna, porttitor</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ url('/menu') }}"><button style="margin:3% 0% 0% 0%;"type="submit" class="btn btn-primary">View
                Menu</button></a>


    </section>

    <!-- Takeaway section -->
    <section id="takeaway">
        <div class="row cols-2">
            <div class="col-8 takeaway-content">
                <h1>In a rush? You’re Lucky. We offer Takeaway on all our Pizza</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                    lectus
                    magna
                    fringilla urna, porttitor</p>
                <button class="btn btn-primary btn-lg" type="button"><i class="fa-brands fa-whatsapp"></i> Whatsapp
                    Us</button>
                <p>Terms and Conditions Applicable</p>
            </div>

            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29udGFjdCUyMHVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    class="takeawayimg">
            </div>
        </div>

    </section>
    <!-- Contact section -->
    <section id="contact">
        <h1 class="h1-contact">Contact</h1>
        <div class="contact-bg">
            <form action="{{ route('store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>
    <!-- Footer -->

    <footer id="footer">
        <i class="social-icon fa-brands fa-twitter"></i>
        <i class="social-icon fa-brands fa-instagram"></i>
        <i class="social-icon fa-brands fa-facebook"></i>

        <p>© Copyright 2022 Pizzaria</p>

        <a href="{{ route('login') }}" style="color:white;text-decoration:none;">
            <p>Admin</p>
        </a>
    </footer>

</body>

</html>
