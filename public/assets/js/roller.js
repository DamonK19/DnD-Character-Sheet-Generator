function getRandom() {
    return Math.round(Math.random() * (6 - 1) + 1);
};

// document.querySelector('.generate').onclick = function () {
// 	document.querySelector('.ability-score').textContent = getRandom();
// };

var generateList = document.getElementsByClassName('generate');
var scoreList = document.getElementsByClassName('ability-score');
// for (var i = 0; i < generateList.length; i++) {
//     var current_generater = generateList[i];
//     current_generater.onclick = function() {
//         scoreList[i].innerHTML = getRandom();
//     };
// }

for (var i = 0; i < generateList.length; i++) {
  scoreList[i].textContent = getRandom();
}

// for (var i = 0; i < generateList.length; i++) {
//       var current_generater = generateList[i];
//       current_generater.onclick = function() {
//         console.log("ugh");
//
//       }
// }
