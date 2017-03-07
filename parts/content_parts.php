<?php if ( is_page( '146' ) ): ?>
<!-- is_page( '146' ) (content_parts.php)
======================================================================================================================================== -->
    <article>
        <h1><?php echo get_the_title(); ?></h1>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/related_posts'); ?>
    </article><!--end article-->
<?php elseif ( is_page( '170' ) ): ?>
<!-- is_page( '170' ) (content_parts.php)
======================================================================================================================================== -->
    <article>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/related_posts'); ?>
        <aside class="subBox contactBox">
        <?php get_template_part('parts/button'); ?>
        </aside>
    </article><!--end article-->
<?php elseif ( is_page( '321' ) ): ?>
<!-- is_page( '321' ) (content_parts.php)
======================================================================================================================================== -->
    <article>
        <?php get_template_part('parts/head_line'); ?>
        <?php get_template_part('parts/content_ad'); ?>
        <?php get_template_part('parts/pankuzu_list'); ?>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/content_ad'); ?>
        <?php get_template_part('parts/widget'); ?>
        <?php get_template_part('parts/button'); ?>
    </article>
<?php elseif ( is_archive( 'column' ) ): ?>
<!-- is_page( '146' ) (content_parts.php)
======================================================================================================================================== -->
    <article class="blog-home">
        <?php echo get_template_part('parts/each_exrpt_post'); ?>
    </article>
<?php elseif( is_singular("column") ): ?>
    <article>
        <h2><?php echo get_the_title(); ?></h2>
        <!--start main roop-->
        <?php if (have_posts()): // WordPress ループ ?>
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <?php the_content(); ?>
        <?php endwhile; // 繰り返し処理終了 ?>
        <?php else: // ここから記事が見つからなかった場合の処理 ?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
        <?php endif; ?>
        <div class="postinfo">
        <?php the_time('Y年m月d日') ?>
        </div>
        <?php wp_reset_query() ?>
        <!--end main roop-->
    </article>
<?php elseif( is_page( '34' ) || is_category() || is_tag() || is_search() ): ?>
<!-- is_page( '34' )/category/tag/search (content_parts.php)
======================================================================================================================================== -->
    <article class="blog-home">
        <?php get_template_part('parts/head_line'); ?>
        <?php get_template_part('parts/content_ad'); ?>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/content_ad'); ?>
        <?php get_template_part('parts/widget'); ?>
    </article>
<?php elseif ( is_page() ): ?>
<!-- page (content_parts.php)
======================================================================================================================================== -->
    <article>
        <h1><?php echo get_the_title(); ?></h1>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/related_posts'); ?>
        <aside class="subBox contactBox">
        <?php get_template_part('parts/button'); ?>
        </aside>
    </article><!--end article-->
<?php elseif ( is_single() ): ?>
<!-- single (content_parts.php)
======================================================================================================================================== -->
    <article>
        <?php get_template_part('parts/head_line'); ?>
        <?php get_template_part('parts/content_ad'); ?>
        <?php get_template_part('parts/pankuzu_list'); ?>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <div class="postinfo">
        <?php the_time('Y年m月d日') ?> │ カテゴリー：<?php the_category(', ') ?>
        </div>
        <?php SNS_btn_horizontal_bottom() ?>
        <?php get_template_part('parts/content_ad'); ?>
        <div class="more-post">
            <ul class="cf">
                <li class="single-post-prev"><?php previous_post_link('%link', '< 前の記事', TRUE, ''); ?></li>
                <li class="single-post-next"><?php next_post_link('%link', '次の記事 >', TRUE, ''); ?></li>
            </ul>
        </div>
        <div class="single-widget go2top">
            <a href="<?php echo get_latest_post_url(); ?>" class="go2top-button-1"><div class="button">新着記事をチェック</div></a>
        </div>
        <?php get_template_part('parts/related_posts'); ?>
        <?php get_template_part('parts/widget'); ?>
        <?php get_template_part('parts/button'); ?>
    </article>
