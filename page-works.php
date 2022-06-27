<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/works.css">

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
      <li>WORKS</li>
    </ul>
  </div>

  <div class="content works_list">
    <div class="content_inner">

      <div class="works_list_wrap">
        <ul>

        <?php

            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
              'paged' => $paged,
            );
            query_posts( $args );
            if ( have_posts() ) :
            while ( have_posts() ) :
            the_post();
          ?>

          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="works_thum">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/no_image.png" alt="">
                <?php endif ; ?>
              </div>
              <div class="works_list_time"><?php the_time('Y.m.d'); ?></div>
              <div class="works_list_tit"><?php the_title(); ?></div>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>


      <div class="works_list_pager">
        <?php global $wp_rewrite;
            $paginate_base = get_pagenum_link(1);
            if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
              $paginate_format = '';
              $paginate_base = add_query_arg('paged', '%#%');
            } else {
              $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
              user_trailingslashit('page/%#%/', 'paged');;
              $paginate_base .= '%_%';
            }
            echo paginate_links( array(
              'prev_text'     => __( '&nbsp;'), // 「前へ」リンクのテキスト
              'next_text'     => __( '&nbsp;'), // 「次へ」リンクのテキスト
              'base' => $paginate_base,
              'format' => $paginate_format,
              'total' => $wp_query->max_num_pages,
              'mid_size' => 1,
              'current' => ($paged ? $paged : 1),
            ));
          ?>
      </div>


    </div>

  </div>
</div>

<?php get_footer(); ?>
