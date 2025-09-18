


function calculadora (operacao, a, b){
    switch(operacao){
        case 'somar':
      function somar (a,b) {
         return a+b;
} 
             console.log(somar(a,b));
             break; 

        case 'subtrair':
         function subtrair (a,b)
          {
             return a-b;
        } 
            console.log(subtrair(a,b));
            break;


            case 'dividir':
            function dividir (a,b)
          {
             return a/b;
        } 
            console.log(dividir(a,b));
            break;


        case 'multi':
             function multi (a,b)
          {
             return a*b;
        } 
            console.log(multi(a,b));
            break;

        default:
            console.log("OPERAÇÃO INVALIDA");
            break;
    }
    return;
}

calculadora("multi",12,4)

