/*  TEST DOC DOESN'T WORK YET */

/*document.getElementById("Apple").addEventListener("click", function(){
  console.log(1);
});*/

var name = [];
var quantity = [];
var price = [];

function test() {
  console.log("test 1.1");
  name = "Apple";
  console.log(name);
}

function addItem() {
  name = "Apple";
  price = 1;
  window.location.href = "Cart.html";
  updateCart();
//  window.location.href = "Cart.html";
}
