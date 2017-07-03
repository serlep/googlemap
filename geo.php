<!DOCTYPE html>
<html>
<head>
  <title>Simple Map</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <aside>
    <h1>Find your destination</h1>
    <nav>
      <ul>
        <li><a href="geo.php">MODE GEOLOC</a></li>
        <li><a href="index.php">MODE NORMAL</a></li>
      </ul>
    </nav>
    <form>
    <input id="destination-input" class="controls" type="text"
        placeholder="Enter a destination location">
   
    <br/>
    <div id="mode-selector" class="controls">
      <input type="radio" name="type" id="changemode-walking" checked="checked">
      <label for="changemode-walking">Walking</label>

      <input type="radio" name="type" id="changemode-transit">
      <label for="changemode-transit">Transit</label>

      <input type="radio" name="type" id="changemode-driving">
      <label for="changemode-driving">Driving</label>
    </div>
    </form>
    <div id="right-panel">
      <p>Total Distance: <span id="total"></span></p>
    </div>
  </aside>
  <div id="map"></div>
  
  <script type="text/javascript" src="script.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BVMReKemMiW5AKzplPQtowCEbaeY-fY&libraries=places&callback=initMap"
  async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
</body>
</html>
