/* FOIL Time.js */
/* FOIL-Time.js displays the 24 hour time and the date */

/* 24 hour Clock */

function clock() {
    var time = new Date(),
      // Hours
        hours = time.getHours(),
        // Minutes 
        minutes = time.getMinutes(),

        // Seconds is invisable
        seconds = time.getSeconds();
    document.querySelectorAll('.clock')[0].innerHTML = FOIL(hours) + ":" + FOIL(minutes);

    function FOIL(calculate) {
        if (calculate < 10) {
            calculate = '0' + calculate
        }
        return calculate
    }
}



// Interval must be set to 0 in order to sync to system time 
setInterval(clock, 0);



// arrayMonth only displays 12 objects for the 12 months of the year. See Line 56
var arraymonth=[
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December"];



function date(){
var d=new Date();
var outputmonth=d.getMonth(),outputdate=d.getDate(),outputyear=d.getFullYear();




var display=
// Sync the arraymonth into outputmonth which is equals to getMonth which contains the 12 months of the year on the arraymonth array 
""+arraymonth[outputmonth]


+" "
// Display the Date
+outputdate
+", "
// Display the Year
+outputyear+"";
// Call the Function

document.getElementById('date').innerHTML=display;
}


date();
// Interval must be 0 in order to sync to system time
setInterval(date,0);