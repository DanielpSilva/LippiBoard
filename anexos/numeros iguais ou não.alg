Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/02/2019
Var
// Seção de Declarações das variáveis 
n1, n2 : real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("digite o primeiro numero: ")
leia(n1)
escreval("digite o segundo numero: ")
leia(n2)

se (n1 > n2) entao
   escreval("o primeiro numero é maior que o segundo")
senao
     se (n1 < n2)  entao
        escreval("o primeiro numero é menor que o segundo")
     senao
        escreval("os numeros são iguais")
     fimse
fimse
Fimalgoritmo