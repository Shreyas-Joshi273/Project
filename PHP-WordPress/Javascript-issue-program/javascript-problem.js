let obj1 = { 'key1': 1, 'key2' : 2, 'key3' : 3 };
let obj2 = obj1;
obj2.key1 = 'new1';
console.log( obj1 != obj2 );