<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="container mt-2">

        <?php include 'navbar.php'; ?>

        <div class="row">
            <div class="col-10 col-offset-2 mt-5 mb-5 text-center">
                <h5>Do you have a suggestion? Let us know</h5>
            </div>
        </div>


        <!-- Form -->
        <div class="row">
            <div class="col-12 col-md-8 col-md-offset-2 mx-auto">
                <form action="" method="post">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">First name</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last name</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <!-- Dropdown -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select a subject</label>
                        <select class="form-control" name="subject" required>
                            <option value="">Select a subject</option>
                            <option>I have a suggestion</option>
                            <option>I have a complain</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <!-- Text -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comments</label>
                        <textarea class="form-control" name="message" rows="3" required></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-outline-danger btn-block">
                            <i class="fa fa-paper-plane"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <?php include 'footer.php'; ?>
    </div>

    <?php
    // DB CONNECTION
    try {
        $dataBase = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }

    // INSERT DATA IN DB
    if (isset($_POST)) {
        $result = $dataBase->prepare('INSERT INTO reviews (`Review_Date`, `User_Name`, `User_Email`, `Message`) VALUES(?, ?, ?, ?)');
        $userName = isset($_POST['firstName']) . " " . isset($_POST['lastName']);

        $result->execute(array(date("Y-m-d"), $userName, isset($_POST['email']), isset($_POST['message'])));
        $result->closeCursor();
    }


    ?>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>