var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    //get the slider image
    var slides = document.getElementsByClassName("mySlides");
    //get the dot
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++; //increase slider index
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", ""); // change class
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active"; // Change 
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}