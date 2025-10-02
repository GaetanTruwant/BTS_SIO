function submit() {
    var value = document.getElementById("montant").value;
    result = value * 1.32030;
    var resultRounded = Math.round(result * 100) / 100;

    document.getElementById('input').innerHTML = "Montant en euro: " + value
    document.getElementById('result').innerHTML = "Montant en dollar: " + resultRounded
}