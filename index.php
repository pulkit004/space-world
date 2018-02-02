<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Space World is a group of companies engaged in Telecommunication business. Founded in 2007, the group have two companies Space Telling Limited and Space tele infra private limited.">

    <title>Space World | A well known name in the field of RF & Telecom.</title>
    <?php 
      include("favicon.html");
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

  </head>
  <body>

    <?php
      include("navbar.html");
    ?>

    <div class="homepage-hero-module">
      <div class="video-container">
        <div class="filter">
           <div class="jumbotron jumbotron-fluid cover">
              <h1 class="display-3">Providing communication solutions<br/>like never before!</h1>
              <div class="feature-icons">
                <div class="row align-items-start justify-content-start">
                  <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card">
                      <a href="inBuildingSolutions.php" target="_blank">
                        <img src="images/Assets/Archive/Inbuilding.svg" class="img-fluid" >                    
                        <div class="card-body"><p>In Building Solutions</p></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card">
                      <a href="products.php" target="_blank">
                        <img src="images/Assets/Archive/Telecomproducts.svg" class="img-fluid">                     
                        <div class="card-body"><p>Telecom Products</p></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3 mx-4">
                    <div class="card">
                      <a href="products.php" target="_blank">
                        <img src="images/Assets/Archive/Solar.svg" class="img-fluid">                   
                        <div class="card-body"><p>Solar Structures</p></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3 mx-4">
                    <div class="card">
                      <a href="products.php" target="_blank">
                        <img src="images/Assets/Archive/Energy1.svg" class="img-fluid">                     
                        <div class="card-body"><p>Energy</p></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
        </div>
        <video autoplay loop class="fillWidth">
          <source src="covervideo/Ground-Zero/MP4/Ground-Zero.mp4" alt="Cover Image" type="video/mp4" />
          <source src="covervideo/Ground-Zero/WEBM/Ground-Zero.webm" alt="Cover Image" type="video/webm" />
        </video>
        <div class="poster hidden">
          <!-- <img src="covervideo/Ground-Zero/Snapshots/Ground-Zero.jpg" alt="Cover Image"> -->
        </div>
      </div>
    </div>
    
    <!-- Mobile View -->
     
    <div class="jumbotron jumbotron-fluid text-center coverMobCover">
      <div class="container">
       <h1 class="display-3 text-center mb-5">Providing network solutions like never before!</h1>
         <div class="feature-icons-mobile text-center">
          <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="p-1">
              <a href="inBuildingSolutions.php" target="_blank">
                <img src="images/Assets/Archive/Inbuilding.svg" class="img-fluid" >
              </a>
              <a href="inBuildingSolutions.php" target="_blank">
                <div class="card-body"><p>InBuilding Solutions</p></div>
              </a>
            </div>
            <div class="p-1">
              <a href="products.php" target="_blank">
                <img src="images/Assets/Archive/Telecomproducts.svg" class="img-fluid">
              </a>
              <a href="products.php" target="_blank">
                <div class="card-body"><p>Telecom Products</p></div>
              </a>
            </div>
            <div class="p-1">
              <a href="products.php" target="_blank">
                <img src="images/Assets/Archive/Solar.svg" class="img-fluid">
              </a>
              <a href="products.php" target="_blank">
                <div class="card-body"><p>Solar Structures</p></div>
              </a>
            </div>
            <div class="p-1">
              <a href="products.php" target="_blank">
                <img src="images/Assets/Archive/Energy1.svg" class="img-fluid">
              </a>
              <a href="products.php" target="_blank">
                <div class="card-body"><p>Energy</p></div>
              </a>
            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- End -->

    <div class="jumbotron jumbotron-fluid text-center in-building-solution" style="padding-left: 3rem;padding-right: 3rem;">
      <div class="container-fluid">
        <h1 class="display-4">Our Products</h1>
        <div class="row align-items-start justify-content-between">
          <div class="col-md-3 col-lg-3 col-xs-12">
            <div class="d-flex flex-row justify-content-start align-items-center my-4" name="products_heading" id="in_Building_div">
              <div class="p-1 ovalName">
                <div class="in-building-solutions-oval-active"></div>
              </div>
              <div class="p-1 lineName">
                <div class="in-building-solutions-line-active"></div>
              </div>
              <div class="p-1 headingName">
                <div class="in-building-solutions-sub-heading-active text-uppercase">
                  <a>in building solutions</a>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-start align-items-center my-4" name="products_heading" id="telecom_products_div">
              <div class="p-1 ovalName">
                <div class="in-building-solutions-oval-unactive"></div>
              </div>
              <div class="p-1 lineName">
                <div class="in-building-solutions-line-unactive"></div>
              </div>
              <div class="p-1 headingName">
                <div class="in-building-solutions-sub-heading-unactive text-uppercase">
                  <a>telecom products</a>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-start align-items-center my-4 unactive" name="products_heading" id="solar_structure_div">
              <div class="p-1 ovalName">
                <div class="in-building-solutions-oval-unactive"></div>
              </div>
              <div class="p-1 lineName">
                <div class="in-building-solutions-line-unactive"></div>
              </div>
              <div class="p-1 headingName">
                <div class="in-building-solutions-sub-heading-unactive text-uppercase">
                  <a>solar structure</a>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-start align-items-center my-4 unactive" name="products_heading" id="energy_div">
              <div class="p-1 ovalName">
                <div class="in-building-solutions-oval-unactive"></div>
              </div>
              <div class="p-1 lineName">
                <div class="in-building-solutions-line-unactive"></div>
              </div>
              <div class="p-1 headingName">
                <div class="in-building-solutions-sub-heading-unactive text-uppercase">
                  <a>energy</a>
                </div>
              </div>
            </div>
          </div>

          <!-- TransitionC Graphic SVG -->
          <div class="col-md-6 col-lg-6 col-xs-12">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 463 446">
              <defs>
                <style>
                  .cls-1 {
                    fill: #5fb7c5;
                  }

                  .cls-2 {
                    fill: none;
                    stroke: #fff;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  }

                  .cls-3 {
                    fill: #44a1aa;
                  }
                </style>
              </defs>
              <title>services</title>
              <g>
                <g class="icon1">
                  <circle class="cls-1" cx="229" cy="132" r="132"/>
                  <g>
                    <line class="cls-2" x1="156.95" y1="185.74" x2="301.05" y2="185.74"/>
                    <path class="cls-2" d="M176,147.63"/>
                    <path class="cls-2" d="M199.23,147.63"/>
                    <g>
                      <circle class="cls-2" cx="190" cy="101.46" r="5.87"/>
                      <path class="cls-2" d="M171.81,118.72a25.07,25.07,0,0,1-.08-34.42"/>
                      <path class="cls-2" d="M207.47,83.49a25.05,25.05,0,0,1,.51,35.45c-.33.35-.68.68-1,1"/>
                      <path class="cls-2" d="M181.07,113.44a14.93,14.93,0,0,1-3-20.9,15.28,15.28,0,0,1,3-3"/>
                      <path class="cls-2" d="M198.35,89.07a14.93,14.93,0,0,1,.45,24.46"/>
                      <line class="cls-2" x1="212.54" y1="185.74" x2="190" y2="107.33"/>
                      <line class="cls-2" x1="190" y1="107.33" x2="167.33" y2="185.74"/>
                    </g>
                    <rect class="cls-2" x="242.16" y="105.46" width="43.34" height="80.28"/>
                    <path class="cls-2" d="M270.44,96.66c6-6,6.79-15.15,4.13-17.82L252.7,100.71C255.35,103.38,264.39,102.7,270.44,96.66Z"/>
                    <line class="cls-2" x1="262.83" y1="90.53" x2="257.43" y2="85.13"/>
                    <circle class="cls-2" cx="254.83" cy="82.13" r="3.87"/>
                    <polyline class="cls-2" points="278.97 105.46 270.7 96.66 296.31 96.66 296.31 113.46 266.3 113.46"/>
                    <polyline class="cls-2" points="296.31 113.46 296.31 129.6 266.3 129.6"/>
                    <polyline class="cls-2" points="296.31 129.6 296.31 146.54 266.3 146.54"/>
                    <polyline class="cls-2" points="296.31 146.54 296.31 161.74 266.3 161.74"/>
                    <polyline class="cls-2" points="296.31 161.74 296.31 176.81 266.3 176.81"/>
                    <rect class="cls-2" x="260.17" y="111.33" width="6.13" height="3.87"/>
                    <rect class="cls-2" x="260.17" y="127.73" width="6.13" height="3.87"/>
                    <rect class="cls-2" x="260.17" y="144.14" width="6.13" height="3.87"/>
                    <rect class="cls-2" x="260.17" y="159.87" width="6.13" height="3.87"/>
                    <rect class="cls-2" x="260.17" y="175.07" width="6.13" height="3.87"/>
                  </g>
                </g>
                <g class="icon4">
                  <circle class="cls-3" cx="390" cy="300" r="73"/>
                  <g>
                    <line class="cls-2" x1="345.07" y1="334.87" x2="434.93" y2="334.87"/>
                    <rect class="cls-2" x="403.08" y="301.78" width="25.91" height="32.93"/>
                    <g>
                      <rect class="cls-2" x="406.45" y="299.5" width="4.56" height="2.28"/>
                      <rect class="cls-2" x="421.14" y="299.5" width="4.56" height="2.28"/>
                    </g>
                    <polyline class="cls-2" points="373.99 276.2 423.42 276.2 423.42 298.91"/>
                    <line class="cls-2" x1="408.73" y1="276.45" x2="408.73" y2="298.91"/>
                    <g>
                      <line class="cls-2" x1="408.73" y1="305.91" x2="408.73" y2="309.38"/>
                      <line class="cls-2" x1="406.96" y1="307.6" x2="410.42" y2="307.6"/>
                    </g>
                    <line class="cls-2" x1="421.65" y1="307.6" x2="425.11" y2="307.6"/>
                    <g>
                      <polyline class="cls-2" points="416.25 318.93 417.2 312.06 411.57 321.46 415.83 322.04"/>
                      <polyline class="cls-2" points="415.84 322.04 414.89 328.92 420.52 319.52 416.26 318.93"/>
                    </g>
                    <g>
                      <rect class="cls-2" x="350.34" y="278.14" width="30.34" height="56.73"/>
                      <g>
                        <line class="cls-2" x1="363.86" y1="265.13" x2="363.86" y2="274.42"/>
                        <line class="cls-2" x1="367.16" y1="272.28" x2="367.16" y2="274.42"/>
                      </g>
                      <rect class="cls-2" x="357.18" y="274.42" width="16.67" height="3.55"/>
                      <line class="cls-2" x1="357.18" y1="287.68" x2="373.84" y2="287.68"/>
                      <line class="cls-2" x1="357.18" y1="295.71" x2="373.84" y2="295.71"/>
                      <line class="cls-2" x1="357.18" y1="303.74" x2="373.84" y2="303.74"/>
                      <line class="cls-2" x1="357.18" y1="311.76" x2="373.84" y2="311.76"/>
                      <line class="cls-2" x1="357.18" y1="319.79" x2="373.84" y2="319.79"/>
                      <line class="cls-2" x1="357.18" y1="327.82" x2="373.84" y2="327.82"/>
                    </g>
                  </g>
                </g>
                <g class="icon3">
                  <circle class="cls-3" cx="229" cy="373" r="73"/>
                  <g>
                    <line class="cls-2" x1="188.64" y1="408" x2="269.36" y2="408"/>
                    <rect class="cls-2" x="194.89" y="367" width="28.24" height="40.84"/>
                    <rect class="cls-2" x="236.07" y="378.38" width="28.24" height="29.46"/>
                    <g>
                      <circle class="cls-2" cx="250.45" cy="347.56" r="3.28"/>
                      <line class="cls-2" x1="250.46" y1="338" x2="250.46" y2="341.61"/>
                      <line class="cls-2" x1="250.46" y1="353.33" x2="250.43" y2="356.94"/>
                      <g>
                        <line class="cls-2" x1="243.74" y1="340.78" x2="246.31" y2="343.35"/>
                        <line class="cls-2" x1="254.59" y1="351.61" x2="257.14" y2="354.21"/>
                      </g>
                      <g>
                        <line class="cls-2" x1="240.99" y1="347.47" x2="244.6" y2="347.47"/>
                        <line class="cls-2" x1="256.32" y1="347.47" x2="259.93" y2="347.5"/>
                      </g>
                      <g>
                        <line class="cls-2" x1="243.74" y1="354.19" x2="246.31" y2="351.62"/>
                        <line class="cls-2" x1="254.58" y1="343.34" x2="257.17" y2="340.79"/>
                      </g>
                    </g>
                    <g>
                      <line class="cls-2" x1="201.87" y1="353.12" x2="201.87" y2="367"/>
                      <line class="cls-2" x1="216.23" y1="360.26" x2="216.23" y2="367"/>
                    </g>
                    <g>
                      <line class="cls-2" x1="243.48" y1="364.75" x2="243.48" y2="378.39"/>
                      <line class="cls-2" x1="257.44" y1="371.65" x2="257.44" y2="378.39"/>
                    </g>
                    <line class="cls-2" x1="204.28" y1="351.05" x2="204.28" y2="352.23"/>
                    <line class="cls-2" x1="213.81" y1="355.75" x2="213.81" y2="357.03"/>
                    <line class="cls-2" x1="246.01" y1="362.69" x2="246.01" y2="363.83"/>
                    <line class="cls-2" x1="255.51" y1="367.37" x2="255.51" y2="368.45"/>
                    <polygon class="cls-2" points="220.4 362.08 197.61 350.84 197.61 347.77 220.4 359.02 220.4 362.08"/>
                    <polygon class="cls-2" points="261.85 373.56 239.06 362.32 239.06 359.25 261.85 370.5 261.85 373.56"/>
                    <line class="cls-2" x1="201.87" y1="373.41" x2="216.23" y2="373.41"/>
                    <line class="cls-2" x1="243.28" y1="384.01" x2="257.64" y2="384.01"/>
                    <line class="cls-2" x1="243.28" y1="391.92" x2="257.64" y2="391.92"/>
                    <line class="cls-2" x1="243.28" y1="399.82" x2="257.64" y2="399.82"/>
                    <line class="cls-2" x1="201.87" y1="382.66" x2="216.23" y2="382.66"/>
                    <line class="cls-2" x1="201.87" y1="391.92" x2="216.23" y2="391.92"/>
                    <line class="cls-2" x1="201.87" y1="401.17" x2="216.23" y2="401.17"/>
                  </g>
                </g>
                <g class="icon2">
                  <circle class="cls-3" cx="73" cy="300" r="73"/>
                  <g>
                    <path class="cls-2" d="M66,320.68h0a1.81,1.81,0,0,0-.47-.26c-7.57-4.27-12-16-12-16h0a5.95,5.95,0,0,0-11.59,0h0s-4.44,11.76-12,16a1.58,1.58,0,0,0-.47.26h0a1.59,1.59,0,0,0,1,2.83H65a1.59,1.59,0,0,0,1-2.83Z"/>
                    <rect class="cls-2" x="41.11" y="323.77" width="13.2" height="3.53"/>
                    <path class="cls-2" d="M48.07,327.31v3.29a3.31,3.31,0,0,0,3.31,3.31H95.06a3.31,3.31,0,0,0,3.31-3.31h0v0"/>
                    <rect class="cls-2" x="94.37" y="326.1" width="7.99" height="4.46"/>
                    <rect class="cls-2" x="52.07" y="270.88" width="7.99" height="4.46"/>
                    <path class="cls-2" d="M82.71,283.09h24.16a2.66,2.66,0,0,1,2.66,2.66V311.4a2.66,2.66,0,0,1-2.66,2.66H82.71a2.66,2.66,0,0,1-2.66-2.66V285.75A2.66,2.66,0,0,1,82.71,283.09Z"/>
                    <g>
                      <rect class="cls-2" x="104.6" y="296.11" width="1.77" height="4.93"/>
                      <rect class="cls-2" x="83.12" y="296.11" width="1.77" height="4.93"/>
                    </g>
                    <g>
                      <rect class="cls-2" x="92.05" y="283.09" width="1.77" height="4.93"/>
                      <rect class="cls-2" x="93.81" y="283.09" width="1.77" height="4.93"/>
                      <rect class="cls-2" x="95.67" y="283.09" width="1.77" height="4.93"/>
                    </g>
                    <g>
                      <rect class="cls-2" x="92.05" y="309.12" width="1.77" height="4.93"/>
                      <rect class="cls-2" x="93.81" y="309.12" width="1.77" height="4.93"/>
                      <rect class="cls-2" x="95.67" y="309.12" width="1.77" height="4.93"/>
                    </g>
                    <path class="cls-2" d="M109.71,298.54l4.89,0a2.65,2.65,0,0,0,2.64-2.65V266.56a2.65,2.65,0,0,0-2.65-2.65H58.72a2.65,2.65,0,0,0-2.65,2.65h0v4.32"/>
                    <g>
                      <rect class="cls-2" x="28.76" y="285" width="23.05" height="5.76"/>
                      <rect class="cls-2" x="51.82" y="286.39" width="1.77" height="2.97"/>
                      <line class="cls-2" x1="53.58" y1="287.88" x2="56.84" y2="287.88"/>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <!-- End -->

          <div class="col-md-3 col-lg-3 col-xs-12">
            <div id="in-building-solution-content">
               <p class="text-left">In-Building Solution (IBS) provides indoor coverage using a series of hubs/Equipment's distributing the signal to number of antennas. The IBS gives additional leverage to strengthen the quality of wireless Signals, hence assures smooth wireless communication for PDAs, Lap-tops and mobile phones. Our in-building Solution offers the users with the best indoor coverage and quality. We optimize the indoor network in the best possible way to avoid call drops and eliminating mobile ping- pong.
              </p>
              <div class="d-flex flex-row justify-content-center align-items-center">
                <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white;letter-spacing: 1px;">LEARN MORE</a>
                <div class="learn-more-circle ml-2">
                  <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right fa-1x pt-2" aria-hidden="true"></i></a>
                </div>
              </div>
            </div> 
           <div id="telecom-products-content" style="display: none;">
              <p class="text-left">Telecom quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum bibendum. Duis tincidunt urna non pretium porta. Nam condimentum vitae ligula vel ornare. Phasellus at semper turpis. Nunc eu tellus tortor. Etiam at condimentum nisl, vitae sagittis orci. Donec id dignissim nunc. Donec elit ante, eleifend a dolor et, venenatis facilisis dolor.</p>
              <div class="d-flex flex-row justify-content-center align-items-center">
                <a href="products.php" target="_blank" style="text-decoration: none; color: white;letter-spacing: 1px;">LEARN MORE</a>
                <div class="learn-more-circle ml-2">
                  <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right fa-1x pt-2" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div id="solar-structure-content" style="display: none;">
              <p class="text-left"> With due precision, Space offers Solar Mounting Structures which are manufactured by our deft professionals with the use of supreme grade components and the advanced techniques. In order to meet varying needs of clients, these structures are made available in both standard and customized specifications. Used for mounting solar panels, these structures are made available in bulk at reasonable prices.</p>
              <div class="d-flex flex-row justify-content-center align-items-center">
                <a href="products.php" target="_blank" style="text-decoration: none; color: white;letter-spacing: 1px;">LEARN MORE</a>
                <div class="learn-more-circle ml-2">
                  <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right fa-1x pt-2" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div id="energy-content" style="display: none;">
              <p class="text-left">Energy quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum bibendum. Duis tincidunt urna non pretium porta. Nam condimentum vitae ligula vel ornare. Phasellus at semper turpis. Nunc eu tellus tortor. Etiam at condimentum nisl, vitae sagittis orci. Donec id dignissim nunc. Donec elit ante, eleifend a dolor et, venenatis facilisis dolor.</p>
              <div class="d-flex flex-row justify-content-center align-items-center">
                <a href="products.php" target="_blank" style="text-decoration: none; color: white;letter-spacing: 1px;">LEARN MORE</a>
                <div class="learn-more-circle ml-2">
                  <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right fa-1x pt-2" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="jumbotron jumbotron-fluid about-us">
      <div class="container">
        <h1 class="display-4 text-center">About Us</h1>
        <div class="row align-items-center">
          <div class="col-md-8 col-sm-12">
            <p class="text-left">Space World is a group of companies engaged in Telecommunication business. Founded in 2007, the group have two companies Space Telling Limited and Space tele infra private limited.</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="images/Assets/logo.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center">
          <a href="aboutUs.php" target="_blank" style="text-decoration: none; color: white;letter-spacing: 1px;">LEARN MORE</a>
          <div class="learn-more-circle ml-2">
            <a href="inBuildingSolutions.php" target="_blank" style="text-decoration: none; color: white; padding-left: 10px;"><i class="fa fa-chevron-right fa-1x pt-2" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>


    <div class="jumbotron jumbotron-fluid text-center meet-our-team">
      <div class="container-fluid">
        <h1 class="display-4">Meet Our Team</h1>
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6">
            <div class="img-contain">
              <img src="images/Assets/t1.jpg" class="img-fluid image" alt="Responsive image">
              <div class="middle">
                <div class="text">
                  <h5>Jemmy Chun</h5>
                  <p>(Designation)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6">
            <div class="img-contain">
              <img src="images/Assets/t2.jpg" class="img-fluid image" alt="Responsive image">
              <div class="middle">
                <div class="text">
                  <h5>Jemmy Chun</h5>
                  <p>(Designation)</p>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6">
            <div class="img-contain">
              <img src="images/Assets/t3.jpg" class="img-fluid image" alt="Responsive image">
              <div class="middle">
                <div class="text">
                  <h5>Jemmy Chun</h5>
                  <p>(Designation)</p>
                </div>
              </div>
            </div>             
          </div>
          <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6">
            <div class="img-contain">
              <img src="images/Assets/t4.jpg" class="img-fluid image" alt="Responsive image">
              <div class="middle">
                <div class="text">
                  <h5>Jemmy Chun</h5>
                  <p>(Designation)</p>
                </div>
              </div>
            </div>             
          </div>
        </div>   
      </div>
    </div>






    <?php
      include("client-icons.html");
    ?>



    <!-- Footer included in footer.html -->
    <?php
      include("footer.html");
    ?>
    <!-- Ends Here -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/cover.js" type="text/javascript"></script>
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


      /* function of Transition */

     var activeIcon='icon1';
     $("div[name='products_heading']").click(function(){

      hideAllDiv();
      resetAllCircleColor();

      $("div[name='products_heading']").removeClass('active');

      $("div[name='products_heading'] .ovalName div").removeClass('in-building-solutions-oval-active');
      $("div[name='products_heading'] .lineName div").removeClass('in-building-solutions-line-active');
      $("div[name='products_heading'] .headingName div").removeClass('in-building-solutions-sub-heading-active');


      $("div[name='products_heading'] .ovalName div").addClass('in-building-solutions-oval-unactive');
      $("div[name='products_heading'] .lineName div").addClass('in-building-solutions-line-unactive');
      $("div[name='products_heading'] .headingName div").addClass('in-building-solutions-sub-heading-unactive');


      var id = $(this).attr('id');
     

      $("#"+id+" .ovalName div").removeClass('in-building-solutions-oval-unactive');

      $("#"+id+" .lineName div").removeClass('in-building-solutions-line-unactive');

      $("#"+id+" .headingName div").removeClass('in-building-solutions-sub-heading-unactive');


      $("#"+id+" .ovalName div").addClass('in-building-solutions-oval-active');

      $("#"+id+" .lineName div").addClass('in-building-solutions-line-active');

      $("#"+id+" .headingName div").addClass('in-building-solutions-sub-heading-active');
      
      
        


      $(this).addClass('active');

      switch(id){
        case "energy_div":
        $("#energy-content").show(000);
        switch(activeIcon){
          case "icon1":$(".icon1").css("transform","translate(264px,227px) scale(0.55)")
                      $(".icon4").css("transform","translate(-473px,-408px) scale(1.8)")
                      activeIcon="icon4";
                      break;
          case "icon2":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(260px, 228px) scale(0.55")
                      $(".icon4").css("transform","translate(-473px,-408px) scale(1.8)")
                      resetCircle("icon4","icon1");
                      activeIcon="icon4";
                      break;
          case "icon3":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(263px, 227px) scale(0.55)")
                      $(".icon4").css("transform","translate(-473px,-408px) scale(1.8)")
                      resetCircle("icon4","icon1");
                      activeIcon="icon4";
                      break;
        }
        break;

        
        case "solar_structure_div":
        $("#solar-structure-content").show(2000);
        switch(activeIcon){
          case "icon1":$(".icon1").css("transform","translate(103px,300px) scale(0.55)")
                      $(".icon3").css("transform","translate(-183px,-540px) scale(1.8)")
                      activeIcon="icon3";
                      break;
          case "icon2":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(103px, 301px) scale(0.55)")
                      $(".icon3").css("transform","translate(-183px,-540px) scale(1.8)")
                      resetCircle("icon3","icon1");
                      activeIcon="icon3";
                      break;
          case "icon4":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(103px, 300px) scale(0.55)")
                      //$(".icon1").css("transform","translate(263px, 227px) scale(0.55)")
                      $(".icon3").css("transform","translate(-183px,-540px) scale(1.8)")
                      resetCircle("icon3","icon1");
                      activeIcon="icon3";
                      break;
        }
        break;
       
        
        case "telecom_products_div":
        $("#telecom-products-content").show(2000);
          switch(activeIcon){
          case "icon1":$(".icon1").css("transform","translate(-53px,228px) scale(0.55)")
                      $(".icon2").css("transform","translate(98px,-408px) scale(1.8)")
                      activeIcon="icon2";
                      break;
          case "icon3":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(-52px, 228px) scale(0.55)")
                      $(".icon2").css("transform","translate(98px,-408px) scale(1.8)")
                      resetCircle("icon2","icon1");
                      activeIcon="icon2";
                      break;
          case "icon4":$(".icon1").css("transform","none")
                      $(".icon1").css("transform","translate(-52px, 227px) scale(0.55)")
                      $(".icon2").css("transform","translate(98px,-408px) scale(1.8)")
                      resetCircle("icon2","icon1");
                      activeIcon="icon2";
                      break;
        }

        break;

        case "in_Building_div":
         $("#in-building-solution-content").show(2000);
          $(".icon4").css("transform","none")
          $(".icon3").css("transform","none")
          $(".icon2").css("transform","none")
          $(".icon1").css("transform","none")
          activeIcon="icon1";
          break;

      }

      
      function resetCircle(activeIcon,defaultIcon){
        
        var arr=["icon1","icon2","icon3","icon4"];
        arr.splice(arr.indexOf(activeIcon),1);
        arr.splice(arr.indexOf(defaultIcon),1);
        arr.forEach(function(icon){
          $("."+icon).css("transform","none");
        })
      }

      function hideAllDiv(){
        $("#in-building-solution-content").hide();
        $("#telecom-products-content").hide();
        $("#solar-structure-content").hide();
        $("#energy-content").hide();
      }

      function resetAllCircleColor(){
        $(".icon1 circle").removeClass('cls-1')
        $(".icon2 circle").removeClass('cls-1')
        $(".icon3 circle").removeClass('cls-1')
        $(".icon4 circle").removeClass('cls-1')


        $(".icon1 circle").addClass('cls-3')
        $(".icon2 circle").addClass('cls-3')
        $(".icon3 circle").addClass('cls-3')
        $(".icon4 circle").addClass('cls-3') 
      }
      $("."+activeIcon+" circle").removeClass('cls-3')
      $("."+activeIcon+" circle").addClass('cls-1')

     })
     


     /* function of Transition */

    
    </script>

  </body>
</html>