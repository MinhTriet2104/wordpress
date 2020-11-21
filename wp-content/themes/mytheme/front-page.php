<?php
    // include header
    get_header();
?>
<!-- phần nội dung trang chủ -->
<div class="container">

    <div class="mt-1">
        <?=
            do_shortcode('[recent_post_slider design="design-2" post_type="news" recent_post_carousel speed="1500" autoplay="true" autoplay_interval="2000"]');
        ?>
    </div>

    <div class="row mt-1">
        <div class="col-md-6">
            <?=
                do_shortcode('[sp_news category="18" limit="1" grid="1" order="DESC" orderby="date" pagination_type=""]'); 
            ?>
        </div>
        <div class="col-md-6">
            <?=
                do_shortcode('[sp_news category="21" limit="1" grid="1" order="DESC" orderby="date"]'); 
            ?>
        </div>
    </div>

    <div class="row mt-1">

        <!-- phần thứ 1, slider  -->
        <section class="col-md-8">
            <?=
                do_shortcode('[sp_news limit="10" grid="list" show_content="true" show_category_name="true" show_date="true" content_words_limit="30" order="DESC" orderby="date"]'); 
            ?>
        </section>

        <!-- sidebar  -->
        <section class="col-md-4">
            <?php dynamic_sidebar("Sidebar"); ?>
        </section>
    

    </div>

</div>

<?php
    // include footer
    get_footer();
?>