'use strict';

$('.balloon-container').css({
                        width: document.documentElement.scrollWidth,
                        height: document.documentElement.scrollHeight,
                            })

let balloonInterval = setInterval(createBalloon, 1000);



function createBalloon() {
  let images = ['img/blueballoon.png', 'img/greenballoon.png', 'img/pinkballoon.png', 'img/orangeballoon.png'];
  let balloonSrc = images[getRandomInt(0, images.length)];
  
  
    let container = $('.balloon-container');
    let width = $(container).width();
    let height = $(container).height();
  let balloon = document.createElement('img');
  
  $(balloon).attr('src', balloonSrc)
            .css({
              cursor: 'crosshair',
              height: '15em',
              position: 'absolute',
              top: height + 'px',
              left: getRandomInt(0, width - 50) + 'px',
            })
            .appendTo(container)
            .animate({
             top: 0 - 300 + 'px',
            }, 10000, () => { 
              $(balloon).remove();
              game.addLoseCount();
            });
  // $(balloon).mousedown(() => {
  //   popBalloon(balloon);
  // })
  balloon.onmousedown = () => {
    popBalloon(balloon)
  }
}

function popBalloon(balloon) {
balloon.onmousedown = null;

let popSound = new Audio('img/pop.wav')
popSound.play();
game.addCount();
let confetti = balloon;
$(confetti).stop().attr('src', 'img/confetti.gif')
                  .css({
                    transform: 'translateX(-50%)',
                    height: '10rem',
                    cursor: 'default'
                  })
                  .fadeOut(2000, () => $(confetti).remove())
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}

// Game

let game = {
  
  counterElem: document.querySelector('.counter'), // span со счетчиком;
  count: 0,
  winCount: 10,
  
  loseCounterElem: document.querySelector('.loseCounter'), // span со счетчиком;
  loseCount: 0,
  balloonsToLose: 3,
  
  addLoseCount() {
    this.loseCount++;
    this.loseCounterElem.innerHTML = this.loseCount;
    if (this.loseCount == this.balloonsToLose) {
    this.lose()
    }
  },
  
  addCount() {
    this.count++
    this.counterElem.innerHTML = this.count;
    if (this.count == this.winCount) {
    this.win()
    }
  },
  
  win() {
    // this.count == 10;
    alert('вы выиграли!')
    this.refresh();
  },
  
  lose() {
    alert('вы проиграли');
    this.refresh();
  },
  
  refresh() {
    this.count = 0;
    this.loseCount = 0;
    this.loseCounterElem.innerHTML = this.loseCount;
    this.counterElem.innerHTML = this.count;
    $('.balloon-container').empty() // удаляет все шары
  }
  
}







