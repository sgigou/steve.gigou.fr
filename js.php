<!-- Cookie consent -->
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

<!-- iBepo -->
<script type="text/javascript">
  var ibepoButtons = document.getElementsByClassName('appstore-ibepo');
  var i;
  for (i = 0; i < ibepoButtons.length; i++) {
    ibepoButtons[i].addEventListener('click', function() {
      fbq('trackCustom', 'AppStoreClick', {app: 'ibepo'});
    }, false);
  }
</script>

<!-- RPLife -->
<script type="text/javascript">
  var rplifeButtons = document.getElementsByClassName('appstore-rplife');
  var i;
  for (i = 0; i < rplifeButtons.length; i++) {
    rplifeButtons[i].addEventListener('click', function() {
      fbq('trackCustom', 'AppStoreClick', {app: 'rplife'});
    }, false);
  }
</script>

<!-- Habitudes -->
<script type="text/javascript">
  var habitudesButtons = document.getElementsByClassName('appstore-habitudes');
  var i;
  for (i = 0; i < habitudesButtons.length; i++) {
    habitudesButtons[i].addEventListener('click', function() {
      fbq('trackCustom', 'AppStoreClick', {app: 'habitudes'});
    }, false);
  }
</script>