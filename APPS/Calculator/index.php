<html>
    <head>
        <title>Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./src/calculator.css" rel="stylesheet">
    </head>
    <body>
        <center>
    <form name=calculator>
    <table>
        <tr>
            <td colspan=5>
                <input name=display id=display disabled>
        <tr>
            <td>
                <input name=one onclick='calculator.display.value+="1"' class="button" type=button value=1>
            <td>
                 <input name=two onclick='calculator.display.value+="2"' class="button" type=button value=2>
            <td>
                <input name=three onclick='calculator.display.value+="3"' class="button" type=button value=3>
            <td>
                <input name=plus onclick='calculator.display.value+="+"' class="button" type=button value=+ class=operator>
        <tr>
            <td>
                <input name=four onclick='calculator.display.value+="4"' class="button" type=button value=4>
            <td>
                <input name=five onclick='calculator.display.value+="5"' class="button" type=button value=5>
            <td>
                <input name=six onclick='calculator.display.value+="6"' class="button" type=button value=6>
            <td>
                <input name=minus onclick='calculator.display.value+="-"' class="button" type=button value=- class=operator>
        <tr>
            <td>
                <input name=seven onclick='calculator.display.value+="7"' class="button" type=button value=7>
            <td>
                <input name=eight onclick='calculator.display.value+="8"' class="button" type=button value=8>
            <td>
                <input name=nine onclick='calculator.display.value+="9"' class="button" type=button value=9>
            <td>
                <input name=times onclick='calculator.display.value+="*"' class="button" type=button value=x class=operator>
        <tr>
            <td>
                <input name=clear onclick='calculator.display.value=""' class="button" type=button value=RESET id=clear>
            <td>
                <input name=zero onclick='calculator.display.value+="0"' class="button" type=button value=0>
            <td>
                <input name=doit onclick="calculator.display.value=eval(calculator.display.value)" class="button" type=button value="=">
            <td>

                <input name=div onclick='calculator.display.value+="/"' class="button" type=button value=/ class=operator>
                <a href="../../index.php" class="button">Back to Home Menu</a>

            </td>
        </tr>
        </td>
        </tr>


    </table>
</form>
        </center>
    </body>
</html>