<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/flow.css">

</head>
<body id="flow">
<?php get_template_part('parts_header'); ?>

  <div id="pageHead">
    <div class="inner_min">
      <h1 class="pageTitle">FLOW<span class="jp">オーダーの流れ</span></h1>
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

        <div class="flow_block">
          <div class="flow_block_text_wrap">

            <div class="flow_block_text">
              <div class="flow_block_tit_wrap">
                <div class="flow_block_num">01</div>
                <div class="flow_block_tit">お問い合わせ・ご来店予約</div>
              </div>
              <div class="flow_block_txt">
                <p>
                  お気軽にお電話やメールでご相談、お問い合わせください。<br />ご来店の場合は、事前にご予約いただくとスムーズにご案内できます。
                </p>
                <div class="inqury_link">
                  <div class="inqury_link_btn">
                    <div class="inqury_link_btn_showroom"><a href="<?php echo home_url(); ?>/showroom/">ショールーム一覧ページ</a></div>
                    <div class="inqury_link_btn_reservation"><a href="<?php echo home_url(); ?>/reservation/">ご来店予約</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flow_block_img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/flow/flow_01.jpg" alt="" class="change">
              </div>
          </div>
        </div>
        <div class="flow_block">
          <div class="flow_block_text">
            <div class="flow_block_tit_wrap">
              <div class="flow_block_num">02</div>
              <div class="flow_block_tit">ご来店・ご相談（無料）</div>
            </div>
            <div class="flow_block_txt">
            経験豊かな専門スタッフが対応いたします。<br />図面や間取り図などを持ってご来店ください。<br />お好みの色や柄、イメージ、インテリアに対するご要望などの他、ぜひお客様の夢もお聞かせください。また、ご家族構成やご予算もお伺いできれば、よりご要望に沿ったご提案ができます。<br /><br />ショールームには、国内だけではなく世界から厳選した生地のサンプルやインテリアイメージを多数ご用意しております。<br />ドレープやレース、ブラインド、シェード、ロールスクリーンなど様々なタイプの商品を取り揃えています。気になる商品は実際にご覧になって、ぜひ触ってみてください。<br />触れることで、よりイメージに近いカーテン選びができます。<br />もちろんカーテンレールやタッセルなど、カーテン以外の商品も多数展示しておりますので、あわせてご覧いただけます。
            </div>
          </div>
        </div>
        <div class="flow_block">
          <div class="flow_block_inner">
            <div class="flow_block_text">
              <div class="flow_block_tit_wrap">
                <div class="flow_block_num">03</div>
                <div class="flow_block_tit">コーディネートの<br />ご提案・お見積り（無料）</div>
              </div>
              <div class="flow_block_txt">
                お聞かせいただいた内容をもとに、さまざまな要素を組み合わせながら、理想のインテリアイメージをカタチにし具体的にまとめ、お見積りをご提案いたします。
              </div>
            </div>
          </div>
        </div>

        <div class="flow_block">
          <div class="flow_block_inner">
            <div class="flow_block_text">
              <div class="flow_block_tit_wrap">
                <div class="flow_block_num">04</div>
                <div class="flow_block_tit">ご契約・採寸</div>
              </div>
              <div class="flow_block_txt">
              ご契約後、現地にお伺いしてカーテンを取り付ける窓のサイズを測ります。取り付けまで１～２週間ほどお時間をいただいておりますが、ロールスクリーンなどは最速４日で取り付け可能です。お急ぎの場合はご相談ください。
              </div>
            </div>
          </div>
        </div>

        <div class="flow_block">
          <div class="flow_block_inner">
            <div class="flow_block_text">
              <div class="flow_block_tit_wrap">
                <div class="flow_block_num">05</div>
                <div class="flow_block_tit">取り付け</div>
              </div>
              <div class="flow_block_txt">
                お客様お立ち会いのもと、専門の職人が責任をもって取り付け施工を行います。
              </div>
            </div>
          </div>
        </div>

        <div class="flow_block">
          <div class="flow_block_inner">
            <div class="flow_block_text">
              <div class="flow_block_tit_wrap">
                <div class="flow_block_num">06</div>
                <div class="flow_block_tit">アフターフォロー<br />（ご購入後のつながり）</div>
              </div>
              <div class="flow_block_txt">
              ご購入後もお客様とのつながりを持ち、安心していただけるアフターフォローを行います。<br /><br />地域の方々に喜ばれる、愛されるお店でありたい―<br />ご購入いただいた後も、ずっとそんな想いでお客様との繋がりを持てるサポートやサービスをご提供します。
              </div>
            </div>
          </div>
        </div>








        <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>