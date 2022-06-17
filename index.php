<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
function updateOutput() {
//calculate
	//get form
    var form = document.getElementById("calculator");
    	//get output
    var out = form.elements["output"];
            //get two numbers
    var num1 = parseInt(form.elements["num1"].value);
    var num2 = parseInt(form.elements["num2"].value);

            //get operator
    var operator = parseInt(form.elements["operant"].value);

    	//set output depending on operator
    switch(operator)
    {
        //add
        case 0:
        out.value = num1+num2;
        break;
        //subtract
        case 1: out.value = num1-num2;
        break;
        //multiply
        case 2: out.value = num1*num2;
        break;
        //divide
        case 3: out.value = (num1/num2).toFixed(1);//only one digit after decimal place
        break;
        default:
        break;
    }

}   
</script>
</head>
<h1>My Smart Calculator</h1>
<body>
    <div class="el">
    <form id="calculator" oninput="updateOutput()">
        <!--input and output elements-->
        <input name="num1" type="number" value="0" />

        <select name="operant" onchange="updateOutput()">
            <optgroup>
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">×</option>
            <option value="3">÷</option>
        </optgroup>
        </select>
        
        <input name="num2" type="number" value="0" />

        <div class="equals"> = </div>
        <output name="output" for="num1 num2">0</output>
    </form>
</div>
</body>
</html>
