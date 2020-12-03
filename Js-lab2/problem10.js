var m=prompt("enter an integer number ");
m=parseInt(m);
function myfunc(num){
if((num%2)==0){
return "even";
}else{return "odd";}
}
var x=myfunc(m);
window.alert(x);