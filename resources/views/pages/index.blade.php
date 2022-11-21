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

    @include('layouts.navbar')

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
