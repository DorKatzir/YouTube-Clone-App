const list = document.getElementsByClassName('list-item')
// console.log(list)
// console.log(Array.from(list).length)
// for (let item of list) {
//     console.log(item);
// }

Array.from(list).forEach((item) => {
    console.log(item)
})

