function test() {
  document.location = "./login.php";
}
function hash() {
  var test = prompt("Veuillez entrer ce que vous voulez hash");
  console.log(sha512(test))
}
