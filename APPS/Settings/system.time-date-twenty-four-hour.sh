cat <<EOF > ../../System_Files/js/FOIL-Time.js
/* FOIL Time.js */
/* FOIL-Time.js displays the 24 hour time, 12 hour time, and the date. */
/* THIS FILE HAS BEEN CHANGED AUTOMATICALLY BASED ON USERS PREFERENCES */

// Make a Function called "time()".
function time() {

    // Make a Variable called "DATE" to call the "new Date();" object.
    var DATE = new Date();
  
    // Make a Variable for Hours, Minutes, and AM or PM.
    var HOURS = DATE.getHours() , MINUTES = DATE.getMinutes(), INDICATOR;


    // Make a Variable called "PRINT".
    var PRINT = "" + HOURS + ":" + MINUTES;

    // Print out the time.
    document.getElementById("time_service").innerHTML = PRINT;
  }
  
    // Call the "time()" function.
   time();
  
   // Use "SetInterval" to update the clock per 1 second.
   setInterval(time, 1000);


   // Use "console.log" for the "time()" function.
   console.log(time + "*******************IT IS WORKING*******************************");

   // Use "SetInterval" for the console.log for the "time()" function.
   setInterval(console.log(time));


EOF
