var mark_mass = prompt("Enter the mass of Mark")
var john_mass = prompt("Enter the mass of John")
var mark_height = prompt("Enter the Height of Mark")
var john_height = prompt("Enter the Height of John")

mark_bmi = mark_mass/mark_height*mark_height
john_bmi = john_mass/john_height*john_height

var result

if (mark_bmi > john_bmi) {
    result = true
}
else {
    result = false
}

console.log("Is Mark's BMI higher than JOHN? "+ result)