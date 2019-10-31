// DICE
var d4 = {
  sides: 4,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}

var d6 = {
  sides: 6,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}

var d8 = {
  sides: 8,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}

var d10 = {
  sides: 10,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}

var d12 = {
  sides: 12,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}

var d20 = {
  sides: 20,
  roll: function () { return Math.floor(Math.random() * this.sides) + 1; }
}
