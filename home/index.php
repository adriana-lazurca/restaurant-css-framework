<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-2">

        <?php include '../navigation/navbar.php'; ?>

        <div class="row">
            <!-- Jumbotron -->
            <div class="col-12 text-center">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <img src="./logo2.png" class="img-fluid max-width: 100%" alt="logo">
                        <p class="lead">Eating at our place it's so cozy, you feel like you're having a breakfast in
                            bed...</p>
                        <img src="./breakfast2.jpg" class="img-fluid max-width: 100% rounded-top" alt="breakfast">

                        <a class="btn btn btn-danger mt-2" href="../menu/menu.html" role="button">
                            Check our menu
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- News and events -->
            <div class="col-12 col-sm-6 mt-3">
                <p class="text-red">News</p>
                <ul class="list-group">
                    <a href="#">
                        <li class="list-group-item list-group-item-danger">Our special panckackes are back!!!</li>
                    </a>
                    <a href="#">
                        <li class="list-group-item list-group-item-danger">Want to check what is new on our menu? Let us
                            surprise you...</li>
                    </a>
                    <a href="#">
                        <li class="list-group-item list-group-item-danger">Our restaurant in #top10 again!</li>
                    </a>

                </ul>
            </div>

            <div class="col-12 col-sm-6 mt-3">
                <p class="text-red">Events</p>
                <ul class="list-group">
                    <a href="#">
                        <li class="list-group-item list-group-item-danger">Join our musical morning this Sunday!</li>
                    </a>
                    <a href="#">
                        <li class="list-group-item list-group-item-danger">Brunch "all you can eat" every Saturday</li>
                    </a>

                </ul>
            </div>
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>