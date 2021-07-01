/* Auto Display.js*/
function autoDisplay() {

    var currentClock = new Date().getHours();


	// This was changed temporary for debugging purposes
    if (7 <= currentClock&&currentClock < 19) {
     document.write("<link rel='stylesheet' href='../../System_Files/css/day-time/Home-UI-Accessible-Zoom.css' type='text/css'>");
     document.write("<link rel='stylesheet' href='../../System_Files/css/day-time/Home-UI-Buttons.css' type='text/css'>");
    }


    else {
     document.write("<link rel='stylesheet' href='../../System_Files/css/night-time/Home-UI-Buttons.css' type='text/css'>");
     document.write("<link rel='stylesheet' href='../../System_Files/css/night-time/Home-UI-Accessible-Zoom.css' type='text/css'>");
    }


}

autoDisplay();
