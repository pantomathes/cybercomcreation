var m;
m = 116+94+123/3
j = 89+120+103/3

if (m > j) {
    console.log("Mark's team is a winner with a average score of "+ m);
}
else{
    console.log("john's team is a winner with a average score of "+ j);
}

var m1 = prompt("Enter the score of Marks's match 1")
var m2 = prompt("Enter the score of Marks's match 2")
var m3 = prompt("Enter the score of Marks's match 3")
m = m1+m2+m3/3

var j1 = prompt("Enter the score of john's match 1")
var j2 = prompt("Enter the score of john's match 2")
var j3 = prompt("Enter the score of john's match 3")
j = j1+j2+j3/3


if (m>j) {
    console.log("Mark's team is a winner with a average score of "+ m);
}
if (m<j) {
    console.log("John's team is a winner with a average score of "+ j);
}
if (m == j) {
    console.log("Match Draw "+ m);
}