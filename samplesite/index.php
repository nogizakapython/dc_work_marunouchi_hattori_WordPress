<?php get_header(); ?>
    <div id="slide">
        <ul class="slide-inner">
            <li></li>
            <li></li>
            <li></li>
        </ul>
         <div class="s-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
         <div class="s-next"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
         <div class="cont-nav"></div>
    </div>
    <div class="container">
        <div id="contents">
            <div class="top-nav">
                <div class="top-navColumn top-navColumn_left">
                    <h2>SERVICE</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/service/"><img src="<?php echo get_template_directory_uri(); ?>/images/photo02.jpg" alt="" width="460" /></a></div>
                    <p>弊社のサービスをご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/service/">MORE</a></p>
                </div>
                <div class="top-navColumn top-navColumn_right">
                    <h2>COMPANY</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/company/"><img src="<?php echo get_template_directory_uri(); ?>/images/photo03.jpg" alt=""  width="460" /></a></div>
                    <p>会社情報をご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/company/">MORE</a></p>
                </div>
            </div>
            <div id="cont_left">
                <div class="information">
                    <h2>INFORMATION</h2>
                    <dl>
                        <dt>2020-08-01</dt>
                        <dd>
                        <span class="tab tag_gyoumu">お知らせ</span>
                        <a href="<?php echo home_url(); ?>/single/">夏季休暇のお知らせを掲載しました</a></dd>
                        <dt>2020-07-29</dt>
                        <dd>
    					<span class="tab tag_release">プレスリリース</span>
                        <a href="<?php echo home_url(); ?>/sample/">新サービスのお知らせを掲載しました</a></dd>
                        <dt>2020-07-23</dt>
                        <dd>
    					<span class="tab tag_gyoumu">お知らせ</span>
                        <a href="<?php echo home_url(); ?>/sample/">雑誌掲載情報を掲載しました</a></dd>
                        <dt>2020-07-20</dt>
                        <dd>
                        <span class="tab tag_gyoumu">お知らせ</span>
                        <a href="<?php echo home_url(); ?>/sample/">雑誌掲載情報を掲載しました</a></dd>
                    </dl>
                </div>


                <div class="information">
                    <h2>BLOG</h2>
                    <dl>
                        <dt>2020-08-04</dt>
                        <dd>
                        <div class="b_img">
    	                    <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
                        </div>
                         <div class="b_right">
                        <a href="<?php echo home_url(); ?>/sample/">社長通信</a>
                         </div></dd>

                        <dt>2020-08-02</dt>
                        <dd>
                        <div class="b_img">
    	                    <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
                        </div>
                         <div class="b_right">
                        <a href="<?php echo home_url(); ?>/sample/">社員紹介</a>
                         </div></dd>

                        <dt>2020-08-01</dt>
                        <dd>
                        <div class="b_img">
    	                    <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
                        </div>
                         <div class="b_right">
                        <a href="<?php echo home_url(); ?>/sample/">セミナー開催報告</a>
                         </div></dd>


                    </dl>
                </div>
            </div>

        </div>
    </div>

    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>
</html>
