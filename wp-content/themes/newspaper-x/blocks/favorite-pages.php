<?php
$id1 = 193;
$id2 = 236;
$id3 = 189;


function getPageThumb($id,$propId = 'newspaper-x-recent-post-0')
{
    $page = get_page($id, OBJECT, 'db');
    if (!$page)
        return;
    $image = get_the_post_thumbnail_url($page);
    if(empty($image))
        $image = 'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson';
    $url = get_permalink($page);
    $title = $page->post_title;

    $html = <<<OUT
 <li class="blazy" id="{$propId}"
                        data-src="{$image}"
                        style="background-image:url($image);cursor: pointer;" onclick="window.location='{$url}'">
                        <div class="newspaper-x-post-info">
                            <h3>
                                <a href="{$url}">{$title}</a>
                            </h3>
                    </li>
OUT;
    return $html;
}


?>
<div class="newspaper-x-header-widget-area">
    <div id="newspaper_x_header_module-2" class="widget newspaper_x_widgets">
        <div class="newspaper-x-recent-posts container">
            <ul>
                <?=getPageThumb($id1); ?>
                <?=getPageThumb($id2,'newspaper-x-recent-post-1'); ?>
                <?=getPageThumb($id3,'newspaper-x-recent-post-2'); ?>
            </ul>
        </div>
    </div>
</div>
