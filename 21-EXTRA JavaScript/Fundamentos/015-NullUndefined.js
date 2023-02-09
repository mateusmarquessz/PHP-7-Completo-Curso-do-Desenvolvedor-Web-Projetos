let valor // nao inicializada
console.log(valor)

valor = null // ausencia de valor
//sempre use null caso voce queira zerar o valor de uma variavel
console.log(valor)
// console.log(valor.toString()) //erro

const produto = {}

console.log(produto.preco)
console.log(produto)

produto.preco = 3.50
console.log(produto)

produto.preco = undefined // evite atribuir undefined
console.log(!!produto.preco)
console.log(produto)