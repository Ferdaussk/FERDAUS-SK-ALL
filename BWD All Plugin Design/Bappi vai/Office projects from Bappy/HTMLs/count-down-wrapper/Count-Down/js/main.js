
 let textRender = (timeUnit, unitContainer)=>{

  let secondFirstL = timeUnit.toString().slice(0, 1);
  let secondLastL = timeUnit.toString().slice(1, 2);

  unitContainer[0].setAttribute('id','bwd-num-'+secondFirstL)
  unitContainer[1].setAttribute('id','bwd-num-'+secondLastL)
}

let countDownTimer =(countDownNum,year,mon,day,hour,min) =>{
  let countDown = document.querySelector(countDownNum)

  // selection all times unit
  let d = countDown.querySelector('.bwd-count-down-item .bwd-count-days-value').value;
  let h = countDown.querySelector('.bwd-count-down-item .bwd-count-hours-value').value;
  let m = countDown.querySelector('.bwd-count-down-item .bwd-count-min-value').value;
  let s = countDown.querySelector('.bwd-count-down-item .bwd-count-sec-value').value;

//============================================================
  //selection shape container to render 
  let daysContainer = countDown.querySelectorAll('.bwd-count-down-item .bwd-count-days-num .bwd-num-shape');
  let hoursContainer = countDown.querySelectorAll('.bwd-count-down-item .bwd-count-hours-num .bwd-num-shape');
  let minsContainer = countDown.querySelectorAll('.bwd-count-down-item .bwd-count-min-num .bwd-num-shape');
  let secContainer = countDown.querySelectorAll('.bwd-count-down-item .bwd-count-sec-num .bwd-num-shape');
//============================================================


// Set the date we're counting down to
var countDownDate = new Date(year, mon, day, hour, min);

// Update the count down every 1 second
var x = setInterval(function() {
  var now = new Date();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if(seconds < 10 ){
    seconds = '0' + seconds
  }
  if(minutes < 10 ){
    minutes = '0' + minutes
  }
  if(hours < 10 ){
    hours = '0' + hours
  }
  if(days < 10 ){
    days = '0' + days
  }
  textRender(seconds, secContainer)
  textRender(minutes, minsContainer)
  textRender(hours, hoursContainer)
  textRender(days, daysContainer)

}, 1000);

};
countDownTimer('.bwd-count-down-14');
