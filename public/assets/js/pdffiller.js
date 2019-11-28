
define(function (require) {
  var pdfFiller = require('pdffiller');
});

var sourcePDF = "../images/test.pdf";
var destinationPDF =  "../images/test_complete.pdf";
var data = {
    "last_name" : "John",
    "first_name" : "Doe",
    "date" : "Jan 1, 2013",
    "football" : "Off",
    "baseball" : "Yes",
    "basketball" : "Off",
    "hockey" : "Yes",
    "nascar" : "Off"
  };

console.log("hey there2");

pdfFiller.fillForm( sourcePDF, destinationPDF, data, function(err) {
    if (err) throw err;
    console.log("In callback (we're done).");
});

console.log("hey there 3");
