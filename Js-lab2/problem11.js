var x,y,z;
x=prompt();
y=prompt();
z=prompt();
var x= parseInt(x);
var y = parseInt(y);
var z = parseInt(z);
let result1 = x % 10;
let result2 = y % 10;
let result3 = z % 10;
if(result1 == result2 && result1 == result3) {
window.alert("they have the same last number");
}else{
window.alert("they don't have the same last number"); }