<footer id="footer">

  <a href="#siteHead"><div id="toPageTop"></div></a>

  <!-- gNav -->
  <div class="footer_nav">
    <div class="footer_nav_main">
      <div class="footer_nav_menu">
        <ul>
          <li><a href="<?php echo home_url(); ?>/">
            HOME<span>ホーム</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/concept/">
            CONCEPT<span>コンセプト</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/product/">
            PRODUCTS<span>取扱製品/サービス</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/flow/">
            FLOW<span>オーダーの流れ</span>
          </a></li>
        </ul>
        <ul>
          <li><a href="<?php echo home_url(); ?>/works">
            WORKS<span>施工実績</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/showroom/">
            SHOWROOM INFORMATION<span>ショールームのご案内</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/about/">
            ABOUT<span>会社概要</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/news/">
            NEWS<span>お知らせ</span>
          </a></li>
        </ul>
        <ul>
          <li><a href="<?php echo home_url(); ?>/inquiry">
            CONTACT<span>お問い合わせ</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/reservation/">
            RESERVATION<span>来店予約フォーム</span>
          </a></li>
          <li><a href="<?php echo home_url(); ?>/privacy/">
            PRIVACY POLICY<span>プライバシーポリシー</span>
          </a></li>
        </ul>
      </div>
      <div class="footer_company">
        <div class="footer_company_name"><a href="<?php echo home_url(); ?>/">株式会社イフ</a></div>
        <div class="footer_company_location">〒485-0058 愛知県小牧市小木5丁目411</div>
        <div class="footer_company_map"><a href="https://goo.gl/maps/4oQ8zBKLucahigJY6" target="_blank" rel="noopener noreferrer">Google Map</a></div>
      </div>

    </div>
    <div class="copy">
      COPYRIGHT &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> 株式会社イフ
    </div>

  </div>

</footer>



<!-- /page_wrapper -->
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/colorbox/1.6.4/jquery.colorbox-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/slick/slick.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/smoothScroll.js"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/common.js"></script>
<?php if(is_home()): ?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/loading.js"></script>
<?php endif; ?>
</body>
</html>
