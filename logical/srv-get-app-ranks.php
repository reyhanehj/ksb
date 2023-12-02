<?php

    $r = new stdClass();
    require_once('../db/dbconn.php');
    require_once('../db/Comment.php');
    require_once ('../utils/Tools.php');
    require_once ('../utils/Constants.php');

    $pdo = DBConn::getDBConn();
    if ($pdo==null)
        /*Tools::dieOnDBConn($r);*/
        die("Error");

   try{

       $r->shoppingRank = Comment::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.")");
       $r->restaurantRank = Comment::calcAppRank($pdo, "(".Constants::CODE_RESTAURANT.")");
       $r->insuranceRank = Comment::calcAppRank($pdo, "(".Constants::CODE_INSURANCE.")");
       $r->posRank = Comment::calcAppRank($pdo, "(".Constants::Code.")");
       $r->estateRank = Comment::calcAppRank($pdo, "(".Constants::CODE_REAL_ESTATE.")");
       $r->printerRank = Comment::calcAppRank($pdo, "(".Constants::CODE_MOBILE_ACCOUNTING.")");
       $r->dstributionRank = Comment::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.", ".
           Constants::CODE_MOBILE_ACCOUNTING.",".Constants::CODE_ANDROID_POS.")");
       $r->photoRank = Comment::calcAppRank($pdo, "(".Constants::CODE_PHOTOGRAPHY.")");
       $r->buildingRank = Comment::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.")");

       $r->status  = Constants::STATUS_OK;
       $r->message = "";
    }  catch (Exception $e) {
        $r->status = Constants::STATUS_ERROR;
        $r->message = $e->getMessage();
    }
    $db = null;
    echo json_encode($r);
?>