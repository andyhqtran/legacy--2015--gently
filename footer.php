        </div>
        <footer class='footer'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='footer-text' data-sr='scale up 30%'>
                            <h2>Want to work with us?</h2>
                            <p>Put some catchy tagline here now that's long enough it looks good</p>
                            <a class='btn btn-info' href='<?php echo esc_url( home_url( '/' ) ); ?>contact/'>
                                <i class='fa fa-comments'></i>
                                Lets Talk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          <div class='footer-bottom'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <p class='copyright'>
                                <?php printf( __( 'Proudly powered by %s', 'gently' ), '<b>WordPress</b>' ); ?> |
                                Copyright &copy; 2015 <b>Gently.io</b>. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>
