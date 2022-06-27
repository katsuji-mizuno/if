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

        <div class="thanks_text">
              <p>このたびは、当店にご来店予約いただき誠にありがとうございます。</p>
              <p>予約状況を確認後、店舗スタッフよりご連絡いたします。</p>
        </div>

        <?php the_content(); ?>
        <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

      </div>
    </div>


  </div>
</div>





<?php get_footer(); ?>

