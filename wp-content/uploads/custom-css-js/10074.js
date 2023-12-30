<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
window.addEventListener('scroll', function() {
  var aiRobot = document.getElementById('ai-robot');
  var aiRobot1 = document.getElementById('ai-robot1');
  var aiRobot2 = document.getElementById('ai-robot2');

  var robotRect = aiRobot.getBoundingClientRect();
  var robot1Rect = aiRobot1.getBoundingClientRect();
  var robot2Rect = aiRobot2.getBoundingClientRect();

  // The position where the robot should stop, relative to the viewport
  var stopPosition1 = window.scrollY + robot1Rect.top - robotRect.height;
  var stopPosition2 = window.scrollY + robot2Rect.top - robotRect.height;

  console.log('Scroll:', window.scrollY, 'Stop1:', stopPosition1, 'Stop2:', stopPosition2);

  // Check if we've scrolled past the stopPosition1
  if(window.scrollY > stopPosition1) {
    // If we're past stopPosition1, set the position to fixed and adjust the top position
    aiRobot.style.position = 'absolute';
    aiRobot.style.top = stopPosition1 + 'px';
  } else {
    // Otherwise, keep it fixed to the top of the viewport
    aiRobot.style.position = 'fixed';
    aiRobot.style.top = '0px';
  }

  // Check if we've scrolled past the stopPosition2
  if(window.scrollY > stopPosition2) {
    aiRobot.style.top = stopPosition2 + 'px';
  }
});
</script>
<!-- end Simple Custom CSS and JS -->
