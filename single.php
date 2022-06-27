<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/works.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/works_single.css">

</head>
<body id="works">
<?php get_template_part('parts_header'); ?>

<div id="pageHead">
  <div class="inner_min">
    <h1 class="pageTitle">WORKS<span class="jp">施工実績</span></h1>
  </div>
</div>

<div id="main">

  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/works/">WORKS</a></li>
    </ul>
  </div>


  <div class="content">
    <div class="content_inner">

      <div class="works_wrap">
        <div class="works_time_tit">
          <div class="works_category">
          <?php
            $categories = get_the_category();
            if ( $categories ) {
            foreach ( $categories as $category ) {
            echo '<a href="'.esc_url(get_category_link($category->term_id)).'" class="'.$category->slug.'">'.$category->name.'</a> ';
            }
            }
          ?>
          </div>
          <div class="works_time"><?php the_time('Y.m.d'); ?></div>
          <div class="works_tit"><?php the_title(); ?></div>
        </div>
        <div class="works_text"><?php the_content(); ?></div>
      </div>


      <div class="btn_works_list"><a href="<?php echo home_url(); ?>/works/">施工実績一覧ページ</a></div>

    </div>
  </div>


</div>


<?php get_footer(); ?>

