/*

Cоздать функцию greeting, которая принимает имя и выводит приветствие, 
используя переданное имя, в консоль.

Необходимо у пользователя запросить имя и вызвать функцию greeting, 
передав туда данное значение.

*/

function greeting(name) {
  console.log(`Hello, ${name}!`);
}

const userName = prompt("Please enter your name: ");

greeting(userName);
