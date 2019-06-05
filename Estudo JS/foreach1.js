// const aprovados = ['Agatha', 'Maria', 'Vitória', 'Stella', 'Barbara', 'Mariana', 'Zuleide'];

// Array.prototype.forEach2 = function(callback) {
//     for (let i = 0; i < this.length; i++)  {
//         callback(this[i], i , this);
//     }
// }

// aprovados.forEach2(function (nome, index) {  
//     console.log(`${index+1}) ${nome}`)
// });

Array.prototype.map2 = function (callback) {
    let arrayObjeto = [];
    for (let i = 0; i < this.length; i++) {
        arrayObjeto.push(callback(this[i], i, this));       
    }
    return arrayObjeto;
}
const carrinho = [
    '{ "nome" : "Lapis", "preco" : 3.14}', 
    '{ "nome" : "Caderno", "preco" : 41.01}',
    '{ "nome" : "Kit lapis", "preco" : 65.48}'
];

let preco = carrinho.map2(function (e) { 
    let arrayObjeto = JSON.parse(e);
    return arrayObjeto.preco;
 });

 console.log(preco)