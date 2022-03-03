  <div class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col-1">
                  <?php dynamic_sidebar('footer-1'); ?>
              </div>

              <div class="footer-col-2">
                  <?php the_custom_logo(); ?>
                  <?php dynamic_sidebar('footer-2'); ?>
              </div>

              <div class="footer-col-3">
                  <?php dynamic_sidebar('footer-3'); ?>

              </div>

              <div class="footer-col-4">
                  <?php dynamic_sidebar('footer-4'); ?>

              </div>


          </div>
          <hr>
          <p class="copyright"><?php dynamic_sidebar('footer-5'); ?></p>
      </div>
  </div>
  <?php wp_footer();  ?>
  </body>




  </html>