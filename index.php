<?php $title="crud-operation" ?>

<?php
    include("classes/User.php");
    $u1 = new User();


    if(isset($_POST['add_user'])){
        // print_r($_POST);
        $data = $_POST;
        $u1->add_user($data);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
</head>
  <body>
    <!-- <h1 class="text-center text-primary lead"><?php echo $title ?></h1> -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="bg-primary py-4 text-center display-2 text-light">CRUD Operation</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <!-- form-start -->
                <form action="" method="POST" class="shadow p-4">
                    <h3 class="text-danger display-5 text-center mb-3">User Input</h3>
                    <div class="form-group mb-3">
                        <input type="text" name="name" id="" placeholder="Enter your name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" id="" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" id="" placeholder="Enter your password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" name="add_user" value="Add User" id="" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <!-- table here -->
                <table class="table table-striped">
                    <tr>
                        <th>#sl-no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>