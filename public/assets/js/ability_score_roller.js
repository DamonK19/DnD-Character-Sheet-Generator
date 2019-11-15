//  Get all classes named "generate"
var generateList = document.getElementsByClassName('generate');
//  Get all classes named "ability-score"
var scoreList = document.getElementsByClassName('ability-score');
//  Iterate over generateList
for (var i = 0; i < generateList.length; i++) {
  //  Associate an ID with generate element
  generateList[i].associated_scoreList_id = scoreList[i].id;
  //  Give on-click function
  generateList[i].onclick = function() {
    //  Get associated id from button
    var target_ID = document.getElementById(this.associated_scoreList_id);
    //  Write sum to target_ID
    target_ID.innerHTML = ability_score_roll();
  }
}

function ability_score_roll() {
  const rolls = [d6.roll(), d6.roll(), d6.roll(), d6.roll()];
  //  Remove lowest roll in rolls
  const best_rolls = removeSmallestFromArray(rolls);
  //  Find total among best_rolls using reduce
  sum = best_rolls.reduce((a, b) => a + b, 0);
  //  Write sum to target_ID
  return sum;
}

$( "#strength" ).val(ability_score_roll());
$( "#charisma" ).val(ability_score_roll());
$( "#dexterity" ).val(ability_score_roll());
$( "#intelligence" ).val(ability_score_roll());
$( "#wisdom" ).val(ability_score_roll());
$( "#constitution" ).val(ability_score_roll());
