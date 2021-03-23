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

        <div class="row">
            <!-- Header and navigation -->
            <div class="col-12">
                <header>
                    <nav class="navbar navbar-expand-sm navbar-light bg-red">
                        <!-- <a class="navbar-brand" href="#"></a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav nav-text">
                                <li class="nav-item">
                                    <a class="nav-link" href="../home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../menu/menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../gallery/gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../location/location.html">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../contact/contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-10 col-offset-2 mt-5 mb-5 text-center">
                <h5>What people think about us?</h5>
            </div>
        </div>

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
                //echo '<p><strong>' . htmlspecialchars($data['User_Email']) . '</strong> : ' . htmlspecialchars($data['Message']) . '</p>';
                //$userName = isset($_POST['firstName']) . " " . isset($_POST['lastName']);
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

    <?php
    $response->closeCursor();
    $dataBase = null;
    ?>
</body>

</html>