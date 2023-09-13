<?php
    $result="";
    if(isset($_POST['submit'])){
        $temperature = $_POST['temperature'];

        if ($temperature <= 0) {
            $result="<p>It's freezing!</p>";
        } elseif ($temperature <= 15) {
            $result= "<p>It's cool.</p>";
        } else {
            $result= "<p>It's warm.</p>";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="col-md-4 mx-auto mt-5">
  <h3 class="text-center fw-light text-uppercase" >Weather Report</h3>
  <form action="" method="POST">
        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="temperature" required value="" class="form-control mt-3" placeholder="Please Enter Temperature:">
        </div>
              
        </div>
        <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        
        <h4> <?php echo $result; ?></h4>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
