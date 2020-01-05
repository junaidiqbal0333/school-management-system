<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classes_form</title>
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

    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" method="POST" action="add_classes.php">
                    <span class="contact3-form-title">
                         Add Classes
                    </span>
                     <div class="container-contact3-form-btn">
                        <button class="contact3-form-btn">
                            Submit
                        </button>
                    </div>
                   

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="class_name" placeholder="class Name:">
                        <span class="focus-input3"></span>
                    </div>


                     <select class="contact3-form validate-form " style="width: 150px;" name="department">

                      <!-- fetching all data -->
                         <?php 
          $con=mysqli_connect('localhost','root','','school_ms');
          $qry="SELECT * FROM `department`";
          $run=mysqli_query($con,$qry);
          $data=mysqli_num_rows($run);
          if($data !=0)
          {

          ?>
                       

                           <option>Select Department</option>
                                             <?php  
                        while($result=mysqli_fetch_assoc($run))
                        {
                   ?>
                           <option value="<?php echo $result['department_name']; ?>"><?php echo $result['department_name']; ?></option>
                            <?php 
                          }
                      }
                            ?>


                            <!--end fetching all data -->

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
