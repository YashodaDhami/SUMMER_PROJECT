<?php include('../partials/header.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $reports = $_POST['reports'];

    $sql = "INSERT INTO patient SET
            name='$name',
            age='$age',
            address='$address',
            phone_number='$phone_number'
            reports='$reports',
            ";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($res) {
        $_SESSION['add'] = '<div class="alert alert-success">
        <strong>Success!</strong> Patient Added Successfully
      </div>';
        header("location:" . SITEURL . "admin/patient.php");
    } else {
        $_SESSION['add'] = '<div class="alert alert-danger">
        <strong>Success!</strong> Failed to add Patient.
      </div>';
        header("location:" . SITEURL . "admin/add-patient.php");

        die();
    }
}
?>
<form method="POST">
    <div class="container m-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name" placeholder="Enter Your Name">
            <div id="emailHelp" class="form-text"> </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="age" class="form-control" id="exampleInputAge" aria-describedby="emailHelp" placeholder="Enter your age." name="age">
                <div id="ageHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="address" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" placeholder="Enter your Address" name="address">
                <div id="addressHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Reports</label>
                <input type="number" class="form-control" id="report" placeholder="Enter your disease name." name="report">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
</form>