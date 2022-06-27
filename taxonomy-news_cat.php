<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/news.css">

</head>
<body id="news">
<?php get_template_part('parts_header'); ?>

<div id="pageHead">
  <div class="inner_min">
    <h1 class="pageTitle">NEWS<span class="jp">お知らせ</span></h1>
  </div>
</div>


<div id="main">

  <div class="brunch">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url(); ?>/news/">NEWS</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="content_inner">

      <div class="news_wrap">
        <ul>

          <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <?php
            $terms = get_the_terms( get_the_ID(), 'news_cat' );
            if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
          ?>

          <li class="news_list">
              <div class="news_cat_time">
                <div class="category">

                <?php
                $terms = get_the_terms($post->ID, 'news_cat');
                // 複数のカスタム分類を指定する場合は配列を使用する
                // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
                if ( $terms ) {
                echo '<ul>';
                foreach ( $terms as $term ) {
                  $term_link = get_term_link( $term );
                  echo '<li class="'.$term->slug.'"><a href="'.esc_url( $term_link ).'">'.$term->name.'</a></li>';
                }
                echo '</ul>';
                }
                ?>
                </div>
                <div class="news_list_time"><?php the_time('Y.m.d'); ?></div>
              </div>

              <a class="news_list_tit_link" href="<?php the_permalink(); ?>">
                <div class="news_list_tit"><?php the_title(' '); ?></div>
              </a>
              <?php foreach( $terms as $term ) : ?>
          </li>

          <?php endforeach; ?>

          <?php endif; endif; ?>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->
        </ul>
      </div>

      <div class="news_list_pager">
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

<?php get_footer();