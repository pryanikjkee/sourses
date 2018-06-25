function AboutLine(){
    const AboutChild = document.querySelector(".about__background");
    const ProgressAbout = document.getElementById("progress-bar__about");
    const progressObserverAbout = new ScrollProgress((x, y) => {
if(AboutChild.getBoundingClientRect().top <= 500){

const AboutChildRow = 500 - AboutChild.getBoundingClientRect().top;
ProgressAbout.style.height = AboutChildRow * 0.1 + '%';
}else{
    ProgressAbout.style.height = 0 + '%';
}


    });
};

window.onload=function(){
    var firstBar = $('.animate__on__load');

    firstBar.animate({width:'100%'}, 100);
}
// $(document).ready(function(){
   

//   });


function HomeLines1() {
    const progressFloorThird = document.getElementById('progress-bar__floor__third');
    const firstBar = document.querySelector('.progress-bar');
    const secondHalfBarBlack = document.getElementById('progress-bar__black');
    const secondHalfBar = document.getElementById('progress-bar');
    const thirdBar = document.querySelector('.pr__third__mobile');
    const progressFloorSecond = document.getElementById('progress-bar__floor__second');
    const progressFloor = document.getElementById('progress-bar__floor');
    const ChildProgress = document.querySelector(".button__see__all");
    const ChildProgressTwo = document.querySelector(".ps_head_mobile");

 
      



    const progressObserver = new ScrollProgress((x, y) => {
        // firstBar.style.width = y * 2000 + '%';


        // if (parseInt(firstBar.style.width) >= 100) {
            y = y - 0.045;

            secondHalfBar.style.width = y * 1000 + '%';
if(y<=0){
    secondHalfBar.style.width = 0 + '%';
}
        // } else {
            // secondHalfBar.style.width = 0 + '%';
        // }
        if (parseInt(secondHalfBar.style.width) >= 50) {
            y = y - 0.01;
            secondHalfBarBlack.style.width = y * 500 + '%';

        } else {
            secondHalfBarBlack.style.width = 0 + '%';
        }
        if (parseInt(secondHalfBarBlack.style.width) >= 50) {
            y = y - 0.099;
            thirdBar.style.width = y * 900 + '%';
        } else {
            thirdBar.style.width = 0 + '%';
        }
        //    getClient Rect
        if (ChildProgress.getBoundingClientRect().top <= 500) {

            const rowHeight = 500 - ChildProgress.getBoundingClientRect().top;

            progressFloor.style.height = rowHeight * 0.12 + '%';
            progressFloor.style.width = 100 + '%';
        } else {
            progressFloor.style.height = 0 + '%';
            progressFloor.style.width = 0 + '%';
        }

        if (parseInt(progressFloor.style.height) >= 100) {
            const rowHeightTwo = 400 - ChildProgressTwo.getBoundingClientRect().top;

            progressFloorSecond.style.width = 100 + '%';
            progressFloorSecond.style.height = rowHeightTwo * 0.25 + '%';

        } else {
            progressFloorSecond.style.height = 0 + '%';
            progressFloorSecond.style.width = 0 + '%';
        }
        if (parseInt(progressFloorSecond.style.height) >= 100) {
            const rowHeightThird = 40 - ChildProgressTwo.getBoundingClientRect().top;
           
            progressFloorThird.style.width = 100 + '%';
            progressFloorThird.style.height = rowHeightThird * 0.65 + '%';




        } else {
            progressFloorThird.style.height = 0 + '%';
            progressFloorThird.style.width = 0 + '%';
        }

    });

}