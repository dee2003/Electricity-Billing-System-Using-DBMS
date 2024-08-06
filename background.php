<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, title, and other head elements -->
    <style>
        #background-container {
            /* Set background image */
            background-image: url('D:\downloads\electricity-pictures-2uw8vwbcph0ouchv.jpg');
            /* Set background size */
            background-size: cover;
            /* Set background attachment */
            background-attachment: fixed;
            /* Add any additional styles */
            /* For example: */
            /* background-position: center; */
            /* background-repeat: no-repeat; */
        }
    </style>
</head>
<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <!-- Navbar content -->
    </div>

    <!-- Background container with your existing content -->
    <div id="background-container">
        <div class="darkhearderwrap">
            <!-- Your existing content, such as headerwrap, signup form, etc. -->
            <!-- Make sure to include PHP code if necessary -->
        </div>
    </div>

    <!-- Footer and JavaScript files -->
    <?php 
    require_once("footer.php");
    ?>

    <!--=======================JS=========================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery Version 1.11.0 -->

    <script src="assets/js/custom.js"></script>
    <script>

    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }  </script> 
    
</body>
</html>
