<div class="mb-4">
    <h5>We want to know you...</h5>
</div>
<form action="" method="post">
    <!-- Name -->
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <!-- Place -->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Where did you visit us?</label>
        <select class="form-control" name="place" required>
            <option value="">Select a city</option>
            <option>Brussels</option>
            <option>Liège</option>
        </select>
    </div>

    <!-- Name -->
    <div class="form-group">
        <label for="exampleFormControlInput1">And when?</label>
        <input type="date" class="form-control" name="date" required>
    </div>

    <!-- Text -->
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Comment</label>
        <textarea class="form-control" name="message" rows="3" ></textarea>
    </div>

    <!-- Submit -->
    <div class="col-auto my-1">
        <button type="submit" class="btn btn-outline-danger btn-block">
            <i class="fa fa-paper-plane"></i> Submit
        </button>
    </div>
</form>

<!-- DB CONNECTION -->
<?php include '../DB/dbConnection.php'; ?>