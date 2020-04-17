<!doctype html>
<html>
  
<head>
  <meta charset="UTF-8">
  <?php include('head.php') ?>
  <title>Habitudes</title>
</head>

<body class="yellow">
  
  <?php include('header.php') ?>
  
  <!-- Intro -->
  <div class="grid-container margin-top-32" style="position: relative;">
    <div class="grid-66 margin-top-32">
      <div class="app_title app_title-page">
        <h1 class="white">
          <img src="img/habitudes-icon@2x.png" alt="Habitudes icon" width="56" height="56" style="transform: translateY(-3px);">
          Habitudes
          <span>for iPhone</span>
        </h1>
      </div>
      <p class="subtitle white">
        The easiest app <br>
        to track your habits.
      </p>
      <div class="dl-buttons">
        <!-- TODO: Link -->  
        <a href="https://apps.apple.com/us/app/rplife/id1468074490" class="appstore-habitudes"><img src="img/appstore.svg" alt="Download Habitudes on the App Store"></a>
      </div>
    </div>
    <div class="hide-on-mobile">
      <img src="img/habitudes-page-home@2x.png" alt="Habitudes capture" style="height: 100%; position: absolute; bottom: 0; right: 32px ;">
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop">
      <img src="img/habitudes-page-home@2x.png" alt="Habitudes capture" class="full-width">
    </div>
  </div>
  
  <!-- Routines -->
  <div class="grid-container block block-white margin-top-0">
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/habitudes-page-routines@2x.png" alt="Habitudes capture" class="full-width">
    </div>
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Define your routines</h2>
      <p>
        Use the default routines,<br>
        or create your own.<br>
        <br>
        Fine-tune your day.
      </p>
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/habitudes-page-routines@2x.png" alt="Habitudes capture" class="full-width">
    </div>
  </div>
  
  <?php include('footer-rplife.php') ?>
  <?php include('js.php') ?>
  
</body>
  
</html>