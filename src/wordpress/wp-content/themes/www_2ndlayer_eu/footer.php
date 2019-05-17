    <footer>
      <div class="columns">
        <div class="column is-one-fifth">
        </div>
        <div class="column has-text-centered">
        </div>
        <div class="column has-text-centered is-one-forth">
          <img 
            src="<?php echo get_bloginfo('template_directory'); ?>/images/2nd-layer-logo-white.png"
            style="height: 100px;" />
            <p class="has-text-white">
              2019 
              <?php 
                if (date('Y') > 2019) {
                  echo ' - '.date('Y');
                }
              ?> © <strong class="has-text-white">2<sup>nd</sup> Layer</strong> - All rights reserved.
            </p>
        </div>
      </div>
    </footer>
  </body>
</html>