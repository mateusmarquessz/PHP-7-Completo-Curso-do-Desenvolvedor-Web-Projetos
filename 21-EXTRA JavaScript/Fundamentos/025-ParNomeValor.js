//par nome/valor

const saudacao = 'opa' // contexto lexico 1

function exec(){
    const saudacao = "falaaaaaa" // contexto lexico 2
    return saudacao
}

//Objetos sao grupos aninhados de pares nomes/valor
const cliente = {
    nome: "Pedro",
    idade: 32,
    peso: 90,
    endereco: {
        lougradouro:"Rua Muito Legal",
        numero: 123,
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)