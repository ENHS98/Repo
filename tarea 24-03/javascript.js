/*
var array = [1, 2, 3, 4];
console.log(array);
let sum = 0;

for (let i = 0; i < array.length; i++) {
    sum += array[i];
}
console.log("La suma es de: ",sum);
*/

//ejercicio 1
var num1=5;
var multi1=0;
    for(var i=1; i<=10; i++){
        multi1=num1*i;
        console.log(num1+" X "+i+" = "+multi1);
    }
    num1=num1+1;

console.log("_____________________________________________________")

//ejercicio 2
var num=5;
var num2=7;
var multi=0;
if(num>num2){
    console.log("No se puede procesar")
}else{
    for(var j=num; j<=num2; j++){
        console.log("Tabla del",num);
        for(var i=1; i<=10; i++){
            multi=num*i;
            console.log(num+" X "+i+" = "+multi);
        }
    num=num+1;
    console.log("_______________________________")
    }
}