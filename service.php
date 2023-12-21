<?php

include('main-panels/navbar.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Labsky - Laboratory HTML Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


 


  

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
      <!-- Service Start -->
      <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Service</h1>
                <p class="mb-5">Delivering reliable, high-quality laboratory services with accuracy and precision for your health and diagnostics needs.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>

                               <h4 class="mb-3">Petrochemicals</h4>
                        <p class="mb-4">Essential chemicals from oil, used for plastics, fibers, and more.</p>
                       
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example1Modal" data-bs-whatever="">Read More</button>
                    </div>
                </div>




                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-lungs text-dark"></i>
                        </div>
                               <h4 class="mb-3">Agrochemicals</h4>
                            <p class="mb-4">
                            Chemicals for agriculture, pesticides, and plant growth regulators.</p>
                      
                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example2Modal" data-bs-whatever="">Read More</button>



                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-virus text-dark"></i>
                        </div>
                        <h4 class="mb-3">Pharmaceuticals</h4>
                            <p class="mb-4">Medicinal drugs for treating, preventing, and diagnosing illnesses and diseases.</p>
                      
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example3Modal" data-bs-whatever="">Read More</button>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule-pill text-dark"></i>
                        </div>
                            
                            <h4 class="mb-1">Electronic Chemical</h4>
                            <p class="mb-2">Key for semiconductors, electronic chemicals ensure precision manufacturing.</p>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example4Modal" data-bs-whatever="">Read More</button>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule text-dark"></i>
                        </div>

                        <h4 class="mb-3">Food Additives</h4>
                            <p class="mb-4">Substances added to food for preservation, flavor enhancement, or coloring.</p>
                       
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example5Modal" data-bs-whatever="">Read More</button>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-prescription2 text-dark"></i>
                        </div>
                        <h4 class="mb-2">Analytical Reagents</h4>
                            <p class="mb-2">Chemicals used in laboratories to analyze and test substances accurately.</p>
                     
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example6Modal" data-bs-whatever="">Read More</button>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-clipboard2-pulse text-dark"></i>
                        </div>
                              
                        <h4 class="mb-2">Industrial Chemicals</h4>
                            <p class="mb-2">Helps for industrial processes, and product development applications.</p>
                      
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example7Modal" data-bs-whatever="">Read More</button>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-medical text-dark"></i>
                        </div>
                        <h4 class="mb-2">Dyes and Pigments</h4>
                            <p class="mb-2">Coloring agents for textiles, paints, plastics, and various industrial applications.</p>
                      
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example8Modal" data-bs-whatever="">Read More</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-4">What Clients Say About Our Lab Services!</h1>
                    <p class="text-white mb-5">Lab automation through cutting-edge technologies offers a myriad of benefits, including streamlined processes, reduced manual errors, and increased overall productivity.</p>
                    <a href="" class="btn btn-primary py-3 px-5">More Testimonials</a>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white p-5">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Our team specializes in providing tailored lab automation solutions that align with your specific requirements. Whether it's automating sample handling, data analysis, or instrument integration, we can design a solution that not only meets but exceeds your expectations.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial-1.jpg" alt="">
                                    <div class="ps-3">
                                        <span class="text-primary">Afshan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial-2.jpg" alt="">
                                    <div class="ps-3">
                                        <span class="text-primary">Ahsan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

 

<!-- Modal -->

<div class="modal fade" id="example1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1 style="color:"><u>Petrochemicals</u></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text" >  Petrochemicals, derived from petroleum and natural gas, encompass a diverse range of chemical compounds. Essential for modern industry, they serve as building blocks for plastics, fertilizers, synthetic materials, and numerous consumer goods, driving global economic development.
 </p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
  
<!-- 2nd -->

<div class="modal fade" id="example2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Agrochemicals </U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Agrochemicals are substances used in agriculture to enhance crop production and protect against pests, diseases, and weeds. They include fertilizers, pesticides, herbicides, and growth regulators, contributing to increased agricultural efficiency.
</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<!-- 3nd -->

<div class="modal fade" id="example3Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Pharmaceuticals</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Pharmaceuticals are drugs and medications developed for the prevention, diagnosis, and treatment of diseases in humans. These compounds undergo rigorous testing for safety and efficacy before being approved for medical use.
</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

  
<!-- 4nd -->

<div class="modal fade" id="example4Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Electronic Chemicals</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Electronic chemicals are specialized substances used in the manufacturing of electronic components and devices. They include semiconductors, conductive polymers, photoresists, and other materials critical to the electronics industry for applications like integrated circuits and electronic packaging.
 </p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


  
<!-- 5nd -->

<div class="modal fade" id="example5Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Food Additives</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Food additives are substances added to food during processing to enhance flavor, color, texture, or shelf life. Examples include preservatives, antioxidants, emulsifiers, and sweeteners. Regulatory agencies ensure their safety for consumption.</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


  
<!-- 6nd -->

<div class="modal fade" id="example6Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Analytical Reagents</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Analytical reagents are high-purity chemicals used in laboratories for precise analysis and testing of substances. They help identify and quantify specific components in samples, supporting research, quality control, and scientific investigations.</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

  
<!-- 7nd -->

<div class="modal fade" id="example7Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Industrial Chemicals</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
Industrial chemicals refer to a diverse group of chemicals used in various industrial processes and manufacturing. They include solvents, acids, bases, and specialty chemicals, playing crucial roles in sectors such as manufacturing, construction, and energy production.</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


  
<!-- 8nd -->

<div class="modal fade" id="example8Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ABOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
 <h1><U>Dyes and Pigments</U></h1>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Details</label>
           <p class="form-control" id="message-text">  
           Dyes and pigments are colorants used in various industries. Dyes impart color to fabrics, paper, and other materials through chemical bonding, while pigments provide color in paints, inks, and plastics by dispersion.</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


<!-- Modal End -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <?php

include('main-panels/footer.php');

?>
</body>

</html>