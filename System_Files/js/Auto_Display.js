/* Auto Display.js*/
function autoDisplay() {

    var currentClock = new Date().getHours();


	// This was changed temporary for debugging purposes
    if (17 <= currentClock&&currentClock < 11) {
     document.write("<link rel='stylesheet' href='../../System_Files/css/day.css' type='text/css'>");
    }


    else {
     document.write("<link rel='stylesheet' href='../../System_Files/css/night.css' type='text/css'>");
    }


}

autoDisplay();
