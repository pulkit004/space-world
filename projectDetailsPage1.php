<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/projectDetails.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    
  </head>
  <body>

    <?php
      include("navbar.html");
    ?>
    <div class="jumbotron jumbotron-fluid text-center projectDetailsCover">
      <div class="container">
       <h1 class="display-3 text-center mb-5">Project Morgan Stanley</h1>
        <p>
          Bushwick meh Blue Bottle pork belly mustache skateboard 3 wolf moon. Actually beard single-origin coffee, twee 90's PBR Echo Park sartorial try-hard freegan Portland ennui. Selvage jean shorts 90's, Vice American Apparel try-hard food truck Shoreditch fap lomo Wes Anderson. Art party Thundercats High Life Tumblr, sartorial vinyl deep v fixie McSweeney's fap tousled Intelligentsia mumblecore.
        </p>
      </div>
    </div>
      
    <div class="jumbotron jumbotron-fluid projectDetailsContent">
      <div class="container">
        <h1 class="display-4 text-center mb-5">Problem Statement</h1>
        <p>Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis nisl, molestie ut ipsum et, suscipit vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent aliquet quam et libero dictum, vitae dignissim leo eleifend. In in turpis turpis. Quisque justo turpis, vestibulum non enim nec, tempor mollis mi. Sed vel tristique quam.</p>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid text-center solutions">
      <div class="container-fluid">
        <h1 class="display-4 mb-5">Solution</h1>
        <div class="row justify-content-around align-items-center blue-background">
          <div class="col-md-8 col-lg-8 col-xs-6 col-sm-6">
            <p>Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis nisl, molestie ut ipsum et, suscipit vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent aliquet quam et libero dictum, vitae dignissim leo eleifend. In in turpis turpis. Quisque justo turpis, vestibulum non enim nec, tempor mollis mi. Sed vel tristique quam.</p>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-6 col-sm-6">
            <img src="images/Assets/t4.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>   
        <div class="row justify-content-around align-items-center blue-background">
          <div class="col-md-12 col-lg-12 col-xs-6 col-sm-6">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/cover.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/aboutUs.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/cover.png" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          </div>
          
        </div>   
      </div>
    </div>



   <!--  <div class="jumbotron jumbotron-fluid text-center projectCarousel">
      <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/cover.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/aboutUs.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/cover.png" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <p class="small text-white" style="line-height: 1.5rem;">Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque. </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div> -->







    <?php
      include("footer.html");
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/51d62afe4c.js"></script>

    
    <script type="text/javascript">
      $(window).scroll(function() {
        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
        {
          $('.opaque-navbar').addClass('opaque');
        } else {
          $('.opaque-navbar').removeClass('opaque');
        }
      });

    
    </script>
  
  </body>
</html>