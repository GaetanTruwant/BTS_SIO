function eurodol() {
    var value = document.getElementById("montant").value;
    result = value * 1.32030
    var resultRounded = Math.round(result * 100) / 100;
    document.getElementById('eur').innerHTML = "Montant en euro: " + value
    document.getElementById('dol').innerHTML = "Montant en dollar: " + resultRounded
};
function doleur() {
    var value = document.getElementById("montant").value;
    result = value / 1.32030
    var resultRounded = Math.round(result * 100) / 100;
    document.getElementById('eur').innerHTML = "Montant en euro: " + value
    document.getElementById('dol').innerHTML = "Montant en dollar: " + resultRounded
}