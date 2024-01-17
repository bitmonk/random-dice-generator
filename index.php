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
    <img src="./images/logo.png" class="logo-image" alt="404">
    
    <div class="wrapper">
        <form action="" method="post">
        <h3 class="title2">CHOOSE YOUR DICE</h3>
            <div class="select-wrapper">
            
            <div class="dice-amount">
            <select name="dice-amount" id="dice-amount">
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo "<option value=\"$i\">" . $i . " Dice </option>";
                        }?>
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

    
<div class="roll-area">

<div class="dice dice-one"><i class="fa-solid fa-dice-two fa-5x"></div>
<div class="dice dice-two"><i class="fa-solid fa-dice-two fa-5x"></i></div>
<div class="dice dice-three"><i class="fa-solid fa-dice-three fa-5x"></i></div>
<div class="dice dice-four"><i class="fa-solid fa-dice-four fa-5x"></i></div>
<div class="dice dice-five"><i class="fa-solid fa-dice-five fa-5x"></i></div>
<div class="dice dice-six"><i class="fa-solid fa-dice-six fa-5x"></i></div>
<div class="dice dice-seven"><i class="fa-solid fa-dice-six fa-5x"></i></div>


    </div>
    <div class="roll-button-wrapper">
          <input class="roll-button" type="button" value="ROLL !" onclick="rollDice()">  
    </div>
         </div>
  
</form>


</div>

    <p id="result"></p>



<script>
            function rollDice() {
                var numDice = document.getElementById('dice-amount').value;
                var numSides = document.getElementById('sided').value;

                var rollArea = document.querySelector('.roll-area');
                rollArea.innerHTML = ''; // Clear previous dice icon

                if (numSides === 'colour') {
                    var randomColor = '#' + Math.floor(Math.random()*16777215).toString(16)


                    document.getElementById('result').innerHTML = 'Result: <span style="color:' + randomColor + ';">' + randomColor + '</span>';
                } else {
                    var results = [];
                    var totalResult = 0;
                    for (var i = 0; i < numDice; i++) {
                        var dieResult = Math.floor(Math.random() * numSides) + 1;
                        results.push(dieResult);
                        totalResult += dieResult;
                    }

                    
                    document.getElementById('result').innerText = results.join(' ');
                    document.getElementById('result').innerHTML += '<br>Result: ' + totalResult;
                }
            }
        </script>
    
    </body>
    </html>