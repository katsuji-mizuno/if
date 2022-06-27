<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/about.css">

</head>
<body id="about">
<?php get_template_part('parts_header'); ?>

  <div id="pageHead">
    <div class="inner_min">
      <h1 class="pageTitle">ABOUT<span class="jp">会社概要</span></h1>
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


      <div class="about_wrap">
          <ul>
            <li>
              <div class="item">会社名</div>
              <div class="detail">株式会社イフ</div>
            </li>
            <li>
              <div class="item">本社所在地</div>
              <div class="detail_addres">
                <div class="detail_addres_text">〒485-0058　愛知県小牧市小木5丁目411</div>
                <div class="detail_addres_map"><a href="https://goo.gl/maps/4oQ8zBKLucahigJY6">Google MAP</a></div>
              </div>
            </li>
            <li>
              <div class="item">TEL</div>
              <div class="detail">0568-76-5500</div>
            </li>
            <li>
              <div class="item">FAX</div>
              <div class="detail">0568-75-6588</div>
            </li>
            <li>
              <div class="item">E-Mail</div>
              <div class="detail">info@int-f.co.jp</div>
            </li>
            <li>
              <div class="item">ショールーム</div>
              <div class="detail">小牧店、浜松店、富山店</div>
            </li>
            <li>
              <div class="item">設立</div>
              <div class="detail">1996年2月</div>
            </li>
            <li>
              <div class="item">資本金</div>
              <div class="detail">1,000万円</div>
            </li>
            <li>
              <div class="item">代表者</div>
              <div class="detail">代表取締役社長　野村 大</div>
            </li>
            <li>
              <div class="item">事業内容</div>
              <div class="detail">室内装飾用織物等の製造、販売<br />室内装飾用品等の製造、販売<br />室内装飾工事の請負など</div>
            </li>
          </ul>
        </div>

        <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>