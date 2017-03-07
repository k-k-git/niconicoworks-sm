<?php if ( is_page( '146' ) ): ?>
        <div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
        <a href="<?php echo home_url('/'); ?>" class="go2top-button-1"><div class="button">ホームへ戻る</div></a>
        </div>
<?php elseif ( is_page( '321' ) ): ?>
<div class="single-widget go2top cf" style="    margin: 5px 0 5px 0;">
<a href="<?php echo get_permalink(34); ?>" class="go2top-button-1"><div class="button">ブログTOPページへ戻る</div></a>
</div>
<?php elseif ( is_page( '170' ) || is_page() ): ?>
        <h3>結果につながるホームページをご提案します。</h3>
        <div class="single-widget go2top cf" style="    margin: 0px 0 5px 0;">
        <a href="<?php echo get_page_link(146); ?>" class="go2top-button-1"><div class="button">お見積り・お問い合わせ</div></a>
        <p>お気軽にお問い合わせください。</p>
        </div>
<?php elseif( is_archive( 'column' ) ): ?>
        <div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
        <a href="<?php echo home_url('/'); ?>" class="go2top-button-1"><div class="button">ホームへ戻る</div></a>
        </div>
<?php elseif( is_singular("column") ): ?>
        <div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
        <a href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>" class="go2top-button-1"><div class="button">コラムTOPへ戻る</div></a>
        </div>
<?php elseif ( is_single() ): ?>
<div class="single-widget go2top cf" style="    margin: 5px 0 5px 0;">
<a href="<?php echo get_permalink(34); ?>" class="go2top-button-1"><div class="button">ブログTOPページへ戻る</div></a>
</div>
<?php endif; ?>