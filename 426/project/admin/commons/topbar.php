 <!-- Topbar -->
 <?php 
    require_once("classes/Data.class.php");
    $unreadmessagecount = $data->getUnreadMessageCount();
 ?>
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
     <!-- Sidebar Toggle (Topbar) -->
     <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
     </button>

     <!-- Topbar Navbar -->
     <ul class="navbar-nav ml-auto">
         <!-- Nav Item - Messages -->
         <li class="nav-item dropdown no-arrow mx-1">
             <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-envelope fa-fw"></i>
                 <!-- Counter - Messages -->
                 <span class="badge badge-danger badge-counter"><?php echo $unreadmessagecount; ?></span>
             </a>
             <!-- Dropdown - Messages -->
             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                 <h6 class="dropdown-header">
                     Message Center
                 </h6>
                 <?php
                        $messageResult = $data->getTopUnreadMessages();

                        while($msgrow = $messageResult->fetch_assoc()){
                            echo "<a class='dropdown-item d-flex align-items-center' href='readmessage.php?msgid=$msgrow[msgid]'>
                            <div>
                                <div class='text-truncate'>$msgrow[sendername] | $msgrow[senderphone]</div>
                                <div class='small text-gray-500'>
                                    $msgrow[subject]
                                </div>
                            </div>
                        </a>";
                        }
                 ?>
                 
                 <a class="dropdown-item text-center small text-gray-500" href="unreadmessages.php">Read More Messages</a>
             </div>
         </li>

         <div class="topbar-divider d-none d-sm-block"></div>

         <!-- Nav Item - User Information -->
         <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $email; ?></span>
                 <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="profile.php">
                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                     Profile
                 </a>
                 <a class="dropdown-item" href="password.php">
                     <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                     Settings
                 </a>
                 <a class="dropdown-item" href="meta.php">
                     <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                     Meta Keywords
                 </a>
                 <a class="dropdown-item" href="logs.php">
                     <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                     Activity Log
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Logout
                 </a>
             </div>
         </li>

     </ul>

 </nav>
 <!-- End of Topbar -->

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="index.php">Logout</a>
             </div>
         </div>
     </div>
 </div>