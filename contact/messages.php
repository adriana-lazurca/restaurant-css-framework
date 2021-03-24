<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php
    // Connect to DB
    try {
        $dataBase = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }

    try {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $deleteRow = "DELETE FROM reviews WHERE id=$id";
            $dataBase->exec($deleteRow);

            header("Refresh:0; url=messages.php");
        }
    } catch (PDOException $e) {
        echo $deleteRow . "\n" . $e->getMessage();
    }

    //Retrieve last messages
    $response = $dataBase->query('SELECT Id, Review_Date, User_Name, User_Email, Message FROM reviews ORDER BY ID DESC LIMIT 0, 10');
    ?>

    <div class="container mt-2">

        <?php include 'navbar.php'; ?>

        <div class="row">
            <div class="col-10 col-offset-2 mt-5 mb-5 text-center">
                <h5>What people think about us?</h5>
            </div>
        </div>

        <!-- SWITCH TABS -->
        <nav class="pb-4">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MESSAGES</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">GUEST BOOK</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">GALLERY</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- CREATE TABLE -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <?php
                    // Display messages
                    while ($data = $response->fetch()) {

                    ?>
                        <tbody>
                            <tr>
                                <td> <?php echo ($data['Review_Date']) ?> </td>
                                <td> <?php echo ($data['User_Name']) ?> </td>
                                <td> <?php echo ($data['User_Email']) ?> </td>
                                <td> <?php echo ($data['Message']) ?> </td>
                                <td>
                                    <a href="messages.php?id=<?php echo ($data['Id']) ?>">
                                        <i class='fa fa-trash'></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>

                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
        </div>

        <?php include 'footer.php'; ?>

    </div>

    <?php
    $response->closeCursor();
    $dataBase = null;
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>