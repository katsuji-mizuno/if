


/****************************************
ローディング後、ロゴ、メニューなどを順番に出す
****************************************/

function delayScrollAnime() {
  var time = 0.2;//遅延時間を増やす秒数の値
  var value = time;
  $('.delayScroll').each(function () {
    var parent = this;          //親要素を取得
    var elemPos = $(this).offset().top;//要素の位置まで来たら
    var scroll = $(window).scrollTop();//スクロール値を取得
    var windowHeight = $(window).height();//画面の高さを取得
    var childs = $(this).children();  //子要素を取得

    if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
      $(childs).each(function () {

        if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック

          $(parent).addClass("play"); //親要素にクラス名playを追加
          $(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
          $(this).addClass("fadeUp");//アニメーションのクラス名を追加
          value = value + time;//delay時間を増加させる

          //全ての処理を終わったらplayを外す
          var index = $(childs).index(this);
          if((childs.length-1) == index){
            $(parent).removeClass("play");
          }
        }
      })
    }else {
      $(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
      value = time;//delay初期値の数値に戻す
    }
  })
}






//ブラウザの判定
var wWidth = 0;
var wHeight = 0;
var headHeight = 0;
var headHeightSp = 0;
var headHeightPc = 0;
var bPoint = 750;
var bPoint2 = 1240;

/* getWidth */
function getWidth() {
  wWidth = window.innerWidth;
  return wWidth;
}

/* getHeight */
function getHeight() {
  wHeight = window.innerHeight;
  return wHeight;
}

/* ReLayout */
function ReLayout() {

  wWidth = getWidth();
  wHeight = getHeight();

  // body padding top
  if(wWidth <= bPoint) {
    headHeight = headHeightSp;
  } else {
    headHeight = headHeightPc;
  }


}
//ReLayout();


$(function () {

  getWidth();
  getHeight();

  /* for IE */
  var agent = navigator.userAgent;
  var userAgent = window.navigator.userAgent.toLowerCase();
  if (userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)) {
    var isIE = true;
    $("html").addClass('ie');
    var ieVersion = userAgent.match(/((msie|MSIE)\s|rv:)([\d\.]+)/)[3];
    ieVersion = parseInt(ieVersion);
  } else {
    var isIE = false;
    $("html").removeClass('ie');
  }

  /* IEでの fixed カクつき防止 */
  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wd = event.wheelDelta;
      var csp = window.pageYOffset;
      window.scrollTo(0, csp - wd);
    });
  }

  var timer = false;
  $(window).resize(function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      var ww = $(window).width();
      if (wWidth != ww) {
        ReLayout();
        changeImage();
        changeImage2();
      }
    }, 200);
  });
});


//ブラウザの判定
$(function() {
　　 /* ユーザーエージェントの文字列を取得 */
      var useragent = window.navigator.userAgent.toLowerCase();

    /* ブラウザごとの条件分岐 */
    if (useragent.indexOf('msie') != -1 ||
          useragent.indexOf('trident') != -1) {
          //Internet Explorerに適応させたい内容
      } else if(useragent.indexOf('edge') != -1) {
          //Edgeに適応させたい内容
  } else if (useragent.indexOf('chrome') != -1) {
          //Chromeに適応させたい内容
  } else if (useragent.indexOf('safari') != -1) {
          //Safariに適応させたい内容
  } else if (useragent.indexOf('firefox') != -1) {
          //FireFoxに適応させたい内容
  } else if (useragent.indexOf('opera') != -1) {
          //Operaに適応させたい内容
  } else {
          //上記以外のブラウザに適応させたい内容
  };
});

// ブラウザバック
window.onpageshow = function(){
  setTimeout(function () {
    ReLayout();
  }, 200);
}

// loaded
$.event.add(window, 'load', function () {
  setTimeout(function () {
    ReLayout();
    changeImage();
    changeImage2();
  }, 200);
});

