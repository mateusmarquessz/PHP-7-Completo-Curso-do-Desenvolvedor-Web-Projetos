const escola = "Cod3r"

console.log(escola.charAt(4)) // Mostrando na tela a de numero 4
console.log(escola.charAt(5)) //Retornou valor nenhum
console.log(escola.charCodeAt(3)) // Ele retorna o codigo da tabela unicode
console.log(escola.indexOf('3')) // Ele retorna o indice que esta associado a palavra escola

console.log(escola.substring(1)) // Significa que a partir do indice 1 ate o final ele vai mostra na tela
console.log(escola.substring(0, 3))  // Significa que a partir do indice 0 ate o indice 3 sem incluir o indice 3 comeco e fim

console.log('Escola '. concat(escola).concat("!"))// adicionando coisas na variavel
console.log(escola.replace(3, 'e')) //subistuitindo o valor de 3 para "e"

console.log('Ana,Maria,Pedro'.split(',')) //VETOR