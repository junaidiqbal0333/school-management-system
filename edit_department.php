<?php include('includes/header.php');
include('includes/navbar.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit_department</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <?php
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','school_ms');
    $qry="SELECT * FROM department WHERE id='$id'";
    $run=mysqli_query($con,$qry);
    $data=mysqli_fetch_assoc($run);

    ?>

    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" action="update_department.php" method="POST">
                    <span class="contact3-form-title">
                         Edit Department
                    </span>

                   

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="department_name" placeholder="Name:" value="<?php echo $data['department_name']; ?>">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" name="mail_alias" placeholder="mail:" value="<?php echo $data['mail_alias']; ?>">
                        <span class="focus-input3"></span>
                    </div>
                     <div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input3" type="text" name="department_head" placeholder="Email:" value="<?php echo $data['department_head']; ?>">
                        <span class="focus-input3"></span>
                    </div>
                     

                      <div class="">
                        <input class="input3" type="hidden" name="id" value="<?php echo $id; ?>">
                        <span class="focus-input3"></span>
                    </div>


                    <div class="container-contact3-form-btn">
                        <button  class="contact3-form-btn" type="submit" name="submit" value="<?php  echo $id; ?>">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
<?php include('includes/script.php');
 ?>