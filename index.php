<html>


<head>


        <title>FOIL Home</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="/System_Files/css/FOIL-Bar.css" rel="stylesheet">


        <link href="/System_Files/css/FOIL-UI.css" rel="stylesheet">


        <link href="/System_Files/css/index.css" rel="stylesheet">


        <link href="config.css" rel="stylesheet">


</head>



<body>

        <!-- 
      This is where the buttons take place
      For example, Apps like Calculator, Analog Clock, and Settings are placed on the FOIL-UI Navigation bar for more 
      easier access, instead of eariler software versions of FOIL-Home. 
      
      -->


        <div class="FOIL-Navigation-Bar">
                <FOIL-Font-Size-19></FOIL-Font-Size-19>
                <FOIL-Font-Size-13>
                        <script src="Greeting.js"></script>
                </FOIL-Font-Size-13>



                <!-- APPS -->

                <a href="../../APPS/Calculator/index.php" class="FOIL-button">Calculator</a>
                <a href="../../APPS/AnalogClock/index.php" class="FOIL-button">Analog Clock</a>
                <a href="../../APPS/Settings/index.php" class="FOIL-button">Settings</a>


                <!-- Functions for Shutdown and Restart -->

                <button class="FOIL-button">
                        <FOIL-Font-Size-31>&#9212; </FOIL-Font-Size-31>
                        <FOIL-Font-Size-13>Shutdown</FOIL-Font-Size-14>
                </button>


                <button class="FOIL-button">
                        <FOIL-Font-Size-31>&#9212;</FOIL-Font-Size-31>
                        <FOIL-Font-Size-13>Restart</FOIL-Font-Size-14>
                </button>

        </div>





        <div class="FOIL-Layout">
                <div class="window-blinds-effect">


                        <FOIL-Font-Size-92>
                                <div id="time_service"></div>
                        </FOIL-Font-Size-92>


                        <h2>
                                <script src="/System_Files/js/Greeting.js"></script>
                        </h2>
                        <script src="/System_Files/js/FOIL-Time.js"></script>


                </div>

        </div>


        </div>


</body>


</html>