var slideIndex = 1;
showDivs(slideIndex);
var slideIndex2 = 1;
showDivs2(slideIndex2);
var slideIndex3 = 1;
showDivs3(slideIndex3);
var slideIndex4 = 1;
showDivs4(slideIndex4);
var slideIndex5 = 1;
showDivs5(slideIndex5);
var slideIndex6 = 1;
showDivs6(slideIndex6);

function plusDivs(n) {
  showDivs(slideIndex += n);
}
function plusDivs2(nn) {
  showDivs2(slideIndex2 += nn);
}
function plusDivs3(nnn) {
  showDivs3(slideIndex3 += nnn);
}
function plusDivs4(nnnn) {
  showDivs4(slideIndex4 += nnnn);
}
function plusDivs5(nnnnn) {
  showDivs5(slideIndex5 += nnnnn);
}
function plusDivs6(nnnnnn) {
  showDivs6(slideIndex6 += nnnnnn);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}
function currentDiv2(nn) {
  showDivs2(slideIndex2 = nn);
}
function currentDiv3(nnn) {
  showDivs3(slideIndex3 = nnn);
}
function currentDiv4(nnnn) {
  showDivs4(slideIndex4 = nnnn);
}
function currentDiv5(nnnnn) {
  showDivs5(slideIndex5 = nnnnn);
}
function currentDiv6(nnnnnn) {
  showDivs6(slideIndex6 = nnnnnn);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
function showDivs2(nn) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  if (nn > x.length) {slideIndex2 = 1}
  if (nn < 1) {slideIndex2 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex2-1].style.display = "block";
  dots[slideIndex2-1].className += " w3-white";
}
function showDivs3(nnn) {
  var i;
  var x = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("demo3");
  if (nnn > x.length) {slideIndex3 = 1}
  if (nnn < 1) {slideIndex3 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex3-1].style.display = "block";
  dots[slideIndex3-1].className += " w3-white";
}
function showDivs4(nnnn) {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("demo4");
  if (nnnn > x.length) {slideIndex4 = 1}
  if (nnnn < 1) {slideIndex4 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex4-1].style.display = "block";
  dots[slideIndex4-1].className += " w3-white";
}
function showDivs5(nnnnn) {
  var i;
  var x = document.getElementsByClassName("mySlides5");
  var dots = document.getElementsByClassName("demo5");
  if (nnnnn > x.length) {slideIndex5 = 1}
  if (nnnnn < 1) {slideIndex5 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex5-1].style.display = "block";
  dots[slideIndex5-1].className += " w3-white";
}
function showDivs6(nnnnnn) {
  var i;
  var x = document.getElementsByClassName("mySlides6");
  var dots = document.getElementsByClassName("demo6");
  if (nnnnnn > x.length) {slideIndex6 = 1}
  if (nnnnnn < 1) {slideIndex6 = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex6-1].style.display = "block";
  dots[slideIndex6-1].className += " w3-white";
}
