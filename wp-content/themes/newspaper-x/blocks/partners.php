<?php
$data = [
    [
        'image' => 'part1.jpg',
        'url'   => 'https://menr.gov.ua/',
        'text'  => 'Міністерство енергетики та захисту довкілля України основний орган у формуванні та забезпеченні реалізації державної політики в електроенергетичному, ядерно-промисловому, вугільно-промисловому, торфовидобувної та нафтогазовому комплексах.'
    ],
    [
        'image' => 'part2.jpg',
        'url'   => 'http://fru.ua/ua',
        'text'  => 'Федерація роботодавців України (ФРУ) — організація роботодавців, що представляє їхні інтереси в економічних та соціально-трудових відносинах з владою та профспілками на національному рівні.'
    ],
    [
        'image' => 'part3.jpg',
        'url'   => 'https://euracoal.eu/home/',
        'text'  => 'EURACOAL (The European Association for Coal and Lignite) — європейська асоціація вугілля та лігніту утворена у 2002 році. Завдання асоціації забезпечення надійності енергоспоживання та стабільності цін, умов для захисту довкілля.'
    ],
    [
        'image' => 'part4.jpg',
        'url'   => 'http://prupu.org/',
        'text'  => 'Профспілка працівників вугільної промисловості України об\'єднує працівників, пов\'язаних спільними інтересами за характером їх діяльності в організаціях, установах і на підприємствах вугільної промисловості, інших секторах економіки.'
    ],
    [
        'image' => 'part5.jpg',
        'url'   => 'http://npgu.org/',
        'text'  => 'Представляє та відстоює інтереси членів НПГУ в державних, господарських та інших органах усіх рівнів, включаючи право на подання позовів до суду та арбітражу.'
    ],
    [
        'image' => 'part6.jpg',
        'url'   => 'http://ukrelectroprofspilka.org.ua/',
        'text'  => 'Здійснення громадського контролю за додержанням законодавства про охорону праці, за створенням безпечних і нешкідливих умов праці працюючим членам Профспілки.'
    ],
    [
        'image' => 'part7.jpg',
        'text'   => 'Національна тристороння соціально-економічна рада була утворена за пропозицією всеукраїнських профспілок, об’єднань роботодавців та Кабінету Міністрів України як консультативно-дорадчий орган при Президентові України з представників Кабінету Міністрів України, всеукраїнських професійних спілок та їх об\'єднань.',
        'url'  => 'http://www.ntser.gov.ua/'
    ]
]
?>

<div id="newspaper_x_widget_partners" class="widget newspaper_x_widgets">
    <h3 class="widget-title">
        <span>ПАРТНЕРИ ФРУТЕК</span></h3>
    <div class="row newspaper-x-layout-b-row slick-responsive">


        <?php foreach ($data as $datum) { ?>
            <div>
                <div class="newspaper-x-blog-post-layout-b partner-item">
                    <div class="newspaper-x-image">
                        <a href="<?= $datum['url']; ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/partners/' . $datum['image']; ?>">
                        </a>
                    </div>
                    <div class="newspaper-x-content">
                        <?= $datum['text']; ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>


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
