<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/product.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/js/swiper4/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/js/swiper4/css/swiper_setting.css">
</head>
<body id="product">
<?php get_template_part('parts_header'); ?>

  <div id="pageHead">
    <div class="inner_min">
      <h1 class="pageTitle">PRODUCTS / SERVICE<span class="jp">取扱製品/サービス</span></h1>
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

        <!-- swiper4 開始-->

        <div id="curtain_shade" class="gallery_wrap">

          <div class="gallery_tit">Curtain / shade<span>カーテン / シェード</span></div>

          <section class="swiper-container gallery_main">
              <div class="swiper-wrapper">
                  <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <?php
                  $images = get_field('img_product_a1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>

                  <?php endwhile; endif; ?>


              </div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </section>

          <div class="swiper-container gallery_thumbs">
              <div class="swiper-wrapper">
                    <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>
                  <?php
                  $images = get_field('img_product_a1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_a20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php endwhile; endif; ?>

              </div>
          </div>
        </div>

        <div id="blind" class="gallery_wrap">
          <div class="gallery_tit">Blind / roll screen<span>ブラインド / ロールスクリーン</span></div>
          <section class="swiper-container gallery_main_b">
              <div class="swiper-wrapper">
                  <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <?php
                  $images = get_field('img_product_b1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php endwhile; endif; ?>


              </div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </section>

          <div class="swiper-container gallery_thumbs_b">
              <div class="swiper-wrapper">
                    <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>
                  <?php
                  $images = get_field('img_product_b1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_b20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php endwhile; endif; ?>

              </div>
          </div>
        </div>

        <div id="curtain_rail" class="gallery_wrap">
          <div class="gallery_tit">Curtain Rail<span>カーテンレール</span></div>
          <section class="swiper-container gallery_main_c">
              <div class="swiper-wrapper">
                  <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <?php
                  $images = get_field('img_product_c1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php endwhile; endif; ?>


              </div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </section>

          <div class="swiper-container gallery_thumbs_c">
              <div class="swiper-wrapper">
                    <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>
                  <?php
                  $images = get_field('img_product_c1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_c20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php endwhile; endif; ?>

              </div>
          </div>
        </div>

        <div id="interior" class="gallery_wrap">
          <div class="gallery_tit">interior goods<span>インテリア雑貨</span></div>
          <section class="swiper-container gallery_main_d">
              <div class="swiper-wrapper">
                  <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <?php
                  $images = get_field('img_product_d1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.$images['url'].'"></div>';}
                  ?>
                  <?php endwhile; endif; ?>
              </div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </section>

          <div class="swiper-container gallery_thumbs_d">
              <div class="swiper-wrapper">
                    <?php
                  $args = array(
                  'post_type' => 'product',
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>
                  <?php
                  $images = get_field('img_product_d1');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d2');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d3');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d4');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d5');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d6');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d7');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d8');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d9');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d10');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d11');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d12');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d13');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d14');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d15');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d16');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d17');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d18');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d19');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php
                  $images = get_field('img_product_d20');
                  if($images){echo '<div class="swiper-slide" style="background-image:url('.$images['url'].')"><img src="'.get_template_directory_uri().'/assets/images/product/thumb_spacer.png"></div>';}
                  ?>
                  <?php endwhile; endif; ?>

              </div>
          </div>
        </div>

        <!-- swiper4 終了-->

        <div id="coating" class="gallery_wrap">
          <div class="gallery_tit_wrap">
            <div class="gallery_tit">Antiviral coating<span>抗ウイルスコーティング</span></div>
            <div class="coating_txt"><div class="coating_badge"><img src="<?php bloginfo('template_directory'); ?>/assets/images/top/icon_patent.png" alt="" class="change"></div>あらゆる素材を抗ウイルス化する、世界最高水準の実力を持ったコーティングです。<br />
            ナスクナノテクノロジーが開発したメディカルナノコートを、カーテンや室内装飾品に塗布することにより、様々なウイルスと闘う現代において、安心できる環境作りを実現することが可能になりました。今まで効果がなかった寝室などの室内や暗所でも抑制機能が働いて、どんな素材もコーティングしウイルスを逃しません。<br /><br />
            あらゆる性能試験・安全性試験をクリアし、新型コロナウイルスに対する不活化効果も実証されております（奈良県立医科大学2021年2月）。子供が舐めても問題のない基準をクリアし、お肌への影響もテスト済みなので、あらゆる場面で安心してお使いいただけます。<br /><br />
            ウイルス感染予防対策としては、関西国際空港、東京国際空港（羽田空港）国際線、市役所、美術館、神社、高級ブランド店舗、ホテル、医療機関などですでに導入されています。<br />
            ご要望に応じてカーテン以外にも抗ウイルス施工を行っております。お気軽にご相談ください。</div>
          </div>
          <div class="btn_panflet"><a href="<?php bloginfo('template_url'); ?>/assets/images/medical_nanocoat.pdf" target="_blank" rel="noopener noreferrer">パンフレットダウンロード</a></div>
        </div>

        <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

      </div>
    </div>

  </div>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/swiper4/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/swiper4/js/swiper_setting.js"></script>


<?php get_footer(); ?>