<!DOCTYPE html>
<html>
  <head>
    <title>Calculator</title>
  </head>
  <body bgcolor="skyblue">

<!--form-->

    <form method="post" action="calculator.php" align="center">
      <b>Value 1:</b>
      <input type="text" name="value1" size="10" placeholder="Enter a value"></inupt>
      <b>Value 2:</b>
      <input type="text" name="value2" size="10" placeholder="Enter a value"></inupt>
      
      <b>Select operator:</b>
      <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
      </select>
      <input type="Submit" name="cal" value="Calculate"></inupt>
    </form><hr>

<!--php-->

    <?php
    if(isset($_POST['cal'])){
    
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $opt = $_POST['operator'];
    if($opt == '+'){
    echo "<center><h2>Your answer is: <b style='color:red;'>";
    echo $value1 + $value2;
    echo "</b></h2></center>";
    }
    if($opt == '-'){
    echo "<center><h2>Your answer is: <b style='color:red;'>";
    echo $value1 - $value2;
    echo "</b></h2></center>";
    }
    if($opt == '*'){
    echo "<center><h2>Your answer is: <b style='color:red;'>";
    echo $value1 * $value2;
    echo "</b></h2></center>";
    }
    if($opt == '/'){
    echo "<center><h2>Your answer is: <b style='color:red;'>";
    echo round($value1 / $value2);
    echo "</b></h2></center>";
    }
    }
    ?>
  </body>
</html>