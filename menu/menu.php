<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="container mt-2">

        <?php include '../navigation/navbar.php'; ?>

        <!-- Menu -->
        <div class="row">
            <ul class="nav">

                <li class="list-group-item d-flex align-items-center col-sm-6 col-lg-3 bg-transparent">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="./food/pancackes.jpg" alt="pancackes">
                        <div class="card-body display-badge">
                            <h5 class="card-title pl-2">Delicious panckackes</h5>
                            <div class="badge badge-danger menu-badge">Back</div>
                        </div>
                    </div>

                </li>

                <li class="list-group-item d-flex align-items-center col-sm-6 col-lg-3 bg-transparent">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="./food/oatmeal-fruits.jpg" alt="oatmeal">
                        <div class="card-body display-badge">
                            <h5 class="card-title pl-2">Oatmeal with fruits</h5>
                            <div class="badge badge-danger menu-badge">Special</div>
                        </div>

                    </div>
                </li>

                <li class="list-group-item d-flex align-items-center col-sm-6 col-lg-3 bg-transparent">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="./food/croissant.jpg" alt="croissant">
                        <div class="card-body display-badge bg-transparent;">
                            <h5 class="card-title pl-2">Croissants - our classic</h5>
                            <div class="badge badge-danger menu-badge">Classic</div>
                        </div>
                    </div>

                </li>

                <li class="list-group-item d-flex align-items-center col-sm-6 col-lg-3 bg-transparent mb-3">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="./food/brownies-nuts.jpg" alt="brownies">
                        <div class="card-body display-badge">
                            <h5 class="card-title pl-2">Brownies with nuts</h5>
                            <div class="badge badge-danger menu-badge">New</div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>