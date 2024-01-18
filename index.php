<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll Dice</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/fponticelli/dicefont/fc6b8c47/dist/dicefont/dicefont.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/marvin" rel="stylesheet">
                

</head>
<body>
    <img src="./images/logo.png" class="logo-image" alt="404">
    
    <div class="wrapper">
        <div>
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

<div class="dice dice-one"><i class="fa-solid fa-dice-one fa-5x"></i></div>
<div class="dice dice-two"><i class="fa-solid fa-dice-two fa-5x"></i></div>
<div class="dice dice-three"><i class="fa-solid fa-dice-three fa-5x"></i></div>
<div class="dice dice-four"><i class="fa-solid fa-dice-four fa-5x"></i></div>
<div class="dice dice-five"><i class="fa-solid fa-dice-five fa-5x"></i></div>
<div class="dice dice-six"><i class="fa-solid fa-dice-six fa-5x"></i></div>
    </div>
    
    <div class="result-wrapper">
    <p id="result">RESULT</p>
    </div>
    <div class="roll-button-wrapper">
          <input class="roll-button" type="button" value="ROLL !" onclick="rollDice()">  
    </div>
         </div>
                    </div>
</div>




<script>
    function rollDice() {
        var numDice = document.getElementById('dice-amount').value;
        var numSides = document.getElementById('sided').value;

        var rollArea = document.querySelector('.roll-area');
        rollArea.innerHTML = ''; // Clear previous dice icons

        var results = [];
        var totalResult = 0;

        for (let i = 0; i < numDice; i++) {
    // Array of dice class names
    const diceClasses = ['dice-one', 'dice-two', 'dice-three', 'dice-four', 'dice-five', 'dice-six'];

    // Get a random index from the array
    const randomIndex = Math.floor(Math.random() * diceClasses.length);

    // Apply the selected class to a random dice element
    const randomDiceElement = document.querySelector(`.dice.${diceClasses[randomIndex]}`);

    var diceResult = Math.floor(Math.random() * numSides) + 1;
    results.push(diceResult);
    totalResult += diceResult;

    console.log(diceResult);

    var diceDiv = document.createElement("div");
    diceDiv.className = "dice " + diceClasses[randomIndex]; // Use the random class here

    var diceIcon = document.createElement("i");
    diceIcon.className = "fa-solid fa-" + diceClasses[randomIndex] + " fa-5x icon"; // Use the same random class here

    diceDiv.appendChild(diceIcon);
    rollArea.appendChild(diceDiv);

    console.log(randomDiceElement);
}

        
        if (numSides === 'colour') {
            var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);

            document.getElementById('result').innerHTML = 'Result: <span style="color:' + randomColor + ';">' + randomColor + '</span>';
        } else {
            document.getElementById('result').innerText = results.join(' ');
            document.getElementById('result').innerHTML += '<br>Result: ' + totalResult;
        }
    }
</script>


<script src="https://kit.fontawesome.com/e8b54f58bf.js" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>