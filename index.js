// Задание 1

const students = [
    { name: 'Павел', age: 20 },
    { name: 'Иван', age: 20 },
    { name: 'Эдем', age: 20 },
    { name: 'Денис', age: 20 },
    { name: 'Виктория', age: 20 },
    { age: 40 },
]

const result = pickPropArray(students, 'name')

console.log(result) 

function pickPropArray(array, prop) {
    let result = []
    array.forEach(item => {
        if (item.hasOwnProperty(prop)) {
            result.push(item[prop]);
        }
    });
    return result;
}

// Задание 2

function createCounter() {
    let counter = 0;

    return function () {
        counter++;
        console.log(counter);
    }
}

const counter1 = createCounter()
counter1() // 1
counter1() // 2

const counter2 = createCounter()
counter2() // 1
counter2() // 2

// Задание 3

function spinWords(string) {
    let result = "";
    let words = string.split(" ");
    words.forEach(word => {
        if (word.length >= 5) {
            result = result + word.split("").reverse().join("") + " ";
        }
        else {
            result = result + word + " ";
        }
    });
    return result.trim();
}

const result1 = spinWords( "Привет от Legacy" )
console.log(result1) // тевирП от ycageL

const result2 = spinWords( "This is a test" )
console.log(result2) // This is a test

// Задание 4

function sumTwoNums(nums, target) {
    for (let i = 0; i < nums.length; i++) {
        for (let j = i + 1; j < nums.length; j++) {
            if (nums[i] + nums[j] == target) {
                return [i, j];
            }
        }
    }
}

let nums = [2,7,11,15]
let target = 9

console.log(sumTwoNums(nums, target))

