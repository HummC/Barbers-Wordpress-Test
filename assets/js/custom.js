
var swiper = new Swiper('.swiper-container', {
   slidesPerView: 3,
   spaceBetween: 30,
   slidesPerGroup: 3,
   loop: false,
   loopFillGroupWithBlank: true,
   pagination: {
     el: '.swiper-pagination',
     clickable: true,
   },
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 });



// WATCH FOR VIEWPORT
// - Entrance / Exit Animations
// - LazyLoading
// - Counting Animation

 const threshold= {
      threshold: 0.55
    }


    const watchEntries = (entries, observer) => {
      entries.forEach((entry) => {
          if (entry.intersectionRatio > threshold.threshold) {


            const options = {  
                    useEasing: true,
                      useGrouping: true,
                      separator: ',',
                      decimal: '.',
                      prefix: '',
                      suffix: '',
                  };
          var num = entry.target.getAttribute('data-number');
          if(entry.target.getAttribute('data-suffix')) {
              options.suffix = entry.target.getAttribute('data-suffix');
            }



            var number = parseInt(num);
            var countUp = new CountUp(entry.target, 0, number, 0, 2.5, options);
            countUp.start();
            observer.disconnect();
          }
      })
    }

    const entriesObserver = new IntersectionObserver(watchEntries, threshold);
    var targets = document.querySelectorAll('[data-count]');
    targets.forEach((targets) => {
    entriesObserver.observe(targets);
    });


$(document).ready(function() {

// Observe Animation
  const threshold= {
  threshold: 0.1
}
const animates = (entries, observer) => {
  entries.forEach((entry) => {
      if (entry.intersectionRatio > threshold.threshold) {
        let animationType = entry.target.dataset.anim;
        entry.target.classList.add(animationType);
      }
  })
}

const observeAnimation = new IntersectionObserver(animates, threshold);
const targets = document.querySelectorAll(".animated");
targets.forEach((targets) => {
observeAnimation.observe(targets);
});
})
