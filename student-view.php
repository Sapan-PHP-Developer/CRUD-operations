<?php
require 'dbconn.php';
?>

<?php include('./assets/header.php'); ?>

<div class="container mt-3">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>STUDENT VIEW DETAILS <a href="index.php" class="btn btn-danger float-end">BACK</a> </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = 'SELECT * FROM students WHERE id=' . $student_id;
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                    ?>

                    <form action="code.php" method="post">
                        <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                        <div class="mb-3">
                            <label for="name">Student Name</label>
                            <p class="form-control"><?= $student['name']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="email">Student Email</label>
                            <p class="form-control"><?= $student['email']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="phone">Student Phone</label>
                            <p class="form-control"><?= $student['phone']; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="course">Student Course</label>
                            <p class="form-control"><?= $student['course']; ?></p>
                        </div>
                    </form>
                    <?php

                        } else {
                            echo "<h4> No Such ID Found </h4>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./assets/footer.php'); ?>