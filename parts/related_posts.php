<?php if ( is_page( '146' ) || is_page( '170' ) || is_page() ): ?>
<style>
    .title01
    {
        display: block;

        color: #000000;
        font-size: 15px;
        font-weight: bold;
    }
    .description01
    {
        display: block;
        font-size: 14px;
        line-height: 1.2em;
        overflow: hidden;
    }
    .related-post .eyecatch01 {
    float: left;
    width: 104px;
    height: 85px;
    padding-bottom: 23px;
}
a.related-post-1 {
  opacity: 0.7;
  filter: alpha(opacity=70);
  -ms-filter: "alpha(opacity=70)";
}
</style>
<div class="single-widget suggest-post cf">
    <div style="margin: 0 -1em !important；"><h2>その他のサービスメニュー</h2></div>
    <ul class="panel">
        <li id="menu2" class="related-post">
            <div class='yarpp-related'>
                <ul>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(2); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu1_rollover.png" alt="ホームページ制作" />
                            </div>
                            <div class="meta">
                                <span class="title01">ホームページ制作</span>
                                <span class="description01">お客様と「目的」を明確に共有し、価値あるホームページを制作致します。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(40); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu2_rollover.png" alt="WordPressでCMS構築" />
                            </div>
                            <div class="meta">
                                <span class="title01">WordPlessでCMS構築</span>
                                <span class="description01">世界利用者数NO.1のCMSワードプレスを使用し、誰でも更新可能なWEBシステムを取り入れたホームページを作成します。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(154); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu3_rollover.png" alt="スマートホンサイト制作" />
                            </div>
                            <div class="meta">
                                <span class="title01">スマートホンサイト制作</span>
                                <span class="description01">スマホからの流入をしっかりキャッチできるモバイルフレンドリーなサイトを作成致します。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(151); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu4_rollover.png" alt="ソーシャルメディア連携" />
                            </div>
                            <div class="meta">
                                <span class="title01">ソーシャルメディア連携</span>
                                <span class="description01">ソーシャルメディアを活用した被リンク対策、潜在的な顧客層を集客します。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(160); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu5_rollover.png" alt="DTP、バナー、チラシ制作" />
                            </div>
                            <div class="meta">
                                <span class="title01">DTP・印刷物制作</span>
                                <span class="description01">名刺や折り込みチラシ、バナー作成など一枚から対応可能です。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(163); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu6_rollover.png" alt="SEO対策" />
                            </div>
                            <div class="meta">
                                <span class="title01">SEO対策</span>
                                <span class="description01">グーグルのアルゴリズムに則ったホワイトハットなSEO対策を実施致します。内部SEO対策・外部SEO対策も承ります。</span>
                            </div>
                        </a>
                    </li>
                    <li id="yarpp-li" class="1">
                        <a href="<?php echo get_page_link(167); ?>" class="related-post-1">
                            <div class="eyecatch01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footmenu7_rollover.png" alt="WEB制作外注" />
                            </div>
                            <div class="meta">
                                <span class="title01">外注・クリエイティブパートナー</span>
                                <span class="description01">社内業務の外注化をお考えの企業様はお気軽にニコニコワークスへお問い合わせ下さい。</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<?php elseif ( is_single() ): ?>
        <!--roop start-->
        <?php
        $categories = get_the_category($post->ID);
        $category_ID = array();
        foreach($categories as $category):
          array_push( $category_ID, $category -> cat_ID);
        endforeach ;
        $args = array(
            'category__in' => $category_ID,
            'posts_per_page' => 5,
            'meta_key' => 'views',
             'orderby' => 'meta_value_num',
             'order' => 'DESC',
            );
        $the_query = new WP_Query( $args );
                    // ループ
        if ( $the_query->have_posts() ) : ?>
<div class="single-widget suggest-post cf">
        <?php
        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        ?>
    <div style="margin: 0 -1em !important；"><h2><?php echo $cat_name; ?>&nbsp;カテゴリーの人気記事</h2></div>
    <ul class="panel">
        <li id="menu2" class="related-post">
            <div class='yarpp-related'>
                <ul>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); // 何かする ?>
                    <li id="yarpp-li" class="1">
                        <a href="<?php the_permalink();?>" class="related-post-1">
                            <div class="eyecatch">
                                <?php $title= get_the_title(); the_post_thumbnail( '120' , array( 'alt' =>$title, 'title' => $title)); ?>
                            </div>
                            <div class="meta">
                            <span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>
                                <span class="title"><?php the_title(); ?></span>
                            </div>
                        </a>
                    </li>
<?php endwhile; // 繰り返し処理終了 ?>
                </ul>
            </div>
        </li>
    </ul>
</div>
<?php endif; // WordPress ループ 終了?>
<?php wp_reset_postdata(); ?>
<!--end main roop-->
<?php endif; ?>