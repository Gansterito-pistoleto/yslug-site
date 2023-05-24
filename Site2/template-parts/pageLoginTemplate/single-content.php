<?php $skip_min_height = false; ?><section class="u-align-center u-black u-clearfix u-section-1" id="carousel_94b6">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center u-black u-container-style u-layout-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <img class="u-image u-image-contain u-image-default u-image-1" src="<?php echo get_template_directory_uri(); ?>/images/e4ccec37a33950620c0664372f608b02-1.jpg" alt="" data-image-width="1200" data-image-height="734">
            </div>
          </div>
          <div class="u-align-center u-black u-container-style u-layout-cell u-radius-50 u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
              <div class="u-form u-login-control u-radius-50 u-white u-form-1">
                <?php global $pageLogin_custom_template;
	    $pathToTemplates = get_template_directory() . '/template-parts/' . $pageLogin_custom_template;
	    $pathToFormsTemplates = $pathToTemplates . '/forms/';
	    if (file_exists($pathToFormsTemplates . 'form.php')) {
		    include_once $pathToFormsTemplates . 'form.php';
	    } ?>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>
