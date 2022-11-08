var consult = document.getElementById("selectConsult");

consult.addEventListener("change", function() {
  var elems = document.querySelectorAll('#form_1,#form_2,#form_3,#form_4,#form_5,#form_6,#form_7,#noDatos')
  for (var i = 0; i < elems.length; i++) {
    elems[i].style.display = 'none'
  }
  if (this.selectedIndex === 1) {
    document.querySelector('#form_1').style.display = 'block';
  } else if (this.selectedIndex === 2) {
    document.querySelector('#form_2').style.display = 'block';
  }else if (this.selectedIndex === 3) {
    document.querySelector('#form_3').style.display = 'block';
  }
  else if (this.selectedIndex === 4) {
    document.querySelector('#form_4').style.display = 'block';
  }
  else if (this.selectedIndex === 5) {
    document.querySelector('#form_5').style.display = 'block';
  }
  else if (this.selectedIndex === 6) {
    document.querySelector('#form_6').style.display = 'block';
  }
  else if (this.selectedIndex === 7) {
    document.querySelector('#form_7').style.display = 'block';
  }
  else if (this.selectedIndex === 0) {
    document.getElementById('#noDatos').style.display = 'block';
  }
  }, false);