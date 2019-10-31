// Function that removes smallest number from an array
function removeSmallestFromArray(numbers) {
  var outputArr = []
  var smallest = numbers[0];
  for (var i = 0; i < numbers.length; i++) {
    if (numbers[i] < smallest) {
     smallest = numbers[i];
    }
  }
  for (var j = 0; j < numbers.length; j++) {
    if (j !== numbers.indexOf(smallest)) {
      outputArr.push(numbers[j]);
    }
  }
  return outputArr;
}
