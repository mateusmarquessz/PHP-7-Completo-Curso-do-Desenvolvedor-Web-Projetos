
/*
O que e uma funcao
imagine que uma funcao seja igual uma receita de bolo e um verbo dessa receita, ou no caso uma acao, ela executa um 
processo baseado na senteca de codigo

Ela define um bloco associado delimitado por Chaves

Uma funcao como uma receita de bolo ela recebe alguns ingredientes de entradas que sao os dados que voce vai receber dentro dessa funcao, 
voce vai fazer todo o passo a passo que e a receita. Por exemplo coloque dois ovos com 150 ml de leite

De qualquer forma uma funcao e um bloco de codigo e essse bloco eventualmente voce vai dar um nome a ele

entao uma funcao e um bloco de codigo nomeado para que voce possa chamar esse bloco de codigo quantas vezes voce quiser se voce quiser usar esse trecho de codigp agrupado pelo corpo da funcao 

A funcao recebe paramentros de entrada que sao seus ingrediente e voce executa o algoritmo ou no caso o passo a passo de todas as sentencas de codigo e no final retorna um valor
*/

//funcao sem retorno
function imprimirSoma(a, b) {
    console.log(a + b)
}

imprimirSoma(2,3) // chamando a funcao e dando valores para as variaves
imprimirSoma(2) // vai dar certo, mas vai retornar NULL
imprimirSoma(2,3,4,5,6,7,8) // vai dar certo, e ele vai ignorar o resto
imprimirSoma() // vai dar certo, porem nao vai somar nada


//funcao com retorno
function soma(a, b = 1){
    return a+b
}

console.log(soma(2,3)) // vai retorna a soma com resultado 5 pq deu valor para b
console.log(soma(2)) // vai retorna o 3, pois o valor padrao e 1
console.log(soma()) // retorna NaN