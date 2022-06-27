<?php get_header(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/showroom.css">

</head>
<body id="showroom">
<?php get_template_part('parts_header'); ?>

  <div id="pageHead">
    <div class="inner_min">
      <h1 class="pageTitle">SHOWROOM  INFORMATION<span class="jp">ショールームのご案内</span></h1>
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

        <div class="showroom_wrap">
          <div class="showroom_nav">
            <ul>
              <a href="<?php echo home_url(); ?>/showroom/#komaki_room"><li class="komaki">小牧店</li></a>
              <a href="<?php echo home_url(); ?>/showroom/#hamamatsu_room"><li class="hamamatsu">浜松店</li></a>
              <a href="<?php echo home_url(); ?>/showroom/#toyama_room"><li class="toyama">富山店</li></a>
            </ul>
          </div>
          <!-- 小牧店 -->
          <div id="komaki_room">
            <div class="showroom_info">
              <div class="showroom_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_komaki.jpg" alt=""></div>
              <div class="showroom_text">

                <div class="showroom_text_tit">小牧店</div>
                <div class="showroom_img_sp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_komaki.jpg" alt=""></div>

                <div class="showroom_instagram">

                  <div class="cp_arrows">
                      <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/hamamatsu/">
                        <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                          <g fill="none" stroke="#B2AEA8" stroke-width="0.2" stroke-linejoin="round" stroke-miterlimit="10">
                          <circle class="arrow_icon_circle" cx="15" cy="15" r="14.6"></circle>
                          </g>
                        </svg>
                        <div class="index_circle"><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_instagram.png" alt=""></a></div>
                      </a>
                  </div>

                </div>
                <div class="showroom_text_address">
                  <ul>
                    <li><div>住所</div><div>〒485-0078 愛知県小牧市西島町17番地</div></li>
                    <li><div>Fax</div><div>0568-76-1345</div></li>
                    <li><div>E-mail</div><div>honten@int-f.co.jp</div></li>
                    <li><div>営業時間</div><div>9:00～18:00</div></li>
                    <li><div>定休日</div><div>水曜日</div></li>
                  </ul>
                </div>
                <div class="showroom_text_tel"><span>0568-42-1433</span><p>（受付時間：9:00～18:00）</p></div>
                <a href="<?php echo home_url(); ?>/reservation#komaki">
                  <div class="showroom_text_btn komaki">
                  小牧店へのご来店予約はこちらから
                  </div>
                </a>
              </div>
            </div>
            <div class="showroom_map">
              <div class="showroom_map_tit">交通アクセス</div>
              <div class="showroom_map_txt">駐車場5台分あります。</div>
              <div class="showroom_map_g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.433377366375!2d136.89550865146583!3d35.29521165855454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60030b5df954527f%3A0x13aaa10a315939e6!2z44CSNDg1LTAwNzgg5oSb55-l55yM5bCP54mn5biC6KW_5bO255S677yR77yX!5e0!3m2!1sja!2sjp!4v1626343203302!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="showroom_news">
              <div class="showroom_news_tit_index">
                <div class="showroom_news_tit">小牧店からのお知らせ</div>
                <div class="showroom_news_index">
                  <div class="cp_arrows">
                    <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/komaki/">
                      <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 32 32">
                        <g fill="none" stroke="#939393" stroke-width="0.1" stroke-linejoin="round" stroke-miterlimit="10">
                        <circle class="arrow_icon_circle" cx="16" cy="16" r="14.12"></circle>
                        </g>
                      </svg>
                      <div class="index_circle">INDEX</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="showroom_news_list_wrap">
                <ul>
                <?php
                    $args = array(
                      'post_type' => 'news', //①カスタム投稿名 (通常の「投稿」はpost)
                      'taxonomy' => 'news_cat', //②タクソノミー名を指定 (通常の「投稿」はcategory)
                      'field' => 'slug',   //'term_id'、'slug'など、次の term を指定するフィールド名を指定
                      'term' => 'komaki',  //③タームを指定
                      //'terms' => array('test','test2'), &nbsp;//③タームを指定 (複数の場合)
                      'posts_per_page' => 3, //表示数を指定
                    );

                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <li class="showroom_news_list">
                    <div class="showroom_news_cat_time">
                      <div class="showroom_news_list_time"><?php the_time('Y.m.d'); ?></div>
                      <div class="category komaki">
                      <a href="<?php echo home_url(); ?>/news_cat/komaki/">小牧店</a>
                      </div>
                    </div>
                    <a class="news_list_tit_link" href="<?php the_permalink(); ?>">
                      <div class="showroom_news_list_tit">
                        <?php the_title(' '); ?>
                      </div>

                    </a>
                  </li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
            <div class="showroom_bottomline"></div>
          </div>

          <!-- 浜松店 -->
          <div id="hamamatsu_room"　class="anchorlink">
            <div class="showroom_info">
              <div class="showroom_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_hamamatsu.jpg" alt=""></div>
              <div class="showroom_text">
                <div class="showroom_text_tit">浜松店</div>
                <div class="showroom_img_sp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_hamamatsu.jpg" alt=""></div>
                <div class="showroom_instagram">
                  <div class="cp_arrows">
                      <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/hamamatsu/">
                        <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                          <g fill="none" stroke="#B2AEA8" stroke-width="0.2" stroke-linejoin="round" stroke-miterlimit="10">
                          <circle class="arrow_icon_circle" cx="15" cy="15" r="14.6"></circle>
                          </g>
                        </svg>
                        <div class="index_circle"><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_instagram.png" alt=""></a></div>
                      </a>
                  </div>
                </div>
                <div class="showroom_text_address">
                  <ul>
                    <li><div>住所</div><div>〒430-0935 静岡県浜松市中区伝馬町312-22 第二金井屋ビル1階</div></li>
                    <li><div>Fax</div><div>053-451-4452</div></li>
                    <li><div>E-mail</div><div>hamamatsu@int-f.co.jp</div></li>
                    <li><div>営業時間</div><div>10:30～18:00</div></li>
                    <li><div>定休日</div><div>水曜日</div></li>
                  </ul>
                </div>
                <div class="showroom_text_tel"><span>053-451-4451</span><p>（受付時間：10:30～18:00）</p></div>
                <a href="<?php echo home_url(); ?>/reservation#hamamatsu">
                  <div class="showroom_text_btn hamamatsu">
                  浜松店へのご来店予約はこちらから
                  </div>
                </a>
              </div>
            </div>
            <div class="showroom_map">
              <div class="showroom_map_tit">交通アクセス</div>
              <div class="showroom_map_txt">Pクーポン提携駐車場をご利用下さい</div>
              <div class="showroom_map_g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.983009122945!2d137.7264789514542!3d34.705608490365684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade7c99fc9657%3A0xb8fb9dbf0281a37c!2z44CSNDMwLTA5MzUg6Z2Z5bKh55yM5rWc5p2-5biC5Lit5Yy65Lyd6aas55S677yT77yR77ySIDHpmo4!5e0!3m2!1sja!2sjp!4v1626402872574!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div class="showroom_news">
              <div class="showroom_news_tit_index">
                <div class="showroom_news_tit">浜松店からのお知らせ</div>
                <div class="showroom_news_index">
                  <div class="cp_arrows">
                    <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/hamamatsu/">
                      <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 32 32">
                        <g fill="none" stroke="#939393" stroke-width="0.1" stroke-linejoin="round" stroke-miterlimit="10">
                        <circle class="arrow_icon_circle" cx="16" cy="16" r="14.12"></circle>
                        </g>
                      </svg>
                      <div class="index_circle">INDEX</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="showroom_news_list_wrap">
                <ul>
                <?php
                    $args = array(
                      'post_type' => 'news', //①カスタム投稿名 (通常の「投稿」はpost)
                      'taxonomy' => 'news_cat', //②タクソノミー名を指定 (通常の「投稿」はcategory)
                      'field' => 'slug',   //'term_id'、'slug'など、次の term を指定するフィールド名を指定
                      'term' => 'hamamatsu',  //③タームを指定
                      //'terms' => array('test','test2'), &nbsp;//③タームを指定 (複数の場合)
                      'posts_per_page' => 3, //表示数を指定
                    );

                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <li class="showroom_news_list">
                    <div class="showroom_news_cat_time">
                      <div class="showroom_news_list_time"><?php the_time('Y.m.d'); ?></div>
                      <div class="category hamamatsu">
                      <a href="<?php echo home_url(); ?>/news_cat/hamamatsu/">浜松店</a>
                      </div>
                    </div>
                    <a class="news_list_tit_link" href="<?php the_permalink(); ?>">
                      <div class="showroom_news_list_tit">
                        <?php the_title(' '); ?>
                      </div>

                    </a>
                  </li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
            <div class="showroom_bottomline"></div>
          </div>

          <!-- 富山店 -->
          <div id="toyama_room">
            <div class="showroom_info">
              <div class="showroom_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_toyama.jpg" alt=""></div>
              <div class="showroom_text">
                <div class="showroom_text_tit">富山店</div>
                <div class="showroom_img_sp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_toyama.jpg" alt=""></div>

                <div class="showroom_instagram">

                  <div class="cp_arrows">
                      <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/hamamatsu/">
                        <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                          <g fill="none" stroke="#B2AEA8" stroke-width="0.2" stroke-linejoin="round" stroke-miterlimit="10">
                          <circle class="arrow_icon_circle" cx="15" cy="15" r="14.6"></circle>
                          </g>
                        </svg>
                        <div class="index_circle"><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/showroom/showroom_instagram.png" alt=""></a></div>
                      </a>
                  </div>


                </div>
                <div class="showroom_text_address">
                  <ul>
                    <li><div>住所</div><div>〒939-8211 富山県富山市二口町1-9-2 アールビル1階</div></li>
                    <li><div>Fax</div><div>076-425-0222</div></li>
                    <li><div>E-mail</div><div>toyama@int-f.co.jp</div></li>
                    <li><div>営業時間</div><div>10:00～18:00</div></li>
                    <li><div>定休日</div><div>水曜日</div></li>
                  </ul>
                </div>
                <div class="showroom_text_tel"><span>076-425-0022</span><p>（受付時間：10:00～18:00）</p></div>
                <a href="<?php echo home_url(); ?>/reservation#toyama">
                  <div class="showroom_text_btn toyama">
                  富山店へのご来店予約はこちらから
                  </div>
                </a>
              </div>
            </div>
            <div class="showroom_map">
              <div class="showroom_map_tit">交通アクセス</div>
              <div class="showroom_map_txt">駐車場5台分あります。</div>
              <div class="showroom_map_g"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.1128558238456!2d137.199836551484!3d36.671787482517864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff790374eef26d5%3A0x4040f3e2fd4b11b4!2z44CSOTM5LTgyMTEg5a-M5bGx55yM5a-M5bGx5biC5LqM5Y-j55S677yR5LiB55uu77yZ4oiS77ySIDHpmo4!5e0!3m2!1sja!2sjp!4v1626402938889!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div class="showroom_news">
              <div class="showroom_news_tit_index">
                <div class="showroom_news_tit">富山店からのお知らせ</div>
                <div class="showroom_news_index">
                  <div class="cp_arrows">
                    <a class="link cp_arrow" href="<?php echo home_url(); ?>/news_cat/toyama/">
                      <svg class="arrow_icon" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 32 32">
                        <g fill="none" stroke="#939393" stroke-width="0.1" stroke-linejoin="round" stroke-miterlimit="10">
                        <circle class="arrow_icon_circle" cx="16" cy="16" r="14.12"></circle>
                        </g>
                      </svg>
                      <div class="index_circle">INDEX</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="showroom_news_list_wrap">
                <ul>
                <?php
                    $args = array(
                      'post_type' => 'news', //①カスタム投稿名 (通常の「投稿」はpost)
                      'taxonomy' => 'news_cat', //②タクソノミー名を指定 (通常の「投稿」はcategory)
                      'field' => 'slug',   //'term_id'、'slug'など、次の term を指定するフィールド名を指定
                      'term' => 'toyama',  //③タームを指定
                      //'terms' => array('test','test2'), &nbsp;//③タームを指定 (複数の場合)
                      'posts_per_page' => 3, //表示数を指定
                    );

                  query_posts( $args );
                  if ( have_posts() ) :
                  while ( have_posts() ) :
                  the_post();
                  ?>

                  <li class="showroom_news_list">
                    <div class="showroom_news_cat_time">
                      <div class="showroom_news_list_time"><?php the_time('Y.m.d'); ?></div>
                      <div class="category toyama">
                      <a href="<?php echo home_url(); ?>/news_cat/toyama/">富山店</a>
                      </div>
                    </div>
                    <a class="news_list_tit_link" href="<?php the_permalink(); ?>">
                      <div class="showroom_news_list_tit">
                        <?php the_title(' '); ?>
                      </div>

                    </a>
                  </li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>


        </div>


        <div class="btn_home"><a href="<?php echo home_url(); ?>/">HOME</a></div>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>