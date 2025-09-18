// let array = [1, 2, 3, 4, 5];
// array[5] = 10;
// console.log(array);
// array[5] = 152.1;
// console.log(array);

let matriz = []
    for ( let a = 1; a <=10; a++) {
          let linha = [];
          for (let b = 1; b <= 10; b++); {
          let h = Math.sqrt(a**2 + b**2).toFixed(2);
          linha.push(h);
          }
        matriz.push(linha);
    }