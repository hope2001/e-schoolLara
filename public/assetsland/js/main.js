/*=== Javascript function indexing hear===========

01.gsapAnimationImageRevel();
02.gsapScrollingText();
03.gsapAnimationImageScale();
04.serviceHoverImageRevel();
06.swiperActivation();
07.tiltAnimation();
08.wowActive();
09.progressAvtivation();
11.radialProgress();
12.titleSkewUp();
13.scrollDiwnCircle();
14.bannerBgVideo();
15.textTitleAnimation__1();
16.counterJumpanimation();
17.featureJumpanimation();
18.paragraphBodyAnimation();
19.slideUpSkew();
20.slideUp();
21.slideLeft();
22.slideRight();
23.buttonMoveAnimation();
24.teamAnimation();
25.showRightRevel();
26.caseVarticleScroll();
27.titleOpacityWrap();
28.magicCoursor();
29.portfolioTenSwiper();
30.offcanvasMenu();
32.isotopeMasonry();
33.stickySidebar();
34.backToTopInit();
35.stickyHeader();
36.countDown();
37.rollingText();

==================================================*/

(function ($) {
    'use strict';
    let device_width = window.innerWidth;
    $.exists = function (selector) {
      return $(selector).length > 0;
    };
  
    gsap.registerPlugin(ScrollTrigger, SplitText);
  
    var rtsJs = {
      m: function (e) {
        rtsJs.d();
        rtsJs.methods();
      },
      d: function (e) {
        this._window = $(window),
          this._document = $(document),
          this._body = $('body'),
          this._html = $('html')
      },
      methods: function (e) {
        rtsJs.swiperActivation();     
        rtsJs.backToTopInit();
        rtsJs.stickyHeader();
        rtsJs.title_animation();
        rtsJs.skew_up();
        rtsJs.gsapAnimationImageScale();
        rtsJs.imageSlideGsap();
        rtsJs.sideMenu();
      },
  
      swiperActivation: function(){
        
        $(document).ready(function(){
          var swiper = new Swiper(".mySwiper-bannerSlide", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            effect: "fade",
            autoplay: true,
            speed: 500,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          });
        })
      },
 
  
      backToTopInit: function () {
        $(document).ready(function(){
        "use strict";
    
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress);	
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
          } else {
            jQuery('.progress-wrap').removeClass('active-progress');
          }
        });				
        jQuery('.progress-wrap').on('click', function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
        
        
      }); 
  
      },
      // sticky header activation
      stickyHeader: function (e) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('.header--sticky').addClass('sticky')
            } else {
                $('.header--sticky').removeClass('sticky')
            }
        })
      },


      title_animation: function () {
        if (device_width > 767) {
          gsap.registerPlugin(ScrollTrigger);
          gsap.registerPlugin(SplitText);

          $(document).ready(function () {
            let addAnimation = function () {
              $(".split-collab").each(function (index) {
                const textInstance = $(this);
                const text = new SplitText(textInstance, {
                  type: "chars",
                });

                let letters = text.chars;

                let tl = gsap.timeline({
                  scrollTrigger: {
                    trigger: textInstance,
                    start: "top 85%",
                    end: "top 85%",
                    onComplete: function () {
                      textInstance.removeClass(".split-collab");
                    }
                  }
                });

                tl.set(textInstance, { opacity: 1 }).from(letters, {
                  duration: .5,
                  autoAlpha: 0,
                  x: 50,
                  // scaleY: 0,
                  // skewX: 50,
                  stagger: { amount: 1 },
                  ease: "back.out(1)"
                });
              });
            };

            addAnimation();

            window.addEventListener("resize", function (event) {
              if ($(window).width() >= 992) {
                addAnimation();
              }
            });

          });
        }
      },

      skew_up: function () {
        if (device_width > 767) {
          gsap.registerPlugin(SplitText);

          $(document).ready(function () {
            let addAnimation = function () {
              $(".skew-up").each(function (index) {
                const text = new SplitType($(this), {
                  types: "lines, words",
                  lineClass: "word-line"
                }); let textInstance = $(this);
                let line = textInstance.find(".word-line");
                let word = line.find(".word"); let tl = gsap.timeline({
                  scrollTrigger: {
                    trigger: textInstance,
                    start: "top 85%",
                    end: "top 85%",
                    onComplete: function () {
                      $(textInstance).removeClass("skew-up");
                    }
                  }
                });
                tl.set(textInstance, { opacity: 1 }).from(word, {
                  y: "100%",
                  skewX: "-5",
                  duration: 2,
                  stagger: 0.09,
                  ease: "expo.out"
                });
              });
            };
            addAnimation(); window.addEventListener("resize", function (event) {
              if ($(window).width() >= 992) { addAnimation(); }
            });
          });

          $(document).ready(function () {
            let addAnimation = function () {
              $(".skew-up-2").each(function (index) {
                const textInstance = $(this);
                const text = new SplitText(textInstance, {
                  type: "chars",
                });

                let letters = text.chars;

                let tl = gsap.timeline({
                  scrollTrigger: {
                    trigger: textInstance,
                    start: "top 85%",
                    end: "top 85%",
                    onComplete: function () {
                      textInstance.removeClass("skew-up-2");
                    }
                  }
                });

                tl.set(textInstance, { opacity: 1 }).from(letters, {
                  duration: .4,
                  autoAlpha: 0,
                  y: 50,
                  // scaleX: 0,
                  // skewX: 50,
                  stagger: { amount: 1 },
                  ease: "back.out(0)"
                });
              });
            };

            addAnimation();

            window.addEventListener("resize", function (event) {
              if ($(window).width() >= 992) {
                addAnimation();
              }
            });

          });
        }
      },


      gsapAnimationImageScale: function (e) {
        $(document).ready(function () {
  
          let growActive = document.getElementsByClassName('grow');
          if (growActive.length) {
            const growTl = gsap.timeline({
              scrollTrigger: {
                trigger: ".grow",
                scrub: 1,
                start: "top center",
                end: "+=1000",
                ease: "power1.out"
              }
            });
            growTl.to(".grow", {
              duration: 1,
              scale: 1
            });
          }
  
        });
  
      },

      // image slide gsap
      imageSlideGsap: function () {
        gsap.to(".images", {
          scrollTrigger:{
            // trigger: ".images",
            start: "top bottom", 
            end: "bottom top", 
            scrub: 1,
            // markers: true
          },
          x: 330,
        })
        gsap.to(".images-2", {
          scrollTrigger:{
            // trigger: ".images",
            start: "top bottom", 
            end: "bottom top", 
            scrub: 1,
            // markers: truesw
          },
          y: 330,
        })       
      },


      // side menu desktop
      sideMenu:function(){
        $(document).on('click', '#menu-btn', function () {
          $("#side-bar").addClass("show");
          $("#anywhere-home").addClass("bgshow");
        });
        $(document).on('click', '.close-icon-menu', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '#anywhere-home', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '.onepage .mainmenu li a', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
      },

      
    }
    rtsJs.m(); 

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
  
          const targetId = this.getAttribute('href');
  
          if (targetId === '#') {
              // If the link is the document header, scroll to the top of the page
              window.scrollTo({
                  top: 0,
                  behavior: 'smooth'
              });
          } else {
              // For other links, scroll to the specified element
              document.querySelector(targetId).scrollIntoView({
                  behavior: 'smooth'
              });
          }
      });
  });
    $(document).ready(function() {
      // Listen for the collapse show event
      $('.working-process-accordion-one .accordion-collapse').on('show.bs.collapse', function () {
        // Find the parent .accordion-item and add the 'show' class
        $(this).closest('.accordion-item').addClass('show');
      });
    
      // Listen for the collapse hide event
      $('.working-process-accordion-one .accordion-collapse').on('hide.bs.collapse', function () {
        // Find the parent .accordion-item and remove the 'show' class
        $(this).closest('.accordion-item').removeClass('show');
      });
    });
  
  })(jQuery, window)  