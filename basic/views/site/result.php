<?php
use yii\widgets\LinkPager;

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>搜索结果</title>
    <link rel="stylesheet" href="/css/ystep.css">
    <style>
        .container-fluid{
            position: relative;
        }

        .media-list{
            position: absolute;
            top: 50px;
            right:110px;
            border-right: 1px solid #cccccc;
            border-left: 1px solid #cccccc;
            border-top: 1px solid #cccccc;
        }
        .media{
            border-bottom: 1px solid #cccccc;
            padding: 0 20px 5px 0;
        }

        .media-object:hover{
            width: 60px;
            height: 60px;
        }

        .page-header {
            margin: 0px 0px 20px;
        }

        .sub-header {
            padding-top: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .placeholders {
            margin-bottom: 30px;
            text-align: center;
        }

        .placeholders h4 {
            margin-bottom: 0;
        }

        .placeholder {
            margin-bottom: 20px;
        }

        .placeholder img {
            display: inline-block;
            border-radius: 50%;
        }

        .progress {
            width: 720px;
            margin-left: 8px;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row-fluid">
            <div class="col-sm-3">
                <ul class="media-list">
    <?php foreach ($typeList as $typeKey => $typeTitle): ?>
                    <li class="media">
                        <a class="pull-left" href="/site/result?type=<?php echo $typeKey ?>">
                            <img class="media-object" src="/images/<?php echo $typeKey ?>.png" alt="" width="50" height="50">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"><?php  echo $typeTitle; ?></h5>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-9">
                <h2 class="page-header">
                    法医鉴定流程
                </h2>
                <div class="ystep2"></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" style="width:28%">2~3天</div>
                    <div class="progress-bar progress-bar-info progress-bar-striped" style="width:42%">3~4天</div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped" style="width:30%">1~2天</div>
                </div>
                <h2 class="sub-header">
                    <?php if (isset($type)): ?>
                        <?php echo isset(Yii::$app->params['injuryType'][$type]) ? Yii::$app->params['injuryType'][$type] : '搜索结果';
                        ?>
                    <?php else: ?>
                        搜索结果
                    <?php endif; ?>
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>伤情</th>
                            <th>伤情等级</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($resultModel as $result): ?>
                            <tr>
                                <td><?php echo $result->id; ?></td>
                                <td><?php echo $result->desc; ?></td>
                                <td><?php echo isset(Yii::$app->params['injuryLevel'][$result->level]) ?
                                        Yii::$app->params['injuryLevel'][$result->level] : ''; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/bootstrap-3.3.5-dist/jquery-2.1.4/jquery.min.js"></script>
<script src="/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="/js/ystep.js"></script>
<script>
    $(".ystep2").loadStep({
        size: "large",
        color: "green",
        steps: [{
            title: "准备",
            content: "医院的诊断证明，住院病历，手术纪录，各项检查资料。公检法司或律师个人的委托信，鉴定客体。"
        }, {
            title: "登记",
            content: "鉴定登记，指定鉴定人。"
        }, {
            title: "核实",
            content: "核实医疗机构材料，鉴定客体检查。"
        }, {
            title: "定性",
            content: "鉴定科室主任（2人以上）审阅鉴定材料，定性。"
        }, {
            title: "批阅",
            content: "鉴定人（文书）书写鉴定底稿，审核人（2人以上）批阅。"
        }, {
            title: "校对",
            content: "鉴定打印，文书校对，出具鉴定正文。"
        }, {
            title: "签字",
            content: "鉴定中心整理材料，鉴定审核人及文书签字。"
        }, {
            title: "领取鉴定",
            content: "被鉴定人（鉴定客体）凭鉴定鉴定文书开具的取鉴定书凭证取鉴定。"
        }]
    });
    $(".ystep2").setStep(8);
</script>
</body>
</html>
