<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<body>

  <main id="main">
          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
              <div class="my-3">
           
            </div>
            <?php
                if(isset($_SESSION["msg"])){
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
             ?>
            <form action="contact.php" method="post">
            
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                    <label for="sendername" class="form-label">Enter Your Name</label>
                </div> 
                
                <div class="form-floating mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
                    <label for="email" class="form-label">Enter Email Address</label>
                </div> 
                
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required>
                    <label for="phone" class="form-label">Enter Phone Number</label>
                </div> 
                
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject" required>
                    <label for="subject" class="form-label">Enter Subject</label>
                </div> 
                
                <div class="form-floating mt-3">
                    <textarea type="text" class="form-control" name="message" id="message" placeholder="Enter Your Message" required style="resize:none; height:100px;"></textarea>
                    <label for="message" class="form-label">Enter Your Message</label>
                </div> 
                  
                <div class="text-center my-3">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
            <hr>

          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

</body>

</html>