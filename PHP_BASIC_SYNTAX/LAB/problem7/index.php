<?php

    if(isset($_GET['calculate'])){
        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];
        $operation = $_GET['operation'];
        $output = "";
        if($operation == "sum"){
            $output = ($num1 + $num2);
        }else if($operation == "substrct"){
            $output =  ($num1 - $num2);
        }else {
            $output = "Invalid operation";
        }
    }

?>

<form method="get">
    <div>
        Operation:
        <select name="operation" >
            <option value="sum">Sum</option>
            <option value="substract">Substract</option>
        </select>
    </div>
    <div>
        Number 1
        <input type="text" name="number1">
    </div>
    <div>  
        Number 2
        <input type="text" name="number2">
    </div>
    <div>
        <?php if(isset($output)): ?>
            <input type="text" value="<?php echo $output; ?>" disabled />
        <?php endif; ?>
    </div>
    <div>
        <input type="submit" name="calculate" value="Calculate">
    </div>
</form>