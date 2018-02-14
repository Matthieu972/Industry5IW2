var a = Number(prompt("Entrez un nombre : "));
var b = 8;

for (var i = 0; i < 10; i++) {
    console.log('a : ' + a);
    a += b+i;
    if (a < 50) {
        console.log('Voici la valeur de A : ' + a);
    }
    if (b < 10) {
        console.log('Voici la valeur de B : ' + b);
    }
    b++;
}
