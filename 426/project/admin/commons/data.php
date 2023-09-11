 <?php
    require_once("classes/Data.class.php");

    $categoryCount = $data->getCategoryCount();
    $unreadmessagecount = $data->getUnreadMessageCount();
    $productsCount = $data->getProductsCount();
    $faqCount = $data->getFAQCount();
    $sliderCount = $data->getSliderCount();
    $teamCount = $data->getTeamCount();
    $careerCount = $data->getCareerCount();
    $serviceCount = $data->getServiceCount();
 ?>
 <!-- Content Row -->
 <div class="row">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <a href="unreadmessages.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Unread Messages</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $unreadmessagecount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-envelope fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <a href="category.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Category</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $categoryCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-list fa-2x"></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <a href="manageproduct.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Products
                         </div>
                         <div class="row no-gutters align-items-center">
                             <div class="col-auto">
                                 <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $productsCount; ?></div>
                             </div>
                            
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-box-open fa-2x"></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <a href="faq.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             FAQ</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $faqCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-question fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <a href="slider.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Slider</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sliderCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-sliders-h fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <a href="team.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Team</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $teamCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-users fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <a href="services.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Services</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $serviceCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-sliders-h fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <a href="career.php">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Career</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $careerCount; ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-file fa-2x "></i>
                     </div>
                 </div>
             </div>
            </a>
         </div>
     </div>
 </div>

 <!-- Content Row -->