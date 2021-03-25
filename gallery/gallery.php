<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="gallery.css">
</head>

<body>
    <div class="container mt-2">

        <?php include '../navigation/navbar.php'; ?>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="./gallery.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="./gallery2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="./gallery3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="./gallery4.php">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Galerry -->
        <div container-img>
            <div class="row">
                <div class="col-12 col-sm-offset-1 col-sm-10 col-md-4 img-container mb-1 mx-auto">
                    <img src="./gallery/inside2.jpg" alt="inside2">
                </div>
                <div class="col-12 col-sm-offset-1 col-sm-10 col-md-4 img-container mb-1 mx-auto">
                    <img src="./gallery/coffee.jpg" alt="coffee">
                </div>
                <div class="col-12 col-sm-offset-1 col-sm-10 col-md-4 img-container mb-1 mx-auto">
                    <img src="./gallery/croissants.jpg" alt="croissants">
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