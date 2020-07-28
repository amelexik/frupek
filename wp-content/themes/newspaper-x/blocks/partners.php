<?php if (have_rows('partners_item')) { ?>
    <div id="newspaper_x_widget_partners" class="widget newspaper_x_widgets">
        <h3 class="widget-title">
            <span>ПАРТНЕРИ ФРУТЕК</span></h3>
        <div class="row newspaper-x-layout-b-row slick-responsive">
            <?php while (have_rows('partners_item')) {
                the_row();
                ?>
                <div>
                    <div class="newspaper-x-blog-post-layout-b partner-item">
                        <div class="">
                            <a href="<?= get_sub_field('partners_item_url'); ?>">
                                <img src="<?= get_sub_field('partners_item_image'); ?>">
                            </a>
                        </div>
                        <div class="newspaper-x-content">
                            <?= get_sub_field('partners_item_text'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>



<style>
    .partner-item{

        border-radius: 10px;
        padding: 10px;
        margin: 10px;
    }
    .slick-prev:before, .slick-next:before{
        color: #0f5fa3;
        font-size: 30px;
    }
</style>
