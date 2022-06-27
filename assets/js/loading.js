

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


