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
            echo '<li class="'.$term->slug.'"><a href="'.esc_url( $term_link ).'">'.$term->name.'</a></li>';
          }
          echo '</ul>';
          }
          ?>
        </div>
        <div class="news_time"><?php the_time('Y.m.d'); ?></div>
        <div class="news_tit"><?php the_title(); ?></div>
        <div class="news_content"><?php the_content(); ?></div>
      </div>

      <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

    </div>
  </div>


</div>




<?php get_footer(); ?>

