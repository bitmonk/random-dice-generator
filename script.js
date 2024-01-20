

function rollDice() {
    var numDice = document.getElementById('dice-amount').value;
    var numSides = document.getElementById('sided').value;

    var fourSidedArea = document.querySelector('.four-sided-wrapper');
    fourSidedArea.innerHTML = '';

    var totalResult = 0;



    if (numSides === '4') {
        for (let i = 0; i < numDice; i++) {
            let randomNumber = Math.floor(Math.random() * 4) + 1;
    
            var diceDiv = document.createElement("div");
            diceDiv.className = "four-sided";
    
            var diceShape = document.createElement("i");
            diceShape.className = "bi bi-triangle";
    
            var diceNumber = document.createElement("p");
            diceNumber.className = "four-sided-number";
    
            diceDiv.appendChild(diceShape);
            diceDiv.appendChild(diceNumber);
            diceNumber.innerHTML = randomNumber;
    
            // Append each four-sided dice to the container
            fourSidedArea.appendChild(diceDiv);
    
            totalResult += randomNumber;
        }
    
        // Display the total result (sum of all dice rolls)
        var resultArea = document.getElementById('result');
        resultArea.textContent = 'RESULT: ' + totalResult;

        fourAnimation(numDice, 1700);
    } else if (numSides === '6') {
        
        for (let i = 0; i < numDice; i++) {
            const diceClasses = ['dice-one', 'dice-two', 'dice-three', 'dice-four', 'dice-five', 'dice-six'];
            const randomIndex = Math.floor(Math.random() * diceClasses.length);
        
            var diceDiv = document.createElement("div");
            diceDiv.className = "dice " + diceClasses[randomIndex];
        
            var diceIcon = document.createElement("i");
            diceIcon.className = "fa-solid fa-" + diceClasses[randomIndex] + " fa-5x icon";
        
            diceDiv.appendChild(diceIcon);
            fourSidedArea.appendChild(diceDiv);
        
            totalResult += randomIndex + 1;
        
            // Set the color for the recently created dice element
            diceDiv.style.color = '#ffffff';
            fourSidedArea.style.gap = '1rem';
        }
        

        var resultArea = document.getElementById('result');
        resultArea.textContent = 'RESULT: ' + totalResult;


    } else if (numSides === '8') {
        for (let i = 0; i < numDice; i++) {
            let randomNumber = Math.floor(Math.random() * 8) + 1;
    
            var diceDiv = document.createElement("div");
            diceDiv.className = "eight-sided";
    
            var diceShape = document.createElement("i");
            diceShape.className = "bi bi-diamond";
    
            var diceNumber = document.createElement("p");
            diceNumber.className = "eight-sided-number";
    
            diceDiv.appendChild(diceShape);
            diceDiv.appendChild(diceNumber);
            diceNumber.innerHTML = randomNumber;
    
            // Append each eight-sided dice to the container
            fourSidedArea.appendChild(diceDiv);
    
            totalResult += randomNumber;
        }
    
        // Display the total result (sum of all dice rolls)
        var resultArea = document.getElementById('result');
        resultArea.textContent = 'RESULT: ' + totalResult;
    
}else if (numSides === '10') {
    for (let i = 0; i < numDice; i++) {
        let randomNumber = Math.floor(Math.random() * 8) + 1;

        var diceDiv = document.createElement("div");
        diceDiv.className = "ten-sided";

        var diceShape = document.createElement("i");
        diceShape.className = "bi bi-pentagon";

        var diceNumber = document.createElement("p");
        diceNumber.className = "ten-sided-number";

        diceDiv.appendChild(diceShape);
        diceDiv.appendChild(diceNumber);
        diceNumber.innerHTML = randomNumber;

        // Append each eight-sided dice to the container
        fourSidedArea.appendChild(diceDiv);

        totalResult += randomNumber;
    }

    // Display the total result (sum of all dice rolls)
    var resultArea = document.getElementById('result');
    resultArea.textContent = 'RESULT: ' + totalResult;

}
else if (numSides === '12') {
    for (let i = 0; i < numDice; i++) {
        let randomNumber = Math.floor(Math.random() * 8) + 1;

        var diceDiv = document.createElement("div");
        diceDiv.className = "twelve-sided";

        var diceShape = document.createElement("i");
        diceShape.className = "bi bi-hexagon";

        var diceNumber = document.createElement("p");
        diceNumber.className = "twelve-sided-number";

        diceDiv.appendChild(diceShape);
        diceDiv.appendChild(diceNumber);
        diceNumber.innerHTML = randomNumber;

        // Append each eight-sided dice to the container
        fourSidedArea.appendChild(diceDiv);

        totalResult += randomNumber;
    }

    // Display the total result (sum of all dice rolls)
    var resultArea = document.getElementById('result');
    resultArea.textContent = 'RESULT: ' + totalResult;
}
else if (numSides === '20') {
    for (let i = 0; i < numDice; i++) {
        let randomNumber = Math.floor(Math.random() * 8) + 1;

        var diceDiv = document.createElement("div");
        diceDiv.className = "twenty-sided";

        var diceShape = document.createElement("i");
        diceShape.className = "bi bi-octagon";

        var diceNumber = document.createElement("p");
        diceNumber.className = "twenty-sided-number";

        diceDiv.appendChild(diceShape);
        diceDiv.appendChild(diceNumber);
        diceNumber.innerHTML = randomNumber;

        // Append each eight-sided dice to the container
        fourSidedArea.appendChild(diceDiv);

        totalResult += randomNumber;
    }

    // Display the total result (sum of all dice rolls)
    var resultArea = document.getElementById('result');
    resultArea.textContent = 'RESULT: ' + totalResult;
}
else if (numSides === 'colour') {
    var colorNames = ['Red', 'Blue', 'Green', 'Yellow', 'Purple', 'Orange', 'Purple', 'Maroon','Gray','Fuchsia'];
    const randomIndex = Math.floor(Math.random() * colorNames.length);
    var randomColorName = colorNames[randomIndex];

    var diceDiv = document.createElement("div");
    diceDiv.className = "dice";

    var diceIcon = document.createElement("i");
    diceIcon.className = "fa-solid fa-dice-one fa-5x icon";
    diceDiv.appendChild(diceIcon);
    fourSidedArea.appendChild(diceDiv);

    diceDiv.style.color = randomColorName;

    var allDiceDivs = document.getElementsByClassName('dice');
    for (let j = 0; j < allDiceDivs.length; j++) {
        allDiceDivs[j].style.color = randomColorName;
    }


    var resultArea = document.getElementById('result');
    resultArea.textContent = 'RESULT: ' + randomColorName;
} 
    else {
        document.getElementById('result').innerHTML = 'Result:' + totalResult;
    }
}

