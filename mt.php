<?php
// Set the maintenance mode to true
$maintenance_mode = true;

// If maintenance mode is true, display the maintenance page
if ($maintenance_mode) {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
    <style>
      /* Add some basic styling to the page */
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f0f0f0;
      }
      
      /* Add a cool CSS effect to the maintenance message */
      .maintenance-message {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        animation: blink 2s infinite;
      }
      
      @keyframes blink {
        0% {
          opacity: 1;
        }
        50% {
          opacity: 0.5;
        }
        100% {
          opacity: 1;
        }
      }
    </style>
  </head>
  <body><br>
  <br>
  <br>
  <br>
    <h1 class="maintenance-message">Our website is currently under maintenance. Please come back later!</h1>
    <h2 class="maintenance-message">HARY-IT</h2>
  </body>
  </html>
  <?php
  exit;
}
?>
