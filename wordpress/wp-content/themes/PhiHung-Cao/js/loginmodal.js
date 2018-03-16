
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function toggle(id, id2) {
    var n = document.getElementById(id);
    var items = n.getElementsByTagName("li");
    if(document.getElementById(id2).getAttribute("aria-expanded") == 'true'){
        document.getElementById(id2).setAttribute('aria-expanded', 'false');
        for (var i = 0; i < items.length; ++i) {
            // do something with items[i], which is a <li> element
                if(i >= 1){
                    items[i].setAttribute('style','display: none;');
                }
        }
        
    }else {
        document.getElementById(id2).setAttribute('aria-expanded', 'true');
        for (var i = 0; i < items.length; ++i) {
            // do something with items[i], which is a <li> element
                if(i >= 1){
                    items[i].setAttribute('style','display: block;');
                }
        }
    }
  }
