var k1516 = "PLS4YhFEqQEh1eXEhIKbY8Kyt0a64B5Tv6";
var k1415 = "PLS4YhFEqQEh0xWPxsDVmFQ-hkEuY4cDb1";
var k1314 = "PLS4YhFEqQEh3iW7Zj8J9YlBRoBzsPJ9uV";
var k1213 = "PLS4YhFEqQEh3SssYw62asgVAlZqgc65oN";
var k1112 = "PLS4YhFEqQEh2MIDZE6i1jgkaWDUL70snH";
var k1011 = "PLS4YhFEqQEh1a4jcwZvQj4O_ZQkYkIjsV";
var k0809 = "PLS4YhFEqQEh2c8_b2Kvbc3aixasiYaS-A";
var k0708 = "PLS4YhFEqQEh2ik1GMoCr_RanwEyg9qXxH";


function loadList(navId, listUrl) {
  $("#navTabs li").each(function() {
    $(this).removeClass('active');
  });
  $("#" + navId).addClass('active');
  $("#newsPL").attr("src", "https://www.youtube.com/embed/videoseries?list=" + listUrl);
}

$(document).ready(function() {
  loadList("1516l", k1516);
});

$("#1516a").on("click", function() {
  loadList("1516l", k1516);
});

$("#1415a").on("click", function() {
  loadList("1415l", k1415);
});

$("#1314a").on("click", function() {
  loadList("1314l", k1314);
});

$("#1213a").on("click", function() {
  loadList("1213l", k1213);
});

$("#1112a").on("click", function() {
  loadList("1112l", k1112);
});

$("#1011a").on("click", function() {
  loadList("1011l", k1011);
});

$("#0809a").on("click", function() {
  loadList("0809l", k0809);
});

$("#0708a").on("click", function() {
  loadList("0708l", k0708);
});
