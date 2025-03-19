<!DOCTYPE html>
<!-- ICS2O-Unit2-02-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Area & Perimeter program, in JS!" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The Area & Perimeter program, in JS!</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area & Perimeter program, in JS!</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img
          src="./images/area_and_perimeter.png"
          alt="white text showing rectangle calculations on black background, image" />
      </div>
      <div class="page-content">
        <p>The dimensions of a rectangle are: 5cm and 3cm.</p>
      </div>
      <div class="page-content-answer">
        <!-- basic text -->
        <div id="area">
          <p>The area is:</p>
        </div>
        <div id="perimeter">
          <p>The perimeter is:</p>
        </div>
      </div>
      <!-- Raised button with ripple -->
      <button
        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        onclick="doMathClicked()"
        type="button">
        Do math
      </button>
    </main>
  </div>
</body>

</html>
