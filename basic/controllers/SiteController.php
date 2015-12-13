<?php

namespace app\controllers;

use app\models\Injury;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class SiteController extends Controller
{
	
    public function actionIndex()
    {
        $this->getView()->title = "鉴定标准查询系统";

        return $this->render('index');
    }

    public function actionJdxz()
    {
        $this->getView()->title = "鉴定须知";

        return $this->render('jdxz');
    }

    public function actionJdbz()
    {
        $this->getView()->title = "鉴定标准";

        return $this->render('jdbz');
    }

    public function actionLct()
    {
        $this->getView()->title = "伤情鉴定流程图";

        return $this->render('lct');
    }

    public function actionResult()
    {
        $this->getView()->title = "搜索结果";

        if(isset($_GET['word']))
        {
            $word = Yii::$app->request->get('word','');
            $data = Injury::find()->andWhere(['like', 'desc', $word])->orderBy('level');

        }
        elseif(isset($_GET['type']))
        {
            $type = Yii::$app->request->get('type','');
            if(!empty($type))
            {
                $data = Injury::find()->andWhere(['type' => $type,])->orderBy('level');
            }
            else
            {
                $data = Injury::find()->orderBy('level');
            }

        }
        else
        {
            $data = Injury::find()->orderBy('level');
        }


        //$data = Injury::findBySql($sql);

        $pages = new Pagination(['totalCount' => $data->count(), 'pageSize' => '15']);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('result',array(
            'resultModel' => $model,
            'pages' => $pages,
        ));
    }

    public function actionTsss()
    {
        $this->getView()->title = "特殊损伤证据收集注意事项";

        return $this->render('tsss');
    }

    public function actionYysy()
    {
        $this->getView()->title = "常用医用术语释义";

        return $this->render('yysy');
    }
}
