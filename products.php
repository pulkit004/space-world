<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products | Space World</title>
    <?php 
      include("favicon.html");
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/products.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    
  </head>
  <body>

    <?php
      include("navbar.html");
    ?>
    <div class="jumbotron jumbotron-fluid text-center productsCover">
      <div class="container">
       <h1 class="display-3 text-center mb-5">Products</h1>
        <p>
          Being the leading manufacturer of connectivity solutions with the necessary infrastructure that is required, SPACE offers a comprehensive range of products, services and the know-how required to meet the continually increasing demands of our customers in terms of quality, efficiency and cost-effectiveness.
          <br/>
          SPACE offers standardized and customized products in the field of radio frequency (RF), Infra products which helps in engineering applications of telecom, complete network solution into the large building (IBS), all the required technical accessories while installing a Base Trans-Receiver Station (BTS Accessories).
       
        </p>
      </div>
    </div>
      
    <div class="jumbotron jumbotron-fluid productsContent">
      <div class="container">
        <div class="tabular-section mt-1">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="rfproducts-tab" data-toggle="tab" href="#rfproducts" role="tab" aria-controls="rfproducts" aria-expanded="true">RF PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="infraproducts-tab" data-toggle="tab" href="#infraproducts" role="tab" aria-controls="infraproducts">INFRA PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="btsaccessories-tab" data-toggle="tab" href="#btsaccessories" role="tab" aria-controls="btsaccessories">BTS ACCESSORIES</a>
            </li>
        
          </ul>
          <div class="tab-content p-1" id="myTabContent">
            

            <!-- RF PRODUCTS -->
            <div class="tab-pane fade show active p-3" id="rfproducts" role="tabpanel" aria-labelledby="rfproducts-tab">
              <p class="mb-5">Radio Frequency (RF) is a band of frequencies, suitable for telecommunication. the range extending from around 3 kHz to300 GHz.<br/>
              In the range of RF Products, Space offers all the antennas (Omni, Panel, Yagi etc), different types of connectors (N type, DIN type,Straight and Right Angel,TNC ), Coaxial Cables (1/2”,7/8”, ¼”, 13/8”, 5/4”), cable assemblies, Directional Couplers (5 dB ,7dB, 10dB, 15 dB, 20 dB, 40 dB), Splitters ( 2way, 3way, 4 way), Combiners, Diplexer, Triplexer
              <br/>
              All these products are well tested on all parameters VSWR, Insertion loss and  PIM (Passive Intermodulation).
              </p>
              <div class="products-gallery">
                <div class="row mb-4">
                  <!-- One -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="0">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/FedderCables1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Feeder Cables</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <!-- Two -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="1">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/OmniAntenna.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Omni Antenna</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Three -->
                  <div class="col-md-4 col-sm-12 mb-1">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="2">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/PanelAntenna.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Panel Antenna</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- Four -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/PowerSpiltter4way.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Power Spiltter 4 Way</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <!-- Five -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="4">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/DirectionalCoupler5dB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Directional Coupler 5dB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <!-- Five -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="5">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/DirectionalCoupler7dB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Directional Coupler 7dB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <!-- Five -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="6">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/DirectionalCoupler12dB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Directional Coupler 12dB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                   
                  <!-- Five -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="7">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/DirectionalCoupler40dB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Directional Coupler 40dB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 

                  <!-- Six -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="8">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/NMaleConnector.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">N Male Connector</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                   <!--Six  -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="9">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/NMaleRAConnector.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">N Male RA Connector</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>


                  <!-- Seven -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="10">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/Combiner.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Combiner</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <!-- Eight -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="11">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/Jumper.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Jumper</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  
                  <!-- Nince -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="12">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/Diplexer.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Diplexer</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  
                  
                  <!-- Ten -->
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="13">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/OpticalPatchCord.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Optical Patch Cord</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 

                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal">
                      <a href="#myGallery" data-slide-to="14">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/RF/Adapter.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Surge Arrestor</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                   
                </div>
              <!-- Row End -->
              </div>
            </div>
            <!-- RF End -->
              
            <!-- Infra Products -->
            <div class="tab-pane fade p-3" id="infraproducts" role="tabpanel" aria-labelledby="infraproducts-tab">
              <p> 
                Space has been leading in manufacturing of Infra Products. The auto assembly plays a major role in the manufacturing of all components. The precision and performance of these components are highly significant. We therefore ensure quality products and excellent technological and mechanical support so that each of our manufactured component scores high on durability and accuracy. To meet the customer’s demands we have a plant equipped with all high tech and computer operated machines. We, leveraging on the stringent quality standards.
                <br/>
                We produce a variety of products under Infra Products –
              </p> 
              <d-flex class="d-flex flex-row align-items-start">
                <div class="p-1">
                  <ul>
                    <li><p>All types of Racks (Server Racks, Microwave Racks, ETSI Racks)</p></li>
                    <li><p>Customized Cabinets <br/>(Outdoor Battery Bank Cabinet, Outdoor BTS Cabinet, Outdoor AC Cabinet)</p></li>
                    <li><p>Cabinets with free cooling concept</p></li>
                    <li><p>Cable Trays</p></li>
                    <li><p>Antenna Mounts</p></li>
                  </ul>
              
                </div>
                <div class="p-1">
                  <ul>
                    <li><p>PMS Control Box</p></li>
                    <li><p>MCCB Box</p></li>
                    <li><p>SPD Box</p></li>
                    <li><p>All sheet metal components</p></li>
                  </ul>
                
                </div>
              </d-flex>
               
              
              <div class="products-gallery">    
                <div class="row">              
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="0">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/6URack.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">6U Rack</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="1">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/ACDB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">ACDB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="2">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/BracketMount.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Bracket Mount</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                                   
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/CableTray.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Cable Tray</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="4">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/DCDB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">DCDB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="5">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/LTPanel.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">LT Panel</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>       
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="6">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/BTSCabinet.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">BTS Cabinet</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>       
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="7">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/cabinet.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Cabinet</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                   
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="8">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/MeterBox.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Meter Box</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="9">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/MWMount.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">MW Mount</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="10">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/OutdoorTransmissionRack.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Outdoor Transmission Rack</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="11">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/ServerRack.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Server Rack</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>        
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="12">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/TransmissionRacks.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Transmission Racks</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="13">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/TwoPostRack.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Two Post Rack</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                                
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal1">
                      <a href="#myGallery1" data-slide-to="14">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/INFRA/WallMountRack.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Wall Mount Rack</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>   
                </div>
              </div>
            </div>
            <!-- End Here -->

            <!-- BTS Accessories -->
            <div class="tab-pane fade p-3" id="btsaccessories" role="tabpanel" aria-labelledby="btsaccessories-tab">
              <p> 
                We also hold expertise in offering BTS Installation Accessories that meet the requirements of diverting transient currents from lightning off the transmission line to an earth grounding system. This helps in preventing damage to expensive cable and radio equipment. Our range of BTS Installation Accessories is perfect to use for cables with the sizes of ¼, ½, 7/8, 1-1/4 and 1-5/8. The precision engineered IGB / EGB - Bus Bars and earthing kits are strictly checked to ensure high quality standards. We also offer customization on these kits to meet the specific requirements of our clients. We conduct quality tests on the basis of well-defined parameters such as tolerance, longevity/durability, composition of raw material & performance.<br/>
                These includes:
              </p> 
              <div class="d-flex flex-row justify-content-between">
                <div class="p-1">
                  <ul> 
                    <li><p>Indoor & Outdoor Grounding Kits <br/> for Cable size 7/16, 16 sqmm or as desired</p></li>
                    <li><p>Weather Proofing Kits</p></li>
                    <li><p>Patch Chords</p></li>
                    <li><p>Feeder Clamps</p></li>
                    <li><p>IGB/EGB Bus Bars</p></li>

                  </ul>
                </div>
                <div class="p-1">
                  <ul>
                    <li><p>Label Holders</p></li>
                    <li><p>Surge arrestor</p></li>
                    <li><p>Krone Modules</p></li>
                    <li><p>Back Mount Frame</p></li>
                    <li><p>Wall entry Plate</p></li>

                   
                  </ul>
                </div>
                <div class="p-1">
                  <ul>
                    <li><p>Baluns</p></li>
                    <li><p>SWR</p></li>
                    <li><p>MCB & Lugs</p></li>
                    <li><p>Power Cables</p></li>
                  </ul>
                </div>
              </div>
              
              
              <div class="products-gallery">
                <div class="row">
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="0">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/6wayclamp.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">6 Way Clamp</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="1">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/BNCBalun.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">BNC Balun</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="2">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/BNCBalun2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">BNC Balun 2</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                   
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="3">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/BNCConnector.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">BNC Connector</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="5">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/BracketMount.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Bracket Mount</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="6">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/FeederClamp3Way.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Feeder Clamp 3 Way</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                              
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="7">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/FeederClamp6Way.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Feeder Clamp 6 Way</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="8">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/GroundingKit.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Grounding Kit</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="9">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/GroundingKitwithBoot.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Grounding Kit with Boot</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                                
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="10">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/KroneModule.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Krone Module</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="11">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/LabelSet.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Label Set</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div> 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="12">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/LANCables.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">LAN Cables</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                                 
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="13">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/Lugs.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Lugs</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="14">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/MCB.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">MCB</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                   <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="15">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/PowerCables.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Power Cables</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="16">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/RJ45Connector.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">RJ45 Connector</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="17">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/Saddle.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Saddle</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                   <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="18">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/SWRPipe.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">SWR Pipe</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>                                    
                  <div class="col-md-4 col-sm-12 mb-3">
                    <div data-toggle="modal" data-target="#myModal2">
                      <a href="#myGallery2" data-slide-to="19">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="images/Products/BTS/TerminationModule.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text p-0 text-center">Termination Module</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>  
                            
                </div>
                <!-- End -->
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


    <!--  Modal For RF Products  -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">RF Products</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="myGallery" class="carousel slide" data-ride="carousel">
              <!-- <ol class="carousel-indicators">
                <li data-target="#myGallery" data-slide-to="0" class="active"></li>
                <li data-target="#myGallery" data-slide-to="1"></li>
                <li data-target="#myGallery" data-slide-to="2"></li>
              </ol> -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/Products/RF/FedderCables1.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/OmniAntenna.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/PanelAntenna.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/PowerSpiltter4way.jpg" alt="Third slide" style="height: 350px;">
                </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/DirectionalCoupler5dB.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/DirectionalCoupler7dB.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/DirectionalCoupler12dB.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/DirectionalCoupler40dB.jpg" alt="Second slide" style="height: 350px;">
                </div>
            
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/NMaleConnector.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/NMaleRAConnector.jpg" alt="Third slide" style="height: 350px;">
                </div>
               
                  <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/Combiner.jpg" alt="Second slide" style="height: 350px;">
                </div>
                 <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/Jumper.jpg" alt="Third slide" style="height: 350px;">
                </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/Diplexer.jpg" alt="Second slide" style="height: 350px;">
                </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/RF/OpticalPatchCord.jpg" alt="Third slide" style="height: 350px;">
                </div>
              
                <div class="carousel-item ">
                  <img class="d-block w-100" src="images/Products/RF/Adapter.jpg" alt="First slide" style="height: 350px;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#myGallery" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myGallery" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End -->

    <!--  Modal For INFRA Products  -->

    <div class="modal fade" id="myModal1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">RF Products</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="myGallery1" class="carousel slide" data-ride="carousel">
              <!-- <ol class="carousel-indicators">
                <li data-target="#myGallery" data-slide-to="0" class="active"></li>
                <li data-target="#myGallery" data-slide-to="1"></li>
                <li data-target="#myGallery" data-slide-to="2"></li>
              </ol> -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/Products/INFRA/6URack.jpg" alt="First slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/ACDB.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/BracketMount.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/CableTray.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/DCDB.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/LTPanel.jpg" alt="Third slide" style="height: 350px;">
                </div>
                 <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/BTSCabinet.jpg" alt="Third slide" style="height: 350px;">
                </div>
                 <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/cabinet.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/MeterBox.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/MWMount.jpg" alt="Third slide" style="height: 350px;">
                </div>


                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/OutdoorTransmissionRack.jpg" alt="Third slide" style="height: 350px;">
                </div>
             
              
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/ServerRack.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/TransmissionRacks.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/TwoPostRack.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/INFRA/WallMountRack.jpg" alt="Third slide" style="height: 350px;">
                </div>

              </div>
              <a class="carousel-control-prev" href="#myGallery1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myGallery1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End -->

    <!--  Modal For BTS Products  -->

    <div class="modal fade" id="myModal2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">RF Products</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="myGallery2" class="carousel slide" data-ride="carousel">
              <!-- <ol class="carousel-indicators">
                <li data-target="#myGallery" data-slide-to="0" class="active"></li>
                <li data-target="#myGallery" data-slide-to="1"></li>
                <li data-target="#myGallery" data-slide-to="2"></li>
              </ol> -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/Products/BTS/6wayclamp.jpg" alt="First slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/BNCBalun.jpg" alt="Second slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/BNCBalun2.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/BNCConnector.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/BNCConnector2.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/BracketMount.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/FeederClamp3Way.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/FeederClamp6Way.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/GroundingKit.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/GroundingKitwithBoot.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/KroneModule.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/LabelSet.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/LANCables.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/Lugs.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/MCB.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/PowerCables.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/RJ45Connector.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/Saddle.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/SWRPipe.jpg" alt="Third slide" style="height: 350px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/Products/BTS/TerminationModule.jpg" alt="Third slide" style="height: 350px;">
                </div>

              </div>
              <a class="carousel-control-prev" href="#myGallery2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myGallery2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End -->



  </body>
</html>