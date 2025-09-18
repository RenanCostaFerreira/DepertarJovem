function fibo(limitador){
var x;
let a =1;
let b = 2;
let resultado;
for(x = 1; x <= limitador; x++){
    resultado = a+b;
    console.log(resultado)
    a = b 
    b = resultado
}
return;
}

fibo(100)