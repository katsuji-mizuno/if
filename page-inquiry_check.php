<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/inquiry.css">

</head>
<body id="inquiry_check">
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

        <div class="inquiry_text">ご入力内容</div>


        <?php the_content(); ?>


      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>