// changeImage
function changeImage() {
  if (wWidth <= bPoint) {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change')[0]){
      $('.change').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}
function changeImage2() {
  if (wWidth <= bPoint2) {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
      });
    }
  } else {
    if($('.change2')[0]){
      $('.change2').each(function(){
        $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
      });
    }
  }
}


/****************************************
　loading
****************************************/


$(window).on('load', function(){
  $('.loader-slide').addClass('open');
});

$(function () {
  var h = $(window).height();
  $('#loader').delay(500).queue(function(){
  	$('#loader').addClass('view');
  });

  //10秒たったら強制的にロード画面を非表示
  setTimeout(function () {
    stopload();
  }, 10000);
});
$.event.add(window, 'load', function () {
  $('#pageWrapper').addClass('view');
  $('#loader').delay(100).fadeOut(300);
});
function stopload(){
  $('#pageWrapper').addClass('view');
  $('#loader').delay(600).fadeOut(300);
}


/****************************************
menu open
****************************************/

$(function () {
  $('#siteHead .menu').on('click',function(){
    $('#siteHead').toggleClass('open');
    if($('#siteHead').hasClass('open')){
      $('#siteHead').addClass('open');
    } else {
      $('#siteHead').removeClass('open');
    }
  });
});

$(function () {
  $('#siteHead .menu').on('click',function(){
    $(this).toggleClass('open');
    if($(this).hasClass('open')){
      $('#gNav').addClass('open');
    } else {
      $('#gNav').removeClass('open');
    }
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
  $('#gNav li a').on('click',function(){
    $('#siteHead .menu').removeClass('open');
    $('#gNav').removeClass('open');
  });
});

/****************************************
navPC activate
****************************************/
$(function () {
  if($('#gNav .navi')[0]){
    if($('#pageLifeinfo')[0]){$('#gNav .navi li.lifeinfo a').addClass('current');}
    if($('#pageCommunity')[0]){$('#gNav .navi li.community a').addClass('current');}
    if($('#pageProcedure')[0]){$('#gNav .navi li.procedure a').addClass('current');}
    if($('#pageTerms')[0]){$('#gNav .navi li.terms a').addClass('current');}
    if($('#pageMap')[0]){$('#gNav .navi li.map a').addClass('current');}
  }
});

/****************************************
// スクロールしたらクラス追加して、トップへ戻るボタンを下から出す。
****************************************/
$(function(){
  var wWidth = $(window).width();
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = 900;
    if (scrollTop > scrollHeight) {
      $('#toPageTop').addClass('scrollfixed');
      } else {
      $('#toPageTop').removeClass('scrollfixed');
    }
  });
});

/****************************************
pageTopLink view
****************************************/
var pageTopLink = function () {
  var i = $(window).scrollTop();
  if (i >= 400) {
    $('#toPageTop').addClass('view');
  } else {
    $('#toPageTop').removeClass('view');
  }

  //プリロード
  function mypreload() {
    for (var i = 0; i < arguments.length; i++) {
      $("<img>").attr("src", arguments[i]);
    }
  }
  if ($('body').attr('id') == 'pageHome') {
    mypreload(templatePath + '/assets/images/pagetop.png');
  }
}
$(function () {
  $(window).bind('resize scroll load', function () {
    pageTopLink();
  });
});


/****************************************
pageHome kv
****************************************/
$.event.add(window, 'load', function () {
	if($('#pageHome #kv')[0]){
		setTimeout(function () {
			$('#pageHome #kv').addClass('view');
      $('#pageHome #gNav .navi').addClass('view');
      $('#pageHome #siteHead').addClass('view');
      $('#pageHome #siteHead .logo').addClass('view');
      $('#pageHome #siteHead .right_navi').addClass('view');
		}, 100);
	}
});

