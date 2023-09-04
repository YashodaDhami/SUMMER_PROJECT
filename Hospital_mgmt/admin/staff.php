<?php include('../partials/header.php');
?>
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add']; //displaying session
    unset($_SESSION['add']); //removing session
}
?>

<div class="container m-5">

    <button type="button" class="btn btn-primary">
        <a class="text-white" style="text-decoration: none;" href="add-staff.php"><strong>Add Staff</strong> </a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Staff name</th>
                <th scope="col">Role</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM staff";
            $res = mysqli_query($con, $sql) or die(mysqli_error($con));

            if ($res) {
                $count = mysqli_num_rows($res);
                if ($count) {
                    $sn = 1;
                    while ($rows = mysqli_fetch_assoc($res)) {                            // function to show the data 
                        // function to show the data 

                        $id = $rows['ID'];
                        $name = $rows['Name'];
                        $role = $rows['Role'];
                        $address = $rows['Address'];
                        $phone_number = $rows['Phone_Number'];

            ?>
                        <tr>
                            <th scope="row"><?php echo $sn; ?></th>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $role; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $phone_number; ?></td>
                        </tr>
            <?php $sn++;
                    }
                }
            }
            ?>
        </tbody>
    </table>


</div>