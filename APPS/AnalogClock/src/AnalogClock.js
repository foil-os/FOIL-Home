/* AnalogClock.js */

(function(){
    var ticker = function() {
      var now = new Date(),
          seconds = now.getSeconds(),
          minutes = now.getMinutes(),
          hours = now.getHours();
      
      hours = ((hours > 11 ? hours - 12 : hours) / 12) * 60;
      
      document.querySelector(".clock__hours").dataset.value = hours;
      document.querySelector(".clock__seconds").dataset.value = seconds;
      document.querySelector(".clock__minutes").dataset.value = minutes;
    }
    
    setInterval(ticker, 100);
  })();