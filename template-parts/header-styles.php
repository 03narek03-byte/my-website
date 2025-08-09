<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:ital,wght@0,100..900;1,100..900|Open+Sans:ital,wght@0,300..800;1,300..800">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 80px;
}
.u-header .u-menu-1 {
  margin: 24px 0 22px auto;
}
.u-header .u-nav-1 {
  font-weight: 700;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: normal;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
  margin: 20px auto 0;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    width: auto;
  }
}</style>
