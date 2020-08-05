<?php if (have_rows('work_dir')) { ?>
    <div id="newspaper_x_widget_direction_work" class="widget newspaper_x_widgets">
        <h3 class="widget-title"><span>Напрямки роботи</span></h3>
        <div class="row newspaper-x-layout-b-row">
            <?php while (have_rows('work_dir')) {
                the_row();
                ?>
                <div class="col-md-4 col-xs-6">
                    <div class="newspaper-x-blog-post-layout-b border item-icon">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <img src="<?= get_sub_field('work_dir_image'); ?>">
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="newspaper-x-content"><?= get_sub_field('work_dir_text'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>


<style>
    .item-icon {
        width: 100%;
    }
</style>
