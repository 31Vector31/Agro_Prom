<?php

/* @var $this yii\web\View */

$this->title = 'AgroProm';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>

    .slider {
        width: 95%;
        margin: 0px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out 1s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }


    .image{
        height: 500px;
        width: 100%;
        background-size: cover;
        color:white;

        display: flex;
        align-items: flex-end;
        padding: 50px;
    }
    .hue{
        width: 350px;
        height: 440px;

        padding: 15px;
        margin: 10px;
        margin-bottom: 20px;
        margin-top: 0px;
        position:relative;
        /*border: 1px solid grey;*/

        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        border:#d3d3d3 solid 1px;
        background: #fff;
        color: black;
        font-size: smaller;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .hell{
        position:absolute;
        width: 90%;
        bottom:0;
    }
    .hell>span {
        float: right;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

</style>





<div class="site-index" style="width: 100%;">

    <section class="regular slider">
        <div>
        <div style="background-image: url(images/indexslider1.jpg)" class="image">
            <div>
                <h1>Холдинг новых возможностей</h1>

                <span>Мы строим высокотехнологичную инновационную компанию в Украине </span>
                <br><span>с узнаваемым во всем мире брендом и безупречной репутацией, </span>
                <br><span>привлекательную для акционеров и партнеров и предоставляем </span>
                <br><span>возможность эффективной самореализации каждому своему сотруднику.</span>
            </div>
        </div>
        </div>

        <div>
            <div style="background-image: url(images/index2.jpg)" class="image">

                <div>
                    <h1>Продукция лучшего качества</h1>

                    <span>Мы производим продукцию наивысшего качества для самых прихотливых
                        <br> украинских и мировых потребителей</span>
                </div>

            </div>
        </div>

        <div>
            <div style="background-image: url(images/index4.jpg)" class="image">
                <div>
                    <h1>Инвестиции в будущее</h1>

                    <span>Наше предназначение - построить сильную Украину
                        <br>и укрепить доверие к ней в мире, раскрывая
                        <br>и приумножая потенциал украинской земли и людей
                        <br>и вдохновляя общество своим примером ведения бизнеса.</span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-image: url(images/index3.jpg)" class="image">
                <div>
                    <h1>Социально-ответственный бизнес</h1>

                    <span>Мы опираемся в своей работе на ценности безупречной деловой репутации,
                        <br>социальной ответственности, уважения к достоинству человека
                        <br>и эффективного партнерства.</span>
                </div>
            </div>
        </div>
    </section>
    <br>
        <div class="container-fluid">
            <div class="row justify-content-center" >
                <div class="xs-12 hue">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/mc/8733.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h5 style="">
                        AgroProm готовит к вводу в эксплуатацию дополнительные мощности в Голой Пристани
                    </h5>

                    <div class="text">Благодаря строительству трех дополнительных емкостей сегодня мощности филиала «Голопристанская» (Херсонская обл.) Увеличено до 97,9 тыс. Единовременного хранения сельскохозяйственной продукции.</div>
                    <br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 23</span>
                    </div>
                </div>



                <div class="xs-12 hue">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/mc/8731.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        22 августа 2020
                    </div>

                    <h5 style="">
                        AgroProm, несмотря на короновирус, запустил новый терминал
                    </h5>

                    <div class="text">Лидер аграрного рынка Украины компания AgroProm инвестировала 23 млн долл. США в строительство нового перегрузочного терминала в с. Марьянское Апостоловского района Днепропетровской области. Это уже 10-й такой ...</div>
					<br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 20</span>
                    </div>
                </div>



                <div class="xs-12 hue">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/g/6033/23266.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        2 сентября 2020
                    </div>

                    <h5 style="">
                        Первый год работы гиганта NIBULON MAX
                    </h5>

                    <div class="text">Всего за год самоходный плавучий кран проекту П-140 NIBULON MAX отгрузил на экспорт 2500000 тонн сельхозпродукции.  Марьянское Апостоловского района Днепропетровской области. Единовременного хранения сельскохозяйственной продукции.</div>
					<br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 29</span>
                    </div>
                </div>


            </div>

        </div>








    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                //dots: true,
                //infinite: true,
                //slidesToShow: 1,
                //slidesToScroll: 1
            });

        });
    </script>



</div>

<?php


$this->registerCssFile( '@web/slick/slick.css');
$this->registerCssFile( '@web/slick/slick-theme.css');

$this->registerJsFile(
    '@web/slick/slick.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);


?>

