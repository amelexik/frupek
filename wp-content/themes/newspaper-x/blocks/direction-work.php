<?php
$data = [
	[
		'image' => '001-agreement.svg',
		'text'  => 'Співпраця з державними колами'
	],
	[
		'image' => '002-shield.svg',
		'text'  => 'Участь у законодавчих ініціативах'
	],
	[
		'image' => '003-presentation.svg',
		'text'  => 'Лобіювання інтересів роботодавців ПЕК України'
	],
	[
		'image' => '004-share.svg',
		'text'  => 'Контроль виконання Генеральної та Галузевих угод між органами державної влади, роботодавцями та профспілками'
	],
	[
		'image' => '005-target.svg',
		'text'  => 'Участь, представництво та захист інтересів членів в національній тристоронній соціально – економічній Раді при Президенті України та інших державних структурах'
	],
	[
		'image' => '006-shout.svg',
		'text'  => 'Проведення галузевих заходів'
	],
]
?>

<div id="newspaper_x_widget_direction_work" class="widget newspaper_x_widgets">
    <h3 class="widget-title"><span>Напрямки роботи</span></h3>
    <div class="row newspaper-x-layout-b-row">
	    <?php foreach ($data as $datum) { ?>
		    <div class="col-md-4 col-xs-6">
			    <div class="newspaper-x-blog-post-layout-b border item-icon">
				    <div class="row">
					    <div class="col-sm-5 col-xs-12">
						    <div class="newspaper-x-image" style="max-height: 100% !important;">
							    <img  src="<?= get_template_directory_uri() . '/assets/images/icons/' . $datum['image']; ?>">
						    </div>
					    </div>
					    <div class="col-sm-7 col-xs-12">
						    <div class="newspaper-x-content"><?= $datum['text']; ?></div>
					    </div>
				    </div>
			    </div>
		    </div>
	    <?php } ?>
    </div>
</div>