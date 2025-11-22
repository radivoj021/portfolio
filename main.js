const text = `Frontend developer`;

const speed = 100;

let i = 0;

function typeWriter(){
    if(i < text.length){
        document.getElementById("title").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

window.onload = function () {
    setTimeout(typeWriter, 1500);
}




/* (function(){
    emailjs.init("sLc8aksyb-Vh2lOe6");
})();

document.getElementById("mail").addEventListener("submit", function(e) {
    e.preventDefault();

    emailjs.sendForm("service_9w9oahc", "template_7sr6091", this)
      .then(function() {
        alert("Poruka uspešno poslata!");
      }, function(error) {
        alert("Došlo je do greške: " + JSON.stringify(error));
      });
  }); */