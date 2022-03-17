<html>


<head>
    <title>Settings</title>
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
        <FOIL-Font-Size-13>
            <script src="Greeting.js"></script>
        </FOIL-Font-Size-13>

        <FOIL-Font-Size-24>
            <div id="time_service"></div>
        </FOIL-Font-Size-24>

        <h2>APPS</h2>
        <script src="/System_Files/js/FOIL-Time.js"></script>

        <!-- APPS -->

        <a href="../../index.php" class="FOIL-button-small">Back</a>
        <a href="../AnalogClock/index.php" class="FOIL-button-small">Analog Clock</a>
        <a href="../Settings/index.php" class="FOIL-button-small">Settings</a>

    </div>




    <div class="FOIL-Layout">
        <h1>
            <FOIL-Font-Size-54>
                Settings                                <!-- Settings Main Header -->
            </FOIL-Font-Size-54>
        </h1>

        
        <div class="FOIL-Layout">
            <h1>
                <FOIL-Font-Size-54>
                    Date and Time                        <!-- Date and time Sub-header -->
                </FOIL-Font-Size-54>
            </h1>
            <a href="#" class="FOIL-button">AM or PM</a>
            <a href="#" class="FOIL-button">24 hour time</a>
            <a href="#" class="FOIL-button">NO AM OR PM</a>
        </div>


    </div>


</body>


</html>