<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
<!-- Place this script tag at the end of your body or in the head with an 'onload' event -->

  // This function will create steam divs and append them to your coffee cup container
  function addSteamToCoffeeCup() {
    const coffeeCupContainer = document.getElementById('coffee-cup');
    if (coffeeCupContainer) {
      // Create and append steam divs
      for (let i = 0; i < 3; i++) {
        const steamDiv = document.createElement('div');
        steamDiv.className = 'steam';
        coffeeCupContainer.appendChild(steamDiv);
      }
    }
  }

  // Call the function to add steam when the document is fully loaded
  window.onload = addSteamToCoffeeCup;

</script>
<!-- end Simple Custom CSS and JS -->
