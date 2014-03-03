var str = "Dette er en tekst";
var n = str.length;
var array =[];
var t = 0;
alert("Der er " + n + " tegn.");

for (var i = 0; i <= str.length; i++) {
  var foo = str.charAt(i);

  if (str.charAt(i) == "t") {
    t++;
  }
    document.write(foo);
};

alert("Vi fandt " + t + " t'er.");
