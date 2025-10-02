

var input = prompt('Le nombre € que vous voulez convertir en USD')
var result = input / 0.88351
var resultRounded = Math.round(result * 100) / 100;

document.getElementById('input').innerHTML = "Montant en euro: " + input.toString();
document.getElementById('result').innerHTML = "Montant en dollar: " + resultRounded