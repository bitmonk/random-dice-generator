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
            <option value="0" selected="selected">0 Dice </option>
            <option value="1">1 Dice </option>
            <option value="2">2 Dice </option>
            <option value="3">3 Dice </option>
            <option value="4">4 Dice </option>
            <option value="5">5 Dice </option>
            <option value="6">6 Dice </option>
            <option value="7">7 Dice </option>
            <option value="8">8 Dice </option>
            <option value="9">9 Dice </option>
            <option value="10">1 Dice </option>
            <option value="11">11 Dice </option>
            <option value="12">12 Dice </option>
            <option value="13">13 Dice </option>
            <option value="14">14 Dice </option>
            <option value="15">15 Dice </option>
            <option value="16">16 Dice </option>
            <option value="17">17 Dice </option>
            <option value="18">18 Dice </option>
            <option value="19">19 Dice </option>
            <option value="20">20 Dice </option>
            <option value="21">21 Dice </option>
            <option value="22">22 Dice </option>
            <option value="23">23 Dice </option>
            <option value="24">24 Dice </option>
            <option value="25">25 Dice </option>
            <option value="26">26 Dice </option>
            <option value="27">27 Dice </option>
            <option value="28">28 Dice </option>
            <option value="29">29 Dice </option>
            <option value="30">30 Dice </option>
            <option value="31">31 Dice </option>
            <option value="32">32 Dice </option>
            <option value="33">33 Dice </option>
            <option value="34">34 Dice </option>
            <option value="35">35 Dice </option>
            <option value="36">36 Dice </option>
            <option value="37">37 Dice </option>
            <option value="38">38 Dice </option>
            <option value="39">39 Dice </option>
            <option value="40">40 Dice </option>
            <option value="41">41 Dice </option>
            <option value="42">42 Dice </option>
            <option value="43">43 Dice </option>
            <option value="44">44 Dice </option>
            <option value="45">45 Dice </option>
            <option value="46">46 Dice </option>
            <option value="47">47 Dice </option>
            <option value="48">48 Dice </option>
            <option value="49">49 Dice </option>
            <option value="50">50 Dice </option>
            <option value="51">51 Dice </option>
            <option value="52">52 Dice </option>
            <option value="53">53 Dice </option>
            <option value="54">54 Dice </option>
            <option value="55">55 Dice </option>
            <option value="56">56 Dice </option>
            <option value="57">57 Dice </option>
            <option value="58">58 Dice </option>
            <option value="59">59 Dice </option>
            <option value="60">60 Dice </option>
            <option value="61">61 Dice </option>
            <option value="62">62 Dice </option>
            <option value="63">63 Dice </option>
            <option value="64">64 Dice </option>
            <option value="65">65 Dice </option>
            <option value="66">66 Dice </option>
            <option value="67">67 Dice </option>
            <option value="68">68 Dice </option>
            <option value="69">69 Dice </option>
            <option value="70">70 Dice </option>
            <option value="71">71 Dice </option>
            <option value="72">72 Dice </option>
            <option value="73">73 Dice </option>
            <option value="74">74 Dice </option>
            <option value="75">75 Dice </option>
            <option value="76">76 Dice </option>
            <option value="77">77 Dice </option>
            <option value="78">78 Dice </option>
            <option value="79">79 Dice </option>
            <option value="80">80 Dice </option>


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

<div class="dice dice-one"><i class="fa-solid fa-dice-one fa-5x icon"></i></div>
<div class="dice dice-two"><i class="fa-solid fa-dice-two fa-5x"></i></div>
<div class="dice dice-three"><i class="fa-solid fa-dice-three fa-5x"></i></div>
<div class="dice dice-four"><i class="fa-solid fa-dice-four fa-5x"></i></div>
<div class="dice dice-five"><i class="fa-solid fa-dice-five fa-5x"></i></div>
<div class="dice dice-six"><i class="fa-solid fa-dice-six fa-5x"></i></div>
<div class="dice dice-seven"><i class="fa-solid fa-dice-six fa-5x"></i></div>


    </div>
         
         </div>
        
    </form>

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

        <button type="button" onclick="rollDice()">Roll</button>
    </body>
    </html>
