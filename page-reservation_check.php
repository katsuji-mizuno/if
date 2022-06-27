<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/reservation.css">

</head>


<body id="reservation_check">
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
        <div class="reservation_txt">ご入力内容</div>


          <?php the_content(); ?>
      </div>

    </div>
  </div>
</div>





<?php get_footer(); ?>



