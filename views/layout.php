<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/simatrix/"></base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--  <link rel="shortcut icon" href="home/dist/img/icon.png"> -->

  <title>simatrix</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- 
  <link href="resources/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="resources/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="resources/css/style.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'> -->




</head>

<body>

  <?php require_once('routes.php') ?>


 <!--  <div class="footer-custom">
    <div class="container">


    </div>
  </div> -->









  <script>
    $( "span.menu" ).click(function() {
      $( ".head-nav ul" ).slideToggle(300, function() {
      });
    });
  </script>

  


  <!-- <script src="resources/resources/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>


  <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script type="text/javascript" src="resources/js/jquery.flexisel.js"></script>

  <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

    });

  </script>
  <script type="text/javascript" src="jresources/s/jquery.flexisel.js"></script> -->




</body>

</html>