<?php elseif(is_home()): ?>
<!-- index (content_parts.php)
======================================================================================================================================== -->
    <div id="slider">
        <div id="owl" class="owl-carousel owl-theme">
            <div class="item">
                <div id="menu">
                    <div class="spmenutop">
                        <h3>Welcome!</h3>
                        <p>　</p>
                        <p>　</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/hand.png" width="40" height="32" alt="" />
                        <p>　</p>
                        <p class="sptop">→にフリックして各メニューを御覧ください</p>
                    </div>
                    <div class="sptopmail">
                        <p>　</p>
                        <p>　</p>
                        <a href="<?php echo get_page_link(146); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mail_icon.png" width="40" height="40" alt="お問合せ" /></a>
                        <p class="sptop">お問い合わせ</p>
                        <p>　</p>
                    </div>
                    <div class="sptoptel">
                        <p>　</p>
                        <p>　</p>
                        <a href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/column_icon.png" width="40" height="" alt="近況報告" /></a>
                        <p class="sptop">新規案件受付状況</p>
                        <p>　</p>
                    </div>
                    <br class="fix" />
                    <p>　</p>
                    <p class="sptop">
                        Web Design & Create NICONICOWORKS
                        <br /> 〒874-0021 大分県別府市亀川中央町
                        <br /> Mail:<a href="mailto:info&#64;niconicoworks.com">info@niconicoworks.com</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>オールインワンパッケージ</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_allinone.png" alt="WordPress+スマートフォンサイト+SEO" />
                    <p>全部入りのコストパフォーマンス抜群の制作プラン！料金案内で迷ったらコレ！</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(170); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>ホームページ制作</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_hp2014.png" alt="ホームページ制作" />
                    <p>大分県で安くホームページ作成をお考えのお客様はニコニコワークスへお問い合わせください！</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(2); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>WordPressでCMS構築</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_wp2014.png" alt="WORDPRESSでCMS構築" />
                    <p>世界利用者数NO.1のCMSワードプレスを使用し、誰でも更新可能なWEBシステムを取り入れたホームページを作成します。</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(40); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>スマートフォンサイト制作</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_sp2014.png" alt="スマートフォンサイト制作" />
                    <p>スマホからの流入をしっかりキャッチできるモバイルフレンドリーなサイトを作成致します。</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(154); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>ネットショップ構築</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_shop2014.png" alt="ネットショップ構築" />
                    <p>楽天、Amazonでのネットショップ構築をお考えのお客様はニコニコワークスへ！</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(157); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>ソーシャルメディア活用</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_sns2014.png" alt="ソーシャルメディア活用" />
                    <p>ソーシャルメディアを活用した被リンク対策、潜在的な顧客層を集客します。</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(151); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>DTP・印刷物制作</h3><img src="<?php echo get_template_directory_uri(); ?>/img/top_dtp2014.png" alt="DTP・印刷物制作" />
                    <p>名刺やチラシ、バナーなど一枚から対応可能です！</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(160); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>SEO対策</h3><img src="<?php echo get_template_directory_uri(); ?>/img/top_seo2014.png" alt="SEO対策" />
                    <p>グーグルのアルゴリズムに則ったホワイトハットなSEO対策を実施致します。内部SEO対策・外部SEO対策も承ります。</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(163); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="item">
                <div id="menu">
                    <h3>外注・クリエイティブパートナー</h3><img src="<?php echo get_template_directory_uri(); ?>/img/top_out2014.png" alt="外注・クリエイティブパートナー" />
                    <p>社内業務の外注化をお考えの企業様はお気軽にニコニコワークスへお問い合わせ下さい。</p>
                    <p>　</p>
                    <a href="<?php echo get_page_link(167); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
        </div>
        <!--end owl-->
    </div>
    <!--end slider-->
<?php endif; ?>