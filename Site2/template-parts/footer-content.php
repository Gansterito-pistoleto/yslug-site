<footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-6a02">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/IMG_3803.PNG",
            'default_url' => "https://nicepage.com"
        )); $url = stripos($logo['url'], 'http') === 0 ? esc_url($logo['url']) : $logo['url']; ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo $url; ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="1000" data-image-height="1000">
      <img <?php if ($logo['svg']) { echo 'style="width:'.$logo['width'].'px"'; } ?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1">
    </a>
    <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-palette-1-base u-text-1">Присоединяйтесь к нам и пишите </p>
    <p class="u-align-center u-text u-text-default u-text-palette-1-base u-text-2">Закажите услугу </p>
    <p class="u-align-center u-text u-text-default u-text-palette-1-base u-text-3">Описание кораблей </p>
    <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
      <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-1"><img src="<?php echo get_template_directory_uri(); ?>/images/3670151.png" alt=""></span>
      </a>
      <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-2"><img src="<?php echo get_template_directory_uri(); ?>/images/3536445.png" alt=""></span>
      </a>
      <a class="u-social-url" title="linkedin" target="_blank" href="https://www.youtube.com/watch?v=fKRJlG-_I4c"><span class="u-file-icon u-icon u-social-icon u-social-linkedin u-icon-3"><img src="<?php echo get_template_directory_uri(); ?>/images/3670147.png" alt=""></span>
      </a>
    </div>
  </div>
</footer>