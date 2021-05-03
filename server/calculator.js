let num1;  // Создаём переменную где будет хранится значение первого числа
let num2;  // Создаём переменную где будет хранится значение второго числа

// Создаём переменную и берём элемент, куда будет выводится результат 
let out = document.getElementById('out');

// функция сложения
function plus() {
    num1 = document.getElementById('n1').value;
    num1 = parseInt(num1)
    num2 = document.getElementById('n2').value;
    num2 = parseInt(num2)

    out.innerHTML = num1 + num2;
}

// функция вычитания
function minus() {
    num1 = document.getElementById('n1').value;
    num1 = parseInt(num1)
    num2 = document.getElementById('n2').value;
    num2 = parseInt(num2)

    out.innerHTML = num1 - num2;
}

// функция умножения
function multiplication() {
    num1 = document.getElementById('n1').value;
    num1 = parseInt(num1)
    num2 = document.getElementById('n2').value;
    num2 = parseInt(num2)

    out.innerHTML = num1 * num2;
}

// функция деления
function division() {
    num1 = document.getElementById('n1').value;
    num1 = parseInt(num1)
    num2 = document.getElementById('n2').value;
    num2 = parseInt(num2)

    out.innerHTML = num1 / num2;
}