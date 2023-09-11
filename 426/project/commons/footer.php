 <footer id="footer">
   <div class="container">
     <h3>Khakhi & Rakhi</h3>
     <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
     <div class="social-links">
       <?php
        $socialResult = $client->getSocialMedia();

        while ($socialRow = $socialResult->fetch_assoc()) {
          if ($socialRow["facebook"] !== "") {
            echo "<a href='$socialRow[facebook]' class='facebook'><i class='bx bxl-facebook'></i></a>";
          }
          if ($socialRow["twitter"] !== "") {
            echo "<a href='$socialRow[twitter]' class='twitter'><i class='bx bxl-twitter'></i></a>";
          }
          if ($socialRow["instagram"] !== "") {
            echo "<a href='$socialRow[instagram]' class='instagram'><i class='bx bxl-instagram'></i></a>";
          }
          if ($socialRow["youtube"] !== "") {
            echo "<a href='$socialRow[youtube]' class='youtube'><i class='bx bxl-youtube'></i></a>";
          }
          if ($socialRow["linkedin"] !== "") {
            echo "<a href='$socialRow[linkedin]' class='linkedin'><i class='bx bxl-linkedin'></i></a>";
          }
          if ($socialRow["snapchat"] !== "") {
            echo "<a href='$socialRow[snapchat]' class='snapchat'><i class='bx bxl-snapchat'></i></a>";
          }
        }
        ?>
     </div>
     <div>
       <div id="google_translate_element"></div>

       <script type="text/javascript">
         function googleTranslateElementInit() {
           new google.translate.TranslateElement({
             pageLanguage: 'en'
           }, 'google_translate_element');
         }
       </script>

       <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     </div>
     <div class="copyright">
       &copy; Copyright <strong><span>Khakhi & Rakhi</span></strong>. All Rights Reserved
     </div>
     <div class="credits">
       Designed by <a href="#">BootstrapMade</a>
     </div>
   </div>
 </footer>