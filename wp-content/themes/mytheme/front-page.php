<?php
    // include header
    get_header();
?>
<!-- phần nội dung trang chủ -->
<main id="main-content" class="container">

    <div class="row mt-1">

        <!-- phần thứ 1, slider  -->
        <section class="col-md-8">
            <?=
                do_shortcode('[sp_news design="design-2" limit="10" grid="3" show_content="true" show_category_name="true" show_date="false" content_words_limit="30"]'); 
            ?>
        </section>

        <!-- sidebar  -->
        <section class="col-md-4">
            <?php dynamic_sidebar("Sidebar"); ?>
        </section>
    

    </div>

</main>

<?php
    // include footer
    get_footer();
?>