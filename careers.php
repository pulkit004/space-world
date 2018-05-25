<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Careers | Space World</title>
    <?php 
      include("favicon.html");
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/careers.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    
  </head>
  <body>

    <?php
      include("navbar.html");
    ?>
    <div class="jumbotron jumbotron-fluid text-center careersCover">
      <div class="container">
       <h1 class="display-3 text-center mb-5">Careers</h1>
        <p>
          Work where you’re inspired to explore your passions, where your talents are nurtured and cultivated. Innovate with leading-edge technologies on some of the coolest projects you can imagine. And get the tools you need to keep learning and growing so you stay continually ahead of the game while making a difference in the world.
        </p>
      </div>
    </div>
      
    <div class="jumbotron jumbotron-fluid careersContent">
      <div class="container">
      
        <div id="accordion" role="tablist">
          <div class="card mb-5">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-arrow-circle-down fa-fw" aria-hidden="true"></i>Sales
                </a>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>Apply by sending us your resume at <span><a href="mailto: career@spaceworld.in?subject=Sales Application">career@spaceworld.in</a></span> and be a part of our team.</p>
              </div>
            </div>
          </div>
          <div class="card mb-5">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-arrow-circle-down fa-fw" aria-hidden="true"></i>Acquisition
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <p>Apply by sending us your resume at <span><a href="mailto: career@spaceworld.in?subject=Acquisition Application">career@spaceworld.in</a></span> and be a part of our team.</p>
              </div>
            </div>
          </div>
          <div class="card mb-5">
            <div class="card-header" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-arrow-circle-down fa-fw" aria-hidden="true"></i>Deployment
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                 <p>Apply by sending us your resume at <span><a href="mailto: career@spaceworld.in?subject=Deployment Application">career@spaceworld.in</a></span> and be a part of our team.</p>
              </div>
            </div>
          </div>

          <div class="card mb-5">
            <div class="card-header" role="tab" id="headingFour">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="fa fa-arrow-circle-down fa-fw" aria-hidden="true"></i>Plant (Production/Quality)
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                 <p>Apply by sending us your resume at <span><a href="mailto: career@spaceworld.in?subject=Plant Application">career@spaceworld.in</a></span> and be a part of our team.</p>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>









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