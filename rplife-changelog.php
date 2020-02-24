<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <?php include('head.php') ?>
  <title>Changelog — RPLife</title>
</head>

<body class="light">
  
  <?php
    include('header.php')
  ?>
  
  <div class="grid-container margin-top-32 margin-bottom-32">
    <h1>Changelog</h1>
    <p class="subtitle margin-bottom-0">RPLife</p>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.3.0 <span>— 31/01/2020</span></h2>
      </div>
      <h3>New</h3>
      <ul>
        <li>It is now possible to create projects! They are attached to a skill, contain tasks and bring XP!</li>
      </ul>
      <h3>Improved</h3>
      <ul>
        <li>Better popup to move a task or project.</li>
        <li>The inbox now displays the XP of the user's general level.</li>
      </ul>
      <h3>Fixed</h3>
      <ul>
        <li>Adding a task in another skill than the one displayed still made it appear in the list.</li>
        <li>When adding a task, the checkbox could display a wrong icon.</li>
        <li>The bars could sometimes display a progress lower than the real one.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.2.1 <span>— 20/11/2019</span></h2>
      </div>
      <h3>Improved</h3>
      <ul>
        <li>Added a visual tutorial to help new users.</li>
        <li>Haptic feedbacks are more relevant.</li>
      </ul>
      <h3>Fixed</h3>
      <ul>
        <li>Fixed a display problem with some titles.</li>
        <li>Links in settings page are now working.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.2.0 <span>— 07/10/2019</span></h2>
      </div>
      <h3>New</h3>
      <ul>
        <li>Please welcome the new dark mode! Use it always, never, or let it follow your system preferences.</li>
        <li>A settings screen now allows you to configure the app, contact me and get information about the application.</li>
        <li>Checkboxes can now be placed on the left; this mode has been designed for left-handed people, but some right-handed people can also enjoy it.</li>
      </ul>
      <h3>Improved</h3>
      <ul>
        <li>The spaces at the end of skills and tasks titles are now deleted, so you can use auto-completion easier.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.1.0 <span>— 12/09/2019</span></h2>
      </div>
      <h3>New</h3>
      <ul>
        <li>You can now choose between infinite or one-shot tasks.</li>
      </ul>
      <h3>Improved</h3>
      <ul>
        <li>Better logos.</li>
        <li>Better animations.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.0.2 <span>— 07/08/2019</span></h2>
      </div>
      <h3>Fixed</h3>
      <ul>
        <li>The level in the header now gets the color of the skill.</li>
        <li>Fixed a bug with tasks reordering.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.0.1 <span>— 01/08/2019</span></h2>
      </div>
      <h3>Improved</h3>
      <ul>
        <li>New <strong>app logo</strong>.</li>
        <li>New <strong>colors</strong> for skills.</li>
        <li>Better <strong>launch screen</strong>.</li>
      </ul>
    </div>
  </div>
    
  <div class="grid-container text-block block block-white margin-bottom-64">
    <div class="grid-100 margin-top-32 margin-bottom-32">
      <div class="app_title">
        <h2>v1.0.0 <span>— 11/07/2019</span></h2>
      </div>
      <h3>New</h3>
      <ul>
        <li>You can now <em>create skills</em>.</li>
        <li>You can also <em>create tasks</em> in a given skill or in the inbox.</li>
        <li>The app displays your <strong>level</strong> and the level of each of your skills.</li>
      </ul>
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
