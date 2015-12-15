<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    [if lt IE 9]><script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <title>鉴定标准查询系统</title>
    <style>
        .col-sm-4 h2 {
            text-align: center;
        }

        .col-sm-4 img {
            margin-left: 40px;
        }

        .col-sm-4 p {
            text-align: center;
        }
        .list-group{
            width: 80%;
            margin-left: 10%;
        }
        .list-group-item{
            border: none;
        }
        .list-group-item a{
            color: #5639A3;
        }
        .col-sm-3 img{
            width:80%;
            height: 80%;
            margin-left: 5%;
        }


        @media (min-width: 1280px) {
            #container1 .container {
                width: 100%;
            }
            #container2 .container{
                width: 100%;
            }

            .carousel-inner > .active > img {
                width:100%;
                height: 400px;
                margin: auto;
            }

            .carousel-inner > .item > img {
                width: 100%;
                height: 400px;
                margin: auto;
            }

            .col-sm-4 h2 {
                text-align: center;
            }

            .col-sm-3 img{
                width:75%;
                height: 75%;
                margin-left: 5%;
            }

        }

        @media (min-width: 1600px) {
            #container1 .container {
                width: 70%;
            }
            #container2 .container{
                width: 70%;
            }

            .carousel-inner > .active > img {
                width: 100%;
                height: 450px;
                margin: auto;
            }

            .carousel-inner > .item > img {
                width: 100%;
                height: 450px;
                margin: auto;
            }

            .col-sm-4 h2 {
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div id="container2">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-9">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="/images/index_1.jpg" alt="First slide">

                            <div class="container">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="/images/index_2.jpg" alt="Second slide">

                            <div class="container">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="/images/index_3.jpg" alt="Third slide">

                            <div class="container">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br/>
                <br/>
                <br/>

                <div class="row">
                    <div class="col-sm-4 col-lg-4">
                        <!--<img class="img-circle" src="ys1.jpg" alt="" width="100" height="100">-->

                        <h2>严格鉴定</h2>

                        <p>
                            法医学鉴定应当由司法机关委托而不应受理私人委托,保证鉴定人在司法机关委托下，在法律规定的范围内进行工作，确保鉴定结论的法律性、严肃性。</p>

                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <!--<img class="img-circle" src="ys2.jpg" alt="" width="100" height="100">-->

                        <h2>科学鉴定</h2>

                        <p>鉴定人接到司法机关的委托后，对被鉴定人的损伤特征和部位要详细描述、记录，必要时并照相固定。其次，要收集可靠的案情、病历及辅助检查材料。</p>

                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <!--<img class="img-circle" src="ys3.jpg" alt="" width="100" height="100">-->

                        <h2>实事求是</h2>

                        <p>
                            对掌握的所有材料用科学的方法及医学理论进行分析论证，对照人体伤害、伤残标准，实事求是地作出鉴定结论，始终站在法律、科学、公正的立场上</p>

                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <img src="/images/police3.gif"/>
                <ul class="list-group">
                    <li class="list-group-item"><a href="/site/jdxz">鉴定须知</a></li>
                    <li class="list-group-item"><a href="/site/lct">伤情鉴定流程图</a></li>
                    <li class="list-group-item"><a href="/site/yysy">常用医用术语释义</a></li>
                    <li class="list-group-item"><a href="/site/jdbz">人体损伤程度鉴定标准</a></li>
                    <li class="list-group-item"><a href="/site/tsss">特殊损伤证据收集注意事项</a></li>
                </ul>
                <!--<img src="police.jpg" style="width: 270px; height: 500px;">-->
            </div>
        </div>
    </div>
</div>
</body>
</html>

