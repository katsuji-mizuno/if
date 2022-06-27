  // サムネイル
    var Thumbs_item = new Swiper('.gallery_thumbs', {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        loop: false,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
		 centeredSlides : false,

        breakpoints: {
            768: {
                spaceBetween: 8,
            }
        },

    });


var sliderSelector = '.gallery_main',

    options = {
      init: false,
      loop: true,
      speed: 800,
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 10, // 次のスライドに行く時までに各スライドがどの程度回転するかの角度  デフォルトでは50。 → シアー？
        stretch: 50, // スライド間の距離  デフォルトでは0。
        depth: 100, // 奥行き  デフォルトでは100。　→ 大きくするほど遠くにいきます
        modifier: 8, // 角度  デフォルトでは1。 → 大きくするほどペラペラして面白いです　目新しいかも？
        slideShadows : false, // スライドに影をつける デフォルトではtrue
      },

	  autoplay: {
            delay: 2500,　// 自動再生
        },

	  thumbs: {
            swiper: Thumbs_item
        },

      grabCursor: true,
      parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView: 1.2,
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();





  // サムネイル
  var Thumbs_item = new Swiper('.gallery_thumbs_b', {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    loop: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
 centeredSlides : false,

    breakpoints: {
        768: {
            spaceBetween: 8,
        }
    },

});



var sliderSelector = '.gallery_main_b',

    options = {
      init: false,
      loop: true,
      speed: 800,
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 10, // 次のスライドに行く時までに各スライドがどの程度回転するかの角度  デフォルトでは50。 → シアー？
        stretch: 50, // スライド間の距離  デフォルトでは0。
        depth: 100, // 奥行き  デフォルトでは100。　→ 大きくするほど遠くにいきます
        modifier: 8, // 角度  デフォルトでは1。 → 大きくするほどペラペラして面白いです　目新しいかも？
        slideShadows : false, // スライドに影をつける デフォルトではtrue
      },

	  autoplay: {
            delay: 2500,　// 自動再生
        },

	  thumbs: {
            swiper: Thumbs_item
        },

      grabCursor: true,
      parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView: 1.2,
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();




  // サムネイル
  var Thumbs_item = new Swiper('.gallery_thumbs_c', {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    loop: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
 centeredSlides : false,

    breakpoints: {
        768: {
            spaceBetween: 8,
        }
    },

});



var sliderSelector = '.gallery_main_c',

    options = {
      init: false,
      loop: true,
      speed: 800,
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 10, // 次のスライドに行く時までに各スライドがどの程度回転するかの角度  デフォルトでは50。 → シアー？
        stretch: 50, // スライド間の距離  デフォルトでは0。
        depth: 100, // 奥行き  デフォルトでは100。　→ 大きくするほど遠くにいきます
        modifier: 8, // 角度  デフォルトでは1。 → 大きくするほどペラペラして面白いです　目新しいかも？
        slideShadows : false, // スライドに影をつける デフォルトではtrue
      },

	  autoplay: {
            delay: 2500,　// 自動再生
        },

	  thumbs: {
            swiper: Thumbs_item
        },

      grabCursor: true,
      parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView: 1.2,
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();




  // サムネイル
  var Thumbs_item = new Swiper('.gallery_thumbs_d', {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    loop: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
 centeredSlides : false,

    breakpoints: {
        768: {
            spaceBetween: 8,
        }
    },

});



var sliderSelector = '.gallery_main_d',

    options = {
      init: false,
      loop: true,
      speed: 800,
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 10, // 次のスライドに行く時までに各スライドがどの程度回転するかの角度  デフォルトでは50。 → シアー？
        stretch: 50, // スライド間の距離  デフォルトでは0。
        depth: 100, // 奥行き  デフォルトでは100。　→ 大きくするほど遠くにいきます
        modifier: 8, // 角度  デフォルトでは1。 → 大きくするほどペラペラして面白いです　目新しいかも？
        slideShadows : false, // スライドに影をつける デフォルトではtrue
      },

	  autoplay: {
            delay: 2500,　// 自動再生
        },

	  thumbs: {
            swiper: Thumbs_item
        },

      grabCursor: true,
      parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView: 1.2,
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();

