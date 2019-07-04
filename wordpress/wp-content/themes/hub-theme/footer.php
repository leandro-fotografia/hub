<!--==========================
    Footer
  ============================-->
    <footer id="footer">

    </footer><!-- #footer -->




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">                          
                    <button type="button" class="close text-right pr-3" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                
                <div class="modal-body">
                    <?= do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                </div>                
            </div>
        </div>
    </div>
    <script>
        (function($){
            

            document.addEventListener( 'wpcf7mailsent', function( event ) {
                window.location.assign('/quiz');
            }, false );
        })(jQuery);
    </script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
</body>

</html>
<?php wp_footer(); ?>