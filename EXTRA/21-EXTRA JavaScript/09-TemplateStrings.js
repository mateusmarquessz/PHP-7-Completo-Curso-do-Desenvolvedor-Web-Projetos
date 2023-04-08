const nome = 'Rebeca'
const concatenacao = 'Ola' + nome + '!'
const template = `
        ola
        ${nome}!`
console.log(concatenacao, template)


//expressoes

console.log(`1+1 = ${1 + 1}`)

const up = s => s.toUpperCase()
console.log(`Ei... ${up('cuidado')}!`)
