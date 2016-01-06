<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <title><?php echo $this->title; ?></title>
    <style type="text/css">
        @media (min-width: 1024px) {
            #container1 .container {
                width: 100%;
            }
            #container2 .container{
                width: 100%;
            }
        }

        @media (min-width: 1600px) {
            #container1 .container {
                width: 70%;
            }
            #container2 .container{
                width: 70%;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".scrollspy">
<div id="container1">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/site/result">法医鉴定查询系统</a>
            </div>
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">首页</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">客户端下载 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">安卓版</li>
                            <li><img src="/images/ma.jpg" style="width: 100px;height: 100px"/></li>
                        </ul>
                    </li>
                </ul>
                <form action="/site/result" class="navbar-form" rol="search" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="word" value="" placeholder="请输入受伤部位"/>
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<?=$content?>

<footer>
    <p>
    <center> ©Copyright - 合肥市公安局法医伤情鉴定系统</center>
    </p>
</footer>


<script src="/bootstrap-3.3.5-dist/jquery-2.1.4/jquery.min.js"></script>
<script src="/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>

