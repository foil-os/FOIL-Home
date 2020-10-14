<!-- Settings App -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Application</title>
    <link href="settings.css" rel="stylesheet">
    <link href="../../System_Files/css/FOIL-UI.css" rel="stylesheet">

</head>

<body>
    <ul>
        <a href="settings.about.foil.home.menu.php" class="FOIL-button-small color-is-blue"><FOIL-Font-Size-33> &#9750;</FOIL-Font-Size-33></a>
    </ul>

    <div> 
        <h1> System Info </h1> 
        
        <!-- Script -->
        <p id="system_info"></p>

        <script>
            var system_info = /*Leave this one blank */ ""
            system_info += "<p>Browser CodeName: " + navigator.appCodeName + "</p>";
            system_info += "<p>Browser Name or based on : " + navigator.appName + "</p>";
            system_info += "<p>Browser Version: " + navigator.appVersion + "</p>";
            system_info += "<p>Cookies Enabled: " + navigator.cookieEnabled + "</p>"; 
            system_info += "<p>Browser Language: " + navigator.language + "</p>";
            system_info += "<p>Browser Online: " + navigator.onLine + "</p>";
            system_info += "<p>Platform: " + navigator.platform + "</p>";
            system_info += "<p>User-agent header: " + navigator.userAgent + "</p>";
            system_info += "<p>Vendor:" + navigator.vendor +"</p>";
            system_info += "<p>Version: v.0.7.1.1-beta" + "</p>";

            document.getElementById("system_info").innerHTML = system_info;
        </script>

    </div>
</body>

</html>
