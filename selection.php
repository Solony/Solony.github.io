<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://threejs.org/build/three.js"></script>
<script src="https://threejs.org/examples/js/controls/OrbitControls.js"></script>
<script src="https://threejs.org/examples/js/loaders/PLYLoader.js"></script>
<style>
html, body {
  margin: 0;
  padding: 0;
}
img {
    width: 30%;
    height: 30%;
}
.content {
    background-color: black;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
audio {
    display: hidden;
}
</style>
</head>
<body>

<div id="images-set" class="content">
    <img src="./gif/original.gif" onclick="showmodel()" onmouseover="hover(this);" onmouseout="unhover(this);"></img>
</div>

<audio id='sound-effect' src='./gif/sound-effect.wav'/>
</body>
<script>
function hover(element) {
  element.setAttribute('src', './gif/onmouse.gif');
  var thissound = document.getElementById('sound-effect');
  thissound.play();
}

function unhover(element) {
  element.setAttribute('src', './gif/original.gif');
  var thissound = document.getElementById('sound-effect');
  thissound.pause();
  thissound.currentTime = 0;
}

function showmodel() {

}

</script>
</html>
