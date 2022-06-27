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
      <li>NEWS</li>
    </ul>
  </div>

  <div class="content">
    <div class="content_inner">
      <div class="news_wrap">
        <ul>
            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

              $args = array(
                  'post_type' => 'news', // 投稿タイプを指定
                  'paged' => $paged, // 表示するページ数
              ); ?>
              <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->
              <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <!-- ここに表示するタイトルやコンテンツなどを指定 -->

          <li class="news_list">
              <div class="news_cat_time">
                <div class="category">
                    <?php
                      //タームの取得
                      $terms = wp_get_object_terms($post->ID, 'news_cat');
                      //タームを出力
                      if(!empty($terms) && !is_wp_error($terms)){
                      ?>
                        <?php foreach($terms as $term){ ?>
                        <?php } ?>
                    <?php } ?>

                    <?php
                      $terms = get_the_terms($post->ID, 'news_cat');
                      // 複数のカスタム分類を指定する場合は配列を使用する
                      // $terms = get_the_terms($post->ID, array('カスタム分類名1','カスタム分類名2'));
                      if ( $terms ) {
                      echo '<ul>';
                      foreach ( $terms as $term ) {
                      $term_link = get_term_link( $term );
                      echo '<li class="'.$term->slug.'">
                      <a href="'.esc_url( $term_link ).'">'.$term->name.'</a></li>';
                      }
                      echo '</ul>';
                      }
                    ?>
                    <?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->

                </div>
                <div class="news_list_time"><?php the_time('Y.m.d'); ?></div>
              </div>
              <a class="news_list_tit_link" href="<?php the_permalink(); ?>">
              <div class="news_list_tit"><?php the_title(' '); ?></div>
              </a>
          </li>
          <?php endwhile; ?>
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