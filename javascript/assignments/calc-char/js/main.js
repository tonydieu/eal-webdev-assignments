function calcChar() {
  var t = 0;
  var foo = document.getElementById("textInput").value;

  for (var i = 0; i <= foo.length; i++) {

    if (foo.charAt(i) == "t") {
      t++;
    }
  }
  alert(t);
}