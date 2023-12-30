<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
window.addEventListener('scroll', function() {
  var aiRobot = document.getElementById('ai-robot'); // Your moving robot element
  var aiRobot1Position = document.getElementById('ai-robot1').offsetTop; // Y-position of the second robot
  var aiRobot2Position = document.getElementById('ai-robot2').offsetTop; // Y-position of the third robot

  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var stopPosition1 = aiRobot1Position - aiRobot.offsetHeight; // Stop above the second robot by the height of the first robot
  var stopPosition2 = aiRobot2Position - aiRobot.offsetHeight; // Stop above the third robot by the height of the first robot

  if(scrollPosition >= stopPosition2) {
    // If scrolled past the third robot position, stop the first robot there
    aiRobot.style.position = 'absolute';
    aiRobot.style.top = stopPosition2 + 'px';
  } else if(scrollPosition >= stopPosition1) {
    // If scrolled past the second robot position but not yet past the third, stop at the second
    aiRobot.style.position = 'absolute';
    aiRobot.style.top = stopPosition1 + 'px';
  } else {
    // If not scrolled to the second robot yet, keep the first robot fixed
    aiRobot.style.position = 'fixed';
    aiRobot.style.top = '0px';
  }
});
</script>
<!-- end Simple Custom CSS and JS -->
