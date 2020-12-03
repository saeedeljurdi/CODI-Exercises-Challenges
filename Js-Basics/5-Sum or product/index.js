var n = prompt("Enter a number: ");
var choice = prompt("Choose whether to add (+) or multiply (x):");
var sum = 0;
var multiply = 1;
if (choice == "+") {
    for (var i = 1; i <= n; i++) {
        sum = sum + i;
    }
    document.writeln(sum);
} else if (choice == "x") {
    for (var i = 1; i <= n; i++) {
        multiply = multiply * i;
    }
    document.writeln(multiply);
}
