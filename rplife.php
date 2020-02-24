<!doctype html>
<html>
  
<head>
  <meta charset="utf-8">
  <?php include('head.php') ?>
  <title>RPLife</title>
</head>
  
<body class="blue">
  
  <?php
    include('header.php')
  ?>
  
  <div class="grid-container margin-top-32" style="position: relative;">
    <div class="grid-66 margin-top-32">
      <div class="app_title app_title-page">
        <h1 class="white">
          <img src="img/rplife-appicon-icon.png" alt="RPLife icon" width="56" height="56" style="transform: translateY(-3px);">
          RPLife
          <span>for iPhone</span>
        </h1>
      </div>
      <p class="subtitle white">
        The task manager <br>
        that helps you evolve IRL.
      </p>
      <div class="dl-buttons">
        <a href="https://apps.apple.com/us/app/rplife/id1468074490" class="appstore-rplife"><img src="img/appstore.svg" alt="Download RPLife on the App Store"></a>
      </div>
    </div>
    <div class="hide-on-mobile">
      <img src="img/rplife-page-home@2x.png" alt="RPLife capture" style="height: 100%; position: absolute; bottom: 0; right: 32px ;">
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop">
      <img src="img/rplife-page-home@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white margin-top-0">
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/rplife-page-organize@2x.png" alt="RPLife capture" class="full-width">
    </div>
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Organize your tasks by skills</h2>
      <p>
        Add your daily tasks,<br>
        and assign them to a skill.<br>
        <br>
        Every action matters.
      </p>
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/rplife-page-organize@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white">
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Complete your tasks</h2>
      <p>
        Every time you perform an action<br>
        mark it as done in RPLife.<br>
        <br>
        Keep track of your achievements.
      </p>
    </div>
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/rplife-page-complete@2x.png" alt="RPLife capture" class="full-width">
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/rplife-page-complete@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white">
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/rplife-page-watch@2x.png" alt="RPLife capture" class="full-width">
    </div>
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Watch your IRL skills evolve</h2>
      <p>
        Tasks help you gain XP on your skills.<br>
        It also increase your overall progress.<br>
        <br>
        Enjoy each step.
      </p>
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/rplife-page-watch@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white">
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Create ambitious projects</h2>
      <p>
        Group your tasks into projects,<br>
        simply visualize their progress.<br>
        <br>
        You’ll even earn more XP.
      </p>
    </div>
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/rplife-page-projects@2x.png" alt="RPLife capture" class="full-width">
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/rplife-page-projects@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white">
    <div class="grid-33 hide-on-mobile margin-top-48 margin-bottom-32">
      <img src="img/rplife-page-dark@2x.png" alt="RPLife capture" class="full-width">
    </div>
    <div class="grid-66 margin-top-64 margin-bottom-32">
      <h2>Join the Dark Side!</h2>
      <p>
        RPLife offers a nicely crafted dark mode.<br>
        You can force it or let the system decide.<br>
        <br>
        Take care of your eyes.
      </p>
    </div>
    <div class="mobile-grid-70 mobile-prefix-15 hide-on-desktop margin-bottom-32">
      <img src="img/rplife-page-dark@2x.png" alt="RPLife capture" class="full-width">
    </div>
  </div>
  
  <div class="grid-container block block-white">
    <div class="grid-100 margin-top-64 margin-bottom-64">
      <h2>Crafted for your iPhone</h2>
      <h3>Fed up with ugly multiplatform apps?</h3>
      <p class="margin-bottom-8">
        Yes I am.<br>
        Apps must be made carefully for your OS.<br>
      </p>
      <p>
        Available in <em>english</em> and <em>french</em>!
      </p>
    </div>
  </div>
  
  <div class="grid-container margin-top-64">
    <h2 class="white">Get RPLife for iPhone today</h2>
    <div class="dl-buttons">
      <a href="https://apps.apple.com/us/app/rplife/id1468074490" class="appstore-rplife"><img src="img/appstore.svg" alt="Download RPLife on the App Store"></a>
    </div>
  </div>
    
  <?php include('footer-rplife.php') ?>
  
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#ffffff",
        "text": "#3d3d3e"
      },
      "button": {
        "background": "#007aff",
        "text": "#ffffff"
      }
    },
    "theme": "classic"
  });
  </script>
  
  <script type="text/javascript">
    var rplifeButtons = document.getElementsByClassName('appstore-rplife');
    var i;
    for (i = 0; i < rplifeButtons.length; i++) {
      rplifeButtons[i].addEventListener('click', function() {
        fbq('trackCustom', 'AppStoreClick', {app: 'rplife'});
      }, false);
    }
  </script>
  
</body>
</html>
