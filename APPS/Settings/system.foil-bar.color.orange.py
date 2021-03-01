user = open("../../System_Files/css/FOIL-bar.css", "w")
user.write(
"""
/* 
  _____  ___  ___  _          ____               
 |  ___|/ _ \|_ _|| |        | __ )   __ _  _ __ 
 | |_  | | | || | | |        |  _ \  / _` || '__|
 |  _| | |_| || | | |___     | |_) || (_| || |   
 |_|    \___/|___||_____|    |____/  \__,_||_|   
                                            Build: FOIL HOME  
                                            Automatically Generated based on User's Preferences

*/

/* Triggers the Popup box */
.activate {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
}


.activate:target {
  visibility: visible;
  opacity: 1;
}


.separate {
  padding: 10px 1px;
}


.Options {
  margin: 2px auto;
  padding: 20px;
  text-align: left;
  background-color: rgb(167, 72, 14);
  border-radius: 20px;
  width: auto;
  position: center;
  color: white;
}


/* Options Colors */
.Options.color-is-red {
  background-color: rgba(185, 0, 0, 0.931);
  color: white;
}


.Options.color-is-black { 
  background-color: rgba(0, 0, 0, 0.931);
  color: white;
}


.Options.color-is-yellow {
  background-color: rgba(255, 217, 0, 0.931);
  color: black;
}


.Options.color-is-green {
  background-color: rgb(67, 91, 68);
  color: white;
}


.Options.color-is-blue {
  background-color: rgb(67, 69, 91);
  color: white;
}


.Options.color-is-orange {
  background-color: rgb(167, 72, 14);
  color: white;
}


.Options .close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 58px;
  font-weight: 500;
  text-decoration: none;
  color: red;
  transition-duration: 0.2s;
}


.Optionsclose {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 58px;
  font-weight: 500;
  text-decoration: none;
  color: white;
}


.Options .content {
  max-height: 30%;
  width: 30%;
  overflow: auto;
}


.close:hover {
  color: rgb(247, 111, 0);
}


.close:active {
  color: rgb(0, 153, 0);
}










""")
user.close()

user = open("../../System_Files/css/FOIL-bar.css", "r")
print(f.read()) 