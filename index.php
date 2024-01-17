<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll Dice</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/fponticelli/dicefont/fc6b8c47/dist/dicefont/dicefont.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>ONLINE DICE</h1>
    <h2>CHOOSE YOUR DICE</h2>
    <div class="wrapper">
        <form action="" method="post">
            <div class="select-wrapper">
            <div class="dice-amount">
            <select name="dice-amount" id="dice-amount">
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

         <!-- Roll Dice Area -->
    <!-- <div class="tabletop">
        <div class="dice-wrapper size-100 rounded-dice">
            <i class="df-solid-small-dot-d6-6">
        </div> -->
    
        <!-- <i class="df-solid-small-dot-d6-6"> -->
    
    
    </div>
<div class="roll-area">

<div class="dice dice-one"><i class="fa-solid fa-dice-one"></i></div>
<div class="dice dice-two"><i class="fa-solid fa-dice-two"></i></div>
<div class="dice dice-three"><i class="fa-solid fa-dice-three"></i></div>
<div class="dice dice-four"><i class="fa-solid fa-dice-four"></i></div>
<div class="dice dice-five"><i class="fa-solid fa-dice-five"></i></div>
<div class="dice dice-six"><i class="fa-solid fa-dice-six"></i></div>




    </div>
         





         </div>
  <input type="submit" value="ROLL !">
</form>


</div>


    <script>
  var diceSelect = document.getElementById("dice-amount");

  for (var i = 1; i <= 100; i++) { 
    var option = document.createElement("option");
    option.value = i;
    option.text = i + " DICE";
    diceSelect.add(option);
  }
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="https://kit.fontawesome.com/e8b54f58bf.js" crossorigin="anonymous"></script>
</body>
</html>