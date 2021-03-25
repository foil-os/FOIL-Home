<!--
┌─────────────────────────────────────┐
│                                     │
│     ┌─────────────────────────┐     │
│     │        CALCULATOR       │     │
│     └─────────────────────────┘     │
│                                     │
│     ┌────┐ ┌────┐ ┌────┐   ┌────┐   │
│     │ 7  │ │ 8  │ │ 9  │   │ x  │   │
│     │    │ │    │ │    │   │    │   │
│     └────┘ └────┘ └────┘   └────┘   │
│                                     │
│     ┌────┐ ┌────┐ ┌────┐   ┌────┐   │
│     │ 4  │ │ 5  │ │ 6  │   │ -  │   │
│     │    │ │    │ │    │   │    │   │
│     └────┘ └────┘ └────┘   └────┘   │
│                                     │
│     ┌────┐  ┌────┐ ┌────┐ ┌──────┐  │
│     │ 1  │  │ 2  │ │ 3  │ │  +   │  │
│     │    │  │    │ │    │ │      │  │
│     └────┘  └────┘ └────┘ └──────┘  │
│                                     │
│                                     │
│                                     │
│                                     │
└─────────────────────────────────────┘
-->
<html>


<head>


<title>Calculator</title>


<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="./src/calculator.css" rel="stylesheet">


<link href="../../System_Files/css/FOIL-UI.css" rel="stylesheet">


<link href="../../System_Files/css/day.css" rel="stylesheet">

<link href="../../System_Files/css/accessibility.css" rel="stylesheet">
</head>


<body>


<div class="FOIL-Navigation-Bar color-is-green">


<a href="../../index.php" class="FOIL-button-small color-is-red">Back</a>


</div>


<div class="FOIL-Layout color-is-green">


<div id='result'>


<form name="calculator">


<input type="text" name="answer" />


<br>


<input type="button" value=" 1 " class="button" onclick="calculator.answer.value += '1'" />


<input type="button" value=" 2 " class="button" onclick="calculator.answer.value += '2'" />


<input type="button" value=" 3 " class="button" onclick="calculator.answer.value += '3'" />


<input type="button" value=" + " class="button"onclick="calculator.answer.value += '+'" />


<br/>

<input type="button" value=" 4 " class="button"onclick="calculator.answer.value += '4'" />


<input type="button" value=" 5 " class="button" onclick="calculator.answer.value += '5'" />


<input type="button" value=" 6 " class="button" onclick="calculator.answer.value += '6'" />


<input type="button" value=" - " class="button" onclick="calculator.answer.value += '-'" />

<br>


<input type="button" value=" 7 " class="button" onclick="calculator.answer.value += '7'" />


<input type="button" value=" 8 "  class="button" onclick="calculator.answer.value += '8'" />


<input type="button" value=" 9 "  class="button" onclick="calculator.answer.value += '9'" />


<input type="button" value=" x "  class="button" onclick="calculator.answer.value += '*'" />


</br>

<input type="button" value=" c "  class="button" onclick="calculator.answer.value = ''" />


<input type="button" value=" 0 "  class="button" onclick="calculator.answer.value += '0'" />


<input type="button" value=" = "  class="button" onclick="calculator.answer.value = eval(calculator.answer.value)" />


<input type="button" value=" / "  class="button" onclick="calculator.answer.value += '/'" />


</br>


<br>


</div>


</form>


</center>


</div>


</form>


</div>


</body>


</html>
