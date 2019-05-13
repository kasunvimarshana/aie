<!DOCTYPE html>
<html>
<body>

<h1>The template Tag</h1>

<p>Click the button to get the content from a template, and display it in the web page.</p>

<button onclick="showContent()">Show content</button>

<template>
  <h2>Flower</h2>
  <img src="img_white_flower.jpg" width="214" height="204">
</template>

<script>
function showContent() {
  var temp = document.getElementsByTagName("template")[0];
  var clon = temp.content.cloneNode(true);
  document.body.appendChild(clon);
}
</script>

</body>
</html>
