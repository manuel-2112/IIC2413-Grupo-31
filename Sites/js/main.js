var consulta = document.getElementById("selectConsult");
consulta.addEventListener("change", function() {
var elems = document.querySelectorAll('#divArtista,#divTour')
for (var i = 0; i < elems.length; i++) {
    elems[i].style.display = 'none'
}
let selectedItem = $(this).children("option:selected").val();
if (selectedItem == '1') {
    document.querySelector('#divArtista').style.display = 'block';
}
}, false);