/****************************************
move
****************************************/
$(window).scroll(function(){
  $('.move').each(function(){
    var top = $(this).offset().top; // ターゲットの位置取得
    var position = top - $(window).height() / 1.4;  // ターゲットが上からスクロールしたときに見える位置
    var position_bottom = top + $(this).height() / 1.6;  // ターゲットが下からスクロールしたときに見える位置
    if($(window).scrollTop() > position && $(window).scrollTop() < position_bottom){
      $(this).addClass('go');
    }
  });
});

$(function() {
  var getWindowMovieHeight = function() {
    // ここでブラウザの縦横のサイズを取得します。
    var windowSizeHeight = $(window).outerHeight();
    var windowSizeWidth = $(window).outerWidth();

    // メディアの縦横比に合わせて数値は変更して下さい。(メディアのサイズが width < heightの場合で書いています。逆の場合は演算子を逆にしてください。)
    var windowMovieSizeWidth = windowSizeHeight * 1.76388889;
    var windowMovieSizeHeight = windowSizeWidth / 1.76388889;
    var windowMovieSizeWidthLeftMargin = (windowMovieSizeWidth - windowSizeWidth) / 2;

    if (windowMovieSizeHeight < windowSizeHeight) {
      // 横幅のほうが大きくなってしまう場合にだけ反応するようにしています。
      $("video").css({left: -windowMovieSizeWidthLeftMargin});
    }
  };

  // 以下画面の可変にも対応できるように。
  $(window).on('load', function(){
    getWindowMovieHeight();
  });

  $(window).on('resize', function(){
    getWindowMovieHeight();
  });
});




/****************************************
moya js  メニューホバーで文字浮かび上がる
****************************************/
$(function() {

  //ホーム
  $('.nav_home a').hover(function() {
    $('.bg_home').addClass('active');
  },
  function() {
    $('.bg_home').removeClass('active');
  });
  //選ばれる理由、喜ばれる理由
  $('.nav_concept a').hover(function() {
    $('.bg_concept').addClass('active');
  },
  function() {
    $('.bg_concept').removeClass('active');
  });
  //取扱製品/サービス
  $('.nav_product a').hover(function() {
    $('.bg_product').addClass('active');
  },
  function() {
    $('.bg_product').removeClass('active');
  });
  //オーダーの流れ
  $('.nav_flow a').hover(function() {
    $('.bg_flow').addClass('active');
  },
  function() {
    $('.bg_flow').removeClass('active');
  });

  //施工実績
  $('.nav_works a').hover(function() {
    $('.bg_works').addClass('active');
  },
  function() {
    $('.bg_works').removeClass('active');
  });
  //お知らせ
  $('.nav_news a').hover(function() {
    $('.bg_news').addClass('active');
  },
  function() {
    $('.bg_news').removeClass('active');
  });
  //ショールーム
  $('.nav_showroom a').hover(function() {
    $('.bg_showroom').addClass('active');
  },
  function() {
    $('.bg_showroom').removeClass('active');
  });
  //来店予約フォーム
  $('.nav_reservation a').hover(function() {
    $('.bg_reservation').addClass('active');
  },
  function() {
    $('.bg_reservation').removeClass('active');
  });


  //会社概要
  $('.nav_about a').hover(function() {
    $('.bg_about').addClass('active');
  },
  function() {
    $('.bg_about').removeClass('active');
  });
  //お問い合わせ
  $('.nav_contact a').hover(function() {
    $('.bg_contact').addClass('active');
  },
  function() {
    $('.bg_contact').removeClass('active');
  });
  //プライバシーポリシー
  $('.nav_privacy a').hover(function() {
    $('.bg_privacy').addClass('active');
  },
  function() {
    $('.bg_privacy').removeClass('active');
  });

  //小牧店
  $('.nav_komaki a').hover(function() {
    $('.bg_komaki').addClass('active');
  },
  function() {
    $('.bg_komaki').removeClass('active');
  });
  //浜松店
  $('.nav_hamamatsu a').hover(function() {
    $('.bg_hamamatsu').addClass('active');
  },
  function() {
    $('.bg_hamamatsu').removeClass('active');
  });
  //富山店
  $('.nav_toyama a').hover(function() {
    $('.bg_toyama').addClass('active');
  },
  function() {
    $('.bg_toyama').removeClass('active');
  });
});




/****************************************
スクロールすると要素が左右上下から出現する演出
****************************************/

var slideConts = document.querySelectorAll('.slideConts'); // スライドで表示させる要素の取得
var slideContsRect = []; // 要素の位置を入れるための配列
var slideContsTop = []; // 要素の位置を入れるための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
var windowH = window.innerHeight; // ウィンドウの高さを取得
var remainder = 100; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < slideConts.length; i++) {
  slideContsRect.push(slideConts[i].getBoundingClientRect());
}
for (var i = 0; i < slideContsRect.length; i++) {
  slideContsTop.push(slideContsRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;

  for (var i = 0; i < slideConts.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > slideContsTop[i] - windowH + remainder) {
      // .showを付与
      slideConts[i].classList.add('show');
    } else {
      // 逆に.showを削除
      slideConts[i].classList.remove('show');
    }
  }
});


/****************************************
予約フォームがカスタマイズがCSSでやりづらいのでJSで対応
****************************************

/**「○」を削除「◎」はCSSで表示**
$(function() {
    // 所定の要素のテキストを書き換える
    $('.calendar-timelink').text('');
});

/**「×」を削除**
$(function(){
  $('.calendar-time-mark').each(function(){
  var txt = $(this).html();
  $(this).html(txt.replace(/×/g,''));
  });
 });

 /**「内容を確認する」ボタンの文言変更**
$(function(){
  $('#action-button').each(function(){
  var txt = $(this).html();
  $(this).html(txt.replace(/予約確認/g,'内容を確認する'));
  });
 });

 /**「ご連絡事項」の文言削除**
 $(function(){
  $('#booking-confirm-fieldset').each(function(){
  var txt = $(this).html();
  $(this).html(txt.replace(/ご連絡事項/g,''));
  });
 });

 /**「規約確認」に関する文言を「個人情報の取り扱い」に変更**
 $(function(){
  $('#terms-conditions').each(function(){
  var txt = $(this).html();
  $(this).html(txt.replace(/ご予約に関する規約が次のページにございます。確認の上予約処理を実行して下さい。/g,''));
  var txt = $(this).html();
  $(this).html(txt.replace(/予約に関する規約/g,'個人情報の取り扱い'));
  });
 });





/**子要素にaタグを含む親に「link」クラス付与**
 $(".calendar-timelink").parent('.calendar-time-mark').addClass('link');

 /**「ご連絡先」「の項目は必須です。」を削除**
$(function(){
  //.replace2 要素内の特定の文字列を置換
  $('fieldset').each(function(){
  var txt = $(this).html();
  $(this).html(txt.replace(/ご連絡先/g,''));
  var txt = $(this).html();
  $(this).html(txt.replace(/の項目は必須です。/g,''));
  var txt = $(this).html();
  $(this).html(txt.replace(/店予約/g,'店'));
  });
 });

 $(function() {
  //予約フォームの項目名の変更と「必須」の文言追加の為のクラス追加
  $("label[for='client-name']").html('<div class="required_add">お名前</div>');
  $("label[for='client-furigana']").html('<div class="required_add">ふりがな</div>');
  $("label[for='client-company']").html('<div class="required_no">会社名</div>');
  $("label[for='client-email']").html('<div class="required_add">メールアドレス</div>');
  $("label[for='client-email2']").html('<div class="required_add">メールアドレス確認</div>');
  $("label[for='client-address1']").html('<div class="required_no">ご住所</div>');
  $("label[for='client-tel']").html('<div class="required_add">電話番号</div>');
  $("label[for='booking-note']").html('<div class="required_no">お問い合わせ内容</div>');
});

//$('#accedence-box').append('<span class="mwform-checkbox-field-text">について同意する</span>');

/****************************************
予約フォーム内にplaceholderを付加
****************************************

$(function() {
    var msg = '山田　太郎';
    $('#booking-sei').attr('placeholder', msg);
    var msg = 'やまだ　たろう';
    $('#booking-sei_kana').attr('placeholder', msg);
    var msg = '株式会社〇〇';
    $('#client-company').attr('placeholder', msg);
    var msg = 'abc@example.com';
    $('#client-email').attr('placeholder', msg);
    var msg = 'abc@example.com';
    $('#client-email2').attr('placeholder', msg);
    var msg = 'ご住所を入力してください。';
    $('#client-address1').attr('placeholder', msg);
    var msg = '000-0000-0000';
    $('#client-tel').attr('placeholder', msg);
    var msg = 'お問い合わせ内容を入力してください。';
    $('#booking-note').attr('placeholder', msg);
});




/****************************************
カレンダーをプルダウンにする
****************************************/


/**<div class="calendar-time-mark">を<option>で囲む *
$('.calendar-time-mark').wrap('<option />');

/**optionを○○個ずつ<select>で囲む *
$(function(){
	do {
		$('#komaki_calendar .day-box').children('option:lt(15)').wrapAll('<select name="select" onChange="location.href=value;" />')
	}while($('#komaki_calendar .day-box').children("option").length);
});

$(function(){
	do {
		$('#hamamatsu_calendar .day-box').children('option:lt(3)').wrapAll('<select name="select" onChange="location.href=value;" />')
	}while($('#hamamatsu_calendar .day-box').children("option").length);
});

$(function(){
	do {
		$('#toyama_calendar .day-box').children('option:lt(14)').wrapAll('<select name="select" onChange="location.href=value;" />')
	}while($('#toyama_calendar .day-box').children("option").length);
});

/**一番上の時刻を選択できないので、一番上に「時間を選択」を追加 *
$(function(){
  $('select').prepend('<option selected>時間を選択</option>');
});

/**プルダウンでリンクに飛ばす為にoptionにaタグにあるリンクをValueで埋め込む *
$(function(){
  $('option').each(function(){
    var cal_href = $(this).find('.calendar-time-mark > a').attr('href');
    $(this).val(cal_href);
  });
});

/**予約済み＝aタグがない場合はプルダウンに表示させない *
$(function(){
  $('option').each(function(){
    if($(this).find('.calendar-time-mark .calendar-timelink')[0]){
      $(this).show()
    }else{
      $(this).hide()
    }
  });
});


/*----------------------------------------------------
mv
----------------------------------------------------*/

$(function(){
  $(window).on('load', function(){
    function Timeout() {
      setTimeout(function(){
        $('.mv_item:nth-child(1)').addClass('active');
      }, 300);
      setTimeout(function(){
        $('.mv_item:nth-child(2)').addClass('active');
      }, 4000);
      setTimeout(function(){
        $('.mv_item:nth-child(1)').removeClass('active');
      }, 7000);
      setTimeout(function(){
        $('.mv_item:nth-child(3)').addClass('active');
      }, 8800);
      setTimeout(function(){
        $('.mv_item:nth-child(2)').removeClass('active');
      }, 11000);
      setTimeout(function(){
        $('.mv_item:nth-child(3)').removeClass('active');
      }, 15800);
    }
    Timeout();
    setInterval(function(){
      Timeout();
    }, 15801);

  });
});


/*----------------------------------------------------
スクロール時にスライドインする要素をブラウザバック時はあらかじめ表示させる
----------------------------------------------------*/

$(document).ready(function () {
  if (window.performance.navigation.type == 2) {
    if ($('.slideConts')[0] ){
      $('.slideConts').each(function(){
        $(this).addClass('show');
      });
    }
  }
});