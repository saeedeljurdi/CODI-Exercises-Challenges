var num = Math.floor((Math.random() * 100) + 1);
var count = 0;
for (var i = 1; i <= 8; i++) {
    var guess = prompt("Guess a number: ");
    if (guess != guess1) {
        count++;
    }
    var guess1 = guess;
    if (guess > num) {
        alert("too large trial " + count + "/8");
    } else if (guess < num) {
        alert("too small trial " + count + "/8");
    } else {
        alert("Correct with " + count + " trials!");
        break;
    }
}
