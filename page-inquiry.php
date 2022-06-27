<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/inquiry.css">

</head>
<body id="inquiry">
<?php get_template_part('parts_header'); ?>

  <div id="pageHead">
    <div class="inner_min">
      <h1 class="pageTitle">CONTACT<span class="jp">お問い合わせ</span></h1>
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

        <div class="inqury_link">
          <div class="inqury_link_text">カーテン、ブラインド等のご相談、ご来店予約は各ショールームへお問い合わせください。</div>
          <div class="inqury_link_btn">
            <div class="inqury_link_btn_showroom"><a href="<?php echo home_url(); ?>/showroom/">ショールーム一覧ページ</a></div>
            <div class="inqury_link_btn_reservation"><a href="<?php echo home_url(); ?>/reservation/">ご来店予約</a></div>
          </div>
        </div>

        <?php the_content(); ?>


      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>