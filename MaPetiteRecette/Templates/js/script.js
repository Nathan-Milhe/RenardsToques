// MODAL
var modal = document.getElementById('myModal');
var button = document.getElementById('modalBtnShow');
var span = document.getElementsByClassName("close")[0];

button.onclick = function() {
  modal.style.display = "block";
}

// close the modal when user click on X
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// SHOW IMG AFTER SELECT
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgUser')
                .attr('src', e.target.result)
                .width(250)
                .height(250);
        };

        reader.readAsDataURL(input.files[0]);
    }
}