<?php
//--[ 前処理 ]--------------------------------------------------------------
require_once('manager/prepend.php');


//form情報アサイン
require_once('news/form.php');
$form = new newsForm();
$form->assignForm();

//nid
$nid = $con->base->getPath('nid',TRUE);//リダイレクトあり
$con->t->assign('nid',$nid);

//情報取得//////////////////
require_once('news/logic.php');
$logic = new newsLogic(TRUE);
$news = $logic->getOneNews($nid);

$page = 'input';
if ( $con->isPost ){
    if($_POST['operation'] == 'check'){
        //日時を成形
        $_POST['date'] = mktime(0, 0, 0, $_POST['date_Month'],$_POST['date_Day'],$_POST['date_Year']);
        $_POST['from'] = mktime($_POST['from_Hour'], 0, 0, $_POST['from_Month'],$_POST['from_Day'],$_POST['from_Year']);
        $_POST['to'] = mktime($_POST['to_Hour'], 0, 0, $_POST['to_Month'],$_POST['to_Day'],$_POST['to_Year']);
        
        require_once('news/check.php');
        checkNews::checkError();
        $page = checkNews::safeExit() ? 'confirm' : 'input';
    }elseif($_POST['operation'] == 'back'){
        $page = 'input';
    }elseif($_POST['operation'] == 'regist'){
        require_once('news/check.php');
        checkNews::checkError();
        $bl = checkNews::safeExit();
        if($bl && is_numeric($_POST['nid'])){
            //お知らせ登録///////////////////////////
            require_once('news/handle.php');
            $news_handle = new newsHandle();
            $news_handle->updateRow($_POST['nid']);
            
            $con->safeExitRedirect('/system/news/view/nid/'.$_POST['nid'],TRUE);
        }else{
            $con->safeExitRedirect('/system/',TRUE);
        }
    }
}else{
    //set
    $_POST['from'] = $news[0]['col_from'];
    $_POST['to'] = $news[0]['col_to'];
    $_POST['date'] = $news[0]['col_date'];
    $_POST['target'] = $news[0]['col_target'];
    $_POST['title_ja'] = $news[0]['col_title_ja'];
    $_POST['title_cn'] = $news[0]['col_title_cn'];
    $_POST['title_tw'] = $news[0]['col_title_tw'];
    $_POST['detail_ja'] = $news[0]['col_detail_ja'];
    $_POST['detail_cn'] = $news[0]['col_detail_cn'];
    $_POST['detail_tw'] = $news[0]['col_detail_tw'];
    $_POST['url_ja'] = $news[0]['col_url_ja'];
    $_POST['url_cn'] = $news[0]['col_url_cn'];
    $_POST['url_tw'] = $news[0]['col_url_tw'];
    $_POST['link'] = $news[0]['col_link'];
}

//共通処理////////////////////////

$con->append('system/news/edit/'.$page);
?>
