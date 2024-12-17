$(document).ready(function(){     $(".gallery img").fadeIn(500);     var modal = document.getElementById("Modal");     var img = document.getElementById("img01");     var captionText = document.getElementById("caption");     var span = document.getElementsByClassName("close")[0];  
    $(".gallery img").click(function(){         modal.style.display = "block";         img.src = this.src;         captionText.innerHTML = this.alt; 
    });      span.onclick = function() {         modal.style.display = "none"; 
    }     .onclick = function(event) {         if (event.target == modal) {             modal.style.display = "none"; 
        } 
    } 
});