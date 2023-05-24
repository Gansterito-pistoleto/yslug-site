<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 106px;
}
.u-header .u-icon-1 {
  width: 47px;
  height: 47px;
  margin: 29px 92px 0 auto;
  padding: 2px;
}
.u-header .u-image-1 {
  width: 61px;
  height: 61px;
  margin: -58px auto 0 25px;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-text-1 {
  font-size: 1.25rem;
  margin: -44px auto 0 503px;
}
.u-header .u-text-2 {
  font-size: 1.25rem;
  margin: -36px 845px 0 119px;
}
.u-header .u-text-3 {
  font-size: 1.25rem;
  margin: -36px auto 0 326px;
}
.u-header .u-text-4 {
  font-size: 1.25rem;
  margin: -36px 360px 0 auto;
}
.u-header .u-text-5 {
  margin: -36px 221px 35px auto;
}
@media (max-width: 1199px) {
  .u-header .u-icon-1 {
    width: 47px;
    height: 47px;
    margin-right: 92px;
  }
  .u-header .u-image-1 {
    width: 61px;
    height: 61px;
    margin-top: -42px;
  }
  .u-header .u-text-1 {
    margin-top: -45px;
    margin-left: 415px;
  }
  .u-header .u-text-2 {
    margin-top: -36px;
    margin-right: 745px;
    margin-left: 19px;
  }
  .u-header .u-text-3 {
    margin-left: 269px;
  }
  .u-header .u-text-4 {
    margin-right: 297px;
  }
  .u-header .u-text-5 {
    margin-top: -35px;
    margin-right: 221px;
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-top: -42px;
  }
  .u-header .u-text-1 {
    margin-left: 318px;
  }
  .u-header .u-text-2 {
    margin-right: 544px;
    margin-left: 0;
  }
  .u-header .u-text-3 {
    margin-left: 206px;
  }
  .u-header .u-text-4 {
    margin-right: 227px;
  }
}
@media (max-width: 767px) {
  .u-header .u-text-1 {
    margin-left: 239px;
  }
  .u-header .u-text-2 {
    margin-right: 364px;
  }
  .u-header .u-text-3 {
    margin-left: 155px;
  }
  .u-header .u-text-4 {
    margin-right: 170px;
  }
  .u-header .u-text-5 {
    margin-right: 166px;
  }
}
@media (max-width: 575px) {
  .u-header .u-text-1 {
    margin-left: 150px;
  }
  .u-header .u-text-2 {
    margin-right: 164px;
  }
  .u-header .u-text-3 {
    margin-left: 98px;
  }
  .u-header .u-text-4 {
    margin-right: 107px;
  }
  .u-header .u-text-5 {
    margin-right: 105px;
  }
}</style>
