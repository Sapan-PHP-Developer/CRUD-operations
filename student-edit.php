<?php
session_start();
require 'dbconn.php';
?>

<?php include('./assets/header.php'); ?>

<div class="container mt-3">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>STUDENT EDIT <a href="index.php" class="btn btn-danger float-end">BACK</a> </h4>
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
                            <input type="text" name="name" id="name" value="<?= $student['name']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Student Email</label>
                            <input type="email" name="email" value="<?= $student['email']; ?>" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Student Phone</label>
                            <input type="text" name="phone" value="<?= $student['phone']; ?>" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="course">Student Course</label>
                            <input type="text" value="<?= $student['course']; ?>" name="course" id="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="update_student">Update Student</button>
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