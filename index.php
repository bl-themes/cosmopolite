<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body>
    <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>
  <!-- Navbar -->
  <?php include(THEME_DIR_PHP.'topbar.php'); ?>
  <!-- Content -->
  <?php
    if ($WHERE_AM_I == 'page') {
    if ($page->slug() == 'error') {
      include(THEME_DIR_PHP.'error.php');
    }
      else {
      include(THEME_DIR_PHP.'page.php');
    }
    } else {
      include(THEME_DIR_PHP.'home.php');
    }
  ?>
    
    <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>
  <!-- JS -->
    <?php
    echo Theme::js('js/bootstrap.bundle.min.js');
  ?>
    <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>
  </body>
</html>