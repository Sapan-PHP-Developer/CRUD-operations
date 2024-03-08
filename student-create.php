<?php
session_start();
?>

<?php include('./assets/header.php'); ?>

<div class="container mt-3">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>STUDENT ADD <a href="index.php" class="btn btn-danger float-end">BACK</a> </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="mb-3">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Student Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Student Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="course">Student Course</label>
                            <input type="text" name="course" id="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="save_student">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./assets/footer.php'); ?>