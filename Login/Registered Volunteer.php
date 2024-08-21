<?php

require('../dbconn.php');

$page_title = "Registered Volunteer";
$page_name = "Registered Volunteer";

$sidebar_btn_table_active = "active";
require('./partials/sidebar.php');
require('./partials/nav.php');

$query = "SELECT * From volunteer_registration";
if(!$result = mysqli_query($conn , $query)){

}

?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Registered Volunteer</h4>
                <p class="card-category">Volunteer Information</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <!-- <th></th> -->
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['v_id'] ?></td>
                            <td><?= $row['v_full_name'] ?></td>
                            <td><?= $row['v_email'] ?></td>
                            <td><?= $row['v_verification_status'] ?></td>
                            <td>
                                <a href="#" class="btn btn-primary mx-1">Edit</a>
                                <a href="#" class="btn btn-danger mx-1">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <?php
    require('./partials/footer.php');
    ?>