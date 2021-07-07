cat <<EOF > ../../System_Files/css/day.css

body{
zoom: .80;
}



body {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  background-color: black;
}

h1 {
  font-size: 70px;
}


/* Window Blinds Effect */
.window-blinds-effect {
  resize: vertical;
  overflow: auto;
}

/* Status Bar for the Time Indicator and other options */
.main-indicator-screen {
  position: relative;
  top: 10px;
  overflow: none;
}

.main-indicator-screen-left {
  position: absolute;
  text-align: left;
  margin-left: 20px;
}

.main-indicator-screen-right {
  position: relative;
  text-align: right;
}

/* Home Screen Main Screen on the top with options*/
.home-screen-main-screen {
  background-color:red;
  color: black;
  padding: 100px 1px;
  border-radius: 20px;
  animation-name: home_screen_main_screen_animation;
  animation-duration: 1s;
  
}

.home-screen-main-screen.color {
	background-color: rgb(67, 69, 91);
	color:black;
}

/* Home Screen Secondary Screen on the bottom with options */
.home-screen-secondary-screen {
  background-color: transparent;
  color: black;
  padding: 88px 1px;
  border-radius: 0px;
  overflow: none;
  animation-name: home_screen_main_secondary_screen_animation;
  animation-duration: 1s;
}

.home-screen-secondary-screen.color {
	background-color: transparent;
	color:black;
}

/* Buttons with Options */
.button {
  font-size: 18px;
  background-color: rgb(49, 49, 49);
  padding: 16px 32px;
  margin: 27px;
  border-radius: 20px;
  text-decoration: none;
  color: white;
  transition-duration: 0.2s;
  display: inline-block;
}

.button:hover {
  background-color: rgb(170, 111, 0);
}

.button:active {
  background-color: rgb(0, 153, 0);
}



/* Animations */
@keyframes home_screen_main_secondary_screen_animation {
  from {
    background-color: white;
    padding: 880px 1px;
  }
  to {
    background-color: black;
    padding: 88px 1px;
  }
}

@keyframes home_screen_main_screen_animation {
  from {
    background-color: black;
    padding: 880px 1px;
  }
  to {
    background-color: white;
    padding: 88px 1px;
  }
}


EOF

