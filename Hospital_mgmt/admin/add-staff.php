<?php include('../partials/header.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];


    $sql = "INSERT INTO staff SET
            name='$name',
            role='$role',
            address='$address',
            phone_number='$phone_number'
            ";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($res) {
        $_SESSION['add'] = '<div class="alert alert-success">
        <strong>Success!</strong> Staff Added Successfully
      </div>';
        header("location:" . SITEURL . "admin/staff.php");
    } else {
        $_SESSION['add'] = '<div class="alert alert-danger">
        <strong>Success!</strong> Failed to add Staff
      </div>';
        header("location:" . SITEURL . "admin/add-staff.php");

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
                <label for="exampleInputPassword1" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option value="">Enter Your Role in Health Post</option>
                    <option value="Heath Assistant">Health Assistant</option>
                    <option value="Anami">Anami</option>
                    <option value="Office Helper">Office Helper</option>
                    <option value="Lab Assistant">Lab Assistant</option>
                    <option value="Sweeper">Sweeper</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="address" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" placeholder="Enter Address" name="address">
                <div id="addressHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter your phone number." name="phone_number">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
</form>