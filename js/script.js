var countDownDate = new Date("Oct 5, 2025 18:30:00").getTime();

var x = setInterval(function() {

  var  counter = document.querySelector("#countdown");

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("#countdown").innerHTML = days + " ايام " + hours + " ساعات "
  + minutes + "  دقيقة " + seconds + " ثانية ";

  if (distance < 0) {
    clearInterval(x); 
    document.getElementById("#countdown").innerHTML = "انتهت المسابقة";
  }
}, 1000);
