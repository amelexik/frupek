<?php
$id1 = 193;
$id2 = 193;
$id3 = 193;


function getPageThumb($id,$propId = 'newspaper-x-recent-post-0')
{
    $page = get_page($id, OBJECT, 'db');
    if (!$page)
        return;
    $image = get_the_post_thumbnail_url($page);
    $url = get_permalink($page);
    $title = $page->post_title;

    $html = <<<OUT
 <li class="blazy" id="{$propId}"
                        data-src="{$image}"
                        style="background-image:url($image);cursor: pointer;" onclick="window.location='{$url}'">
                        <div class="newspaper-x-post-info">
                            <h1>
                                <a href="{$url}">{$title}</a>
                            </h1>
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
                <?=getPageThumb($id1,'newspaper-x-recent-post-1'); ?>
                <?=getPageThumb($id1,'newspaper-x-recent-post-2'); ?>
            </ul>
        </div>
    </div>
</div>
