var nome = "texto"
let idade = 25;
const documento = 123

if (idade >=18) { // condição
    // se verdadeiro
    console.log("é maior de idade")
} else {
    // se falso
    console.log("é menor de idade")
}

// switch case
switch (idade) {
case 25: 
   console.log("Sua classificação é ouro");
   break;
case 26: 
   console.log("Sua classificação é prata");
   break;
case 27: 
   console.log("Sua classificação é bronze");
   break;
default:
    console.log("impossivel definir sua classificação");
    break;

}


{
let x = 1;
let y = 5;

console.log(x = x + 4)
console.log(y = y - 4)
}


    let ladoA = 5;
    let ladoB = 5;
    let ladoC = 5;

if (ladoA == ladoB && ladoB == ladoC) {
    console.log("é um trinagulo equilátero");
} else if (ladoA != ladoB && ladoB != ladoC && ladoA != ladoC) {
    
}
