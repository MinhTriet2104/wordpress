<?php
    // include header
    get_header();
?>
<!-- phần nội dung trang chủ -->
<div class="container">

    <main>
        <?=
            do_shortcode('[recent_post_slider design="design-2" post_type="news" recent_post_carousel speed="2000"]');
        ?>
    </main>

    <div class="row mt-1">

        <!-- phần thứ 1, slider  -->
        <section class="col-md-8">
            <?=
                do_shortcode('[sp_news limit="10" grid="list" show_content="true" show_category_name="true" show_date="true" content_words_limit="30"]'); 
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