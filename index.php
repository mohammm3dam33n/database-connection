<?php
include './template/header.php';



?>

    <div class="container">
      <div class="row">
            <div class="col-6 mx-auto my-5">
                <h2 class="text-center">Signup Form</h2>
                <form action="./handlers/insert.php" method="POST" class="border p-5">
                    <div class="form-group">
                        <label for="username" class="my-2">username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="my-2">password</label>
                        <input type="password"  name="password" id="password" class="form-control">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-2"> Sign Up </button>
                </form>
            </div>
        </div>
    </div>



<?php include './template/footer.php';?>