function fourAnimation(numDice, duration) {
    console.log("Four animation..");

    var animationArea = document.createElement("div");
    animationArea.className = "four-animation";

    var rollDiv = document.createElement("div");
    rollDiv.className = "four-animation-roll";

    var rollTitle = document.createElement("h2");
        rollTitle.className = "title4";
        rollTitle.innerHTML = "FINGERS CROSSED !";

        animationArea.appendChild(rollTitle);

    // Create four-sided-number divs initially
    for (let i = 0; i < numDice; i++) {
        var diceDiv = document.createElement("div");
        diceDiv.className = "four-roll";

        var diceShape = document.createElement("i");
        diceShape.className = "bi bi-triangle";

        var diceNumber = document.createElement("p");
        diceNumber.className = "four-sided-number";

        diceDiv.appendChild(diceShape);
        diceDiv.appendChild(diceNumber);
        rollDiv.appendChild(diceDiv);
    }

    function updateDiceNumbers() {
        for (let i = 0; i < numDice; i++) {
            let randomNumber = Math.floor(Math.random() * 4) + 1; // Adjust the range as needed
            var diceDiv = rollDiv.children[i];
            var diceNumber = diceDiv.querySelector(".four-sided-number");
            diceNumber.innerHTML = randomNumber;
        }
    }

    // Set an interval to update dice numbers every 100 milliseconds (adjust as needed)
    var intervalId = setInterval(updateDiceNumbers, 100);

    animationArea.appendChild(rollDiv);
    document.body.appendChild(animationArea);

    // Clear the interval after the specified duration
    setTimeout(function () {
        clearInterval(intervalId);
        document.body.removeChild(animationArea);
    }, duration);
}


