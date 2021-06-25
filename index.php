<html>
   <head>
      <title>FOIL Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="/System_Files/css/FOIL-Bar.css" rel="stylesheet">
      <link href="/System_Files/css/Home-UI-Home-Screen-Main-Screen-Day.css">
      <link href="/System_Files/css/Home-UI-Home-Screen-Secondary-Screen-Night.css">
      <link href="System_Files/css/Home-UI-Buttons.css" rel="stylesheet">
      <link href="System_Files/css/Home-UI-Accessible-Zoom.css" rel="stylesheet">
      <noscript>
         <link href="/System_Files/css/index.css" rel="stylesheet">
      </noscript>
   </head>
   
   <body>
      <div class="home-screen-main-screen color">
         <div class="window-blinds-effect">
            <h1>
               <div id="time_service"></div>
            </h1>
            <h2>
               <script src="/System_Files/js/Greeting.js"></script>
            </h2>
            <script src="/System_Files/js/FOIL-Time.js"></script>
         </div>
      </div>
      </div>
      
      <div class="home-screen-secondary-screen color">
            <a href="#Applications" class="button">Applications</a>
            <?php include("System_Files/php/system-applications-menu.php"); ?>
      </div>
   </body>
</html>
