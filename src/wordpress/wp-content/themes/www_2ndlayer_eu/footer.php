    <footer>
      <div class="columns">
        <div class="column is-one-half">
          <div class="field is-horizontal">
            <div class="control has-icons-left">
              <input class="input is-rounded" type="text" placeholder="Name">
              <span class="icon is-left">
                <i class="fas fa-id-card"></i>
              </span>
            </div>
            <div class="control has-icons-left">
              <input class="input is-rounded" type="text" placeholder="Surname">
              <span class="icon is-left">
                <i class="fas fa-id-card"></i>
              </span>
            </div>
          </div>
          <div class="field">
            <div class="control has-icons-left">
              <input class="input is-rounded" type="text" placeholder="E-mail">
              <span class="icon is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="column has-text-centered">
        </div>
        <div class="column has-text-centered is-one-fifth">
          <img 
            src="<?php echo get_bloginfo('template_directory'); ?>/images/2nd-layer-logo-white.png"
            style="height: 100px;" />
            <p class="has-text-white">
              2019 
              <?php 
                if (date('Y') > 2019) {
                  echo ' - '.date('Y');
                }
              ?> © <strong class="has-text-white">2<sup>nd</sup> Layer</strong><br/>
              All rights reserved.
            </p>
        </div>
      </div>
    </footer>
  </body>
</html>