<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="location.css">
</head>

<body>
    <div class="container mt-2">

        <?php include '../navigation/navbar.php'; ?>

        <!-- Logo -->
        <div class="row">
            <div class="col-12">
                <img src="../location/logo3.png" class="img-fluid max-width: 100%" alt="logo">
            </div>
        </div>

        <!-- Addresses -->
        <div class="row">
            <div class="col-12 col-sm-6 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Bruxelles</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Monday – Sunday</h6>
                        <h6 class="card-subtitle mb-2 text-muted">9:00 AM – 6:00 PM</h6>
                        <p class="card-text">Rue Auguste Orts 9, 1000</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 mt-4">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="auto" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Rue%20Auguste%20Orts%209&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Liège</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Monday – Saturday</h6>
                        <h6 class="card-subtitle mb-2 text-muted">10:00 AM – 6:00 PM</h6>
                        <p class="card-text">Rue des Carmes 10, 4000</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-4">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="auto" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Rue%20des%20Carmes%2010,%204000&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
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