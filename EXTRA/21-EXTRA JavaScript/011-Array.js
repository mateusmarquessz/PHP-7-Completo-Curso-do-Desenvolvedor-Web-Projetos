//Array = Vetor

const valores = [7.3,6.2,32,3.2]
console.log(valores[0], valores[3]) //mostrando os valores no vetor na posicao 0 ate 3
console.log(valores[4])// gera undefined

valores[4] = 10
console.log(valores)
console.log(valores. length)// Vai dizer quantos elementos que tem o vetor

valores.push({id: 3}, false, null, 'teste')//voce pode misturar coisas dentro do vetor, mas nao e o ideal
console.log(valores)


console.log(valores.pop())//Ele pega o ultimo valor do vetor e retornar ele na tela
delete valores[0]// ele retira o elemento de dentro da posicao selecionada
console.log(valores)

console.log(typeof valores)// mostrando qual tipo e o vetor, no caso object