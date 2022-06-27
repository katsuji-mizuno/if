<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/reservation.css">

</head>


<body id="reservation">
<?php get_template_part('parts_header'); ?>

<div id="pageHead">
  <div class="inner_min">
    <h1 class="pageTitle">RESERVATION<span class="jp">ご来店予約</span></h1>
  </div>
</div>


<div id="main">
  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>



  <div class="content">
    <div class="content_inner">

      <div class="reservation_wrap">
        <div class="reservation_txt required_add">来店されるショールームを選択してください。</div>
        <!--form>
          <div class="reservation_radio">
            <div class="radio">
              <input id="radio-1" class="form-check-input" type="radio" name="radio" onclick="formSwitch()">
              <label for="radio-1" class="radio-label">小牧店</label>
            </div>
            <div class="radio">
              <input id="radio-2" class="form-check-input" type="radio" name="radio" onclick="formSwitch()">
              <label for="radio-2" class="radio-label">浜松店</label>
            </div>
            <div class="radio">
              <input id="radio-3" class="form-check-input" type="radio" name="radio" onclick="formSwitch()">
              <label for="radio-3" class="radio-label">富山店</label>
            </div>
          </div>
        </form-->

        <?php the_content(); ?>

      </div>

    </div>
  </div>
</div>





<?php get_footer(); ?>
<script>
/****************************************
ラジオボタンで予約フォームを切り替える
****************************************/
function formSwitch() {
  hoge = document.getElementsByName('radio')
  if (hoge[0].checked) {
      // １個目のラジオボタンが選択されたら他を非表示
      document.getElementById('komaki').style.display = "";
      document.getElementById('hamamatsu').style.display = "none";
      document.getElementById('toyama').style.display = "none";

  } else if (hoge[1].checked) {
      // ２個目のラジオボタンが選択されたら他を非表示
      document.getElementById('komaki').style.display = "none";
      document.getElementById('hamamatsu').style.display = "";
      document.getElementById('toyama').style.display = "none";
  } else {
      // ３個目のラジオボタンが選択されたら他を非表示
    document.getElementById('komaki').style.display = "none";
    document.getElementById('hamamatsu').style.display = "none";
    document.getElementById('toyama').style.display = "";
  }
}
window.addEventListener('load', formSwitch());



/****************************************
 予約フォームにてURLに含まれる文字で表示・非表示を切り替える
****************************************/
$(function(){
  　//条件なし（デフォルト）
  document.getElementById('komaki').style.display = "";
  document.getElementById('hamamatsu').style.display = "none";
  document.getElementById('toyama').style.display = "none";

  $(window).bind("load", function(){
    if(document.URL.match(/komaki/) ) {
      // URLにkomakiが含まれる時に実行する処理を記述する
      document.getElementById('komaki').style.display = "";
      document.getElementById('hamamatsu').style.display = "none";
      document.getElementById('toyama').style.display = "none";
    }else if(document.URL.match(/hamamatsu/) ) {
      document.getElementById('komaki').style.display = "none";
      document.getElementById('hamamatsu').style.display = "";
      document.getElementById('toyama').style.display = "none";
    }else if(document.URL.match(/toyama/) ) {
      document.getElementById('komaki').style.display = "none";
      document.getElementById('hamamatsu').style.display = "none";
      document.getElementById('toyama').style.display = "";
    }
  });
});

/****************************************
 予約フォームにてラジオボタンの初期選択を制御
****************************************/
// URLのパラメータに応じてコンタクトのラジオボタンを変える;
$(function(){
  　//条件なし（デフォルト）
    　$('input:radio[name=radio]:nth(0)').attr('checked',true);
    　//条件分岐
    　$(window).bind('load',function(){
    　　//条件1
    　　if(document.URL.match(/komaki/)) {
      　　  $('input:radio[name=radio]:nth(0)').attr('checked',true);
      　}
    　  //条件2
    　　if(document.URL.match(/hamamatsu/)) {
    　　    $('input:radio[name=radio]:nth(1)').attr('checked',true);
    　　}
    　  //条件3
    　　if(document.URL.match(/toyama/)) {
    　　    $('input:radio[name=radio]:nth(2)').attr('checked',true);
    　　}

    　});

  });


</script>



