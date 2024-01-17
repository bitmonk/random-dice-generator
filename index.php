<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll Dice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>ONLINE DICE</h1>
    <div class="wrapper">
        <h2>CHOOSE YOUR DICE</h2>
        <form action="" method="post">
            <div class="select-wrapper">
            <div class="dice">
            <label for="dice"></label>
            <select name="dice" id="dice">
                <!-- <option value="1">1 DIE</option>
                <option value="2">2 DICE</option>
                <option value="3">3 DICE</option>
                <option value="4">4 DICE</option> -->
            </select>
         </div>

         <div class="sided">
            <select name="sided" id="sided">
            <option value="4">4-SIDED</option>
                <option value="6">6-SIDED</option>
                <option value="8">8-SIDED</option>
                <option value="10">10-SIDED</option>
                <option value="12">12-SIDED</option>
                <option value="20">20-SIDED</option>
                <option value="colour">COLOR DICE</option>
            </select>
         </div>
         </div>
  <input type="submit" value="ROLL !">
</form>


</div>


    <script>
  // Get the select element
  var diceSelect = document.getElementById("dice");

  // Add options dynamically
  for (var i = 1; i <= 100; i++) { // Assuming a standard six-sided die
    var option = document.createElement("option");
    option.value = i;
    option.text = i + " DICE";
    diceSelect.add(option);
  }
</script>
</body>
</html>