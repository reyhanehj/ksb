<?php
require_once(__DIR__ .'/../utils/Tools.php');

 class Comment
 {

     public $id;
     public $stars;
     public $pname;
     public $pemail;
     public $pmob;
     public $pjob;
     public $inDate;
     public $inTime;
     public $appIndex;
     public $appType;
     public $appVer;
     public $comm_status;
     public $comment;
     public $response;
     public $user_img;


     /**
      * Comment constructor.
      * @param $stars
      * @param $pname
      * @param $inDate
      * @param $inTime
      * @param $appIndex
      * @param $comment
      */
     public function __construct($stars, $pname, $inDate, $inTime, $appIndex, $comment)
     {
         $this->stars = $stars;
         $this->pname = $pname;
         $this->inDate = $inDate;
         $this->inTime = $inTime;
         $this->appIndex = $appIndex;
         $this->comment = $comment;
     }

     public static function getComments($pdo_conn)
     {
         $offset = rand(0,10);
         $wc = ' where comm_status = 2 and stars = 5 ';
         $query = "SELECT * from ucomments ".$wc.
             " order by id desc limit 10 offset $offset";
         $stmt = $pdo_conn->prepare($query);
         $stmt->execute();

         return $stmt->fetchAll(PDO::FETCH_OBJ);
     }

     public static function printComment($comment)
     {
         $appName = Tools::getAppType($comment->appIndex);
         $response = " ";
         if($comment->response){
             $response = '<i onclick="showComment(this);" class="fa fa-reply text-secondary me-2 view-cm" data-id="cm-'.$comment->id.'"></i>';
         }

         $html = '<div id="cm-'.$comment->id.'" data-id="'.$comment->id.'" class="testimonial-item position-relative p-4 shadow-3-soft">
                  <i class="fa fa-quote-right text-primary mx-auto d-none"></i>
                  <div class="rev-content d-flex align-items-start flex-column">
                    <div class="t-app-name">' . $appName . '</div>
                      <div class="rev-profile mt-3">
                          <i class="fa fa-quote-left fa-3x text-primary"></i>
                          <img class="flex-shrink-0 d-none" src="../img/drawables/user.png" alt="">
                          <div class="ms-3">
                              <h6 class="pname mb-1 d-block">' . $comment->pname . '</h6>
                              <small class="pjob d-block">' . $comment->pjob . '</small>
                          </div>
                      </div>
                    <small class="comment mt-2 w-100 truncate mb-4">' . $comment->comment . '</small>
                    <small class="reply d-none">' . $comment->response. '</small>
                  </div>
                  <div class="d-flex align-items-center position-absolute end-0 bottom-0 me-3 mb-3">
                    '.$response.'
                    <i onclick="showComment(this);" data-id="cm-'.$comment->id.'" class="view-cm fa fa-eye text-secondary "></i>
                  </div>
              </div>';
         echo $html;
     }

     public static function calcAppRank($pdo_conn, $appIndex)
     {
         $query = "select avg(stars) as rank from ucomments where appIndex in $appIndex";

         $stmt = $pdo_conn->prepare($query);
         $stmt->execute();
         $rank =  $stmt->fetch(PDO::FETCH_OBJ)->rank;
         return floatval($rank);
     }

     public static function getAppRanks($pdo)
     {
         $r = new stdClass();
         try{
             $r->shoppingRank = self::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.")");
             $r->restaurantRank = self::calcAppRank($pdo, "(".Constants::CODE_RESTAURANT.")");
             $r->insuranceRank = self::calcAppRank($pdo, "(".Constants::CODE_INSURANCE.")");
             $r->posRank = self::calcAppRank($pdo, "(".Constants::CODE_ANDROID_POS.")");
             $r->estateRank = self::calcAppRank($pdo, "(".Constants::CODE_REAL_ESTATE.")");
             $r->printerRank = self::calcAppRank($pdo, "(".Constants::CODE_MOBILE_ACCOUNTING.")");
             $r->dstributionRank = self::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.", ".
                 Constants::CODE_MOBILE_ACCOUNTING.",".Constants::CODE_ANDROID_POS.")");
             $r->photoRank = self::calcAppRank($pdo, "(".Constants::CODE_PHOTOGRAPHY.")");
             $r->buildingRank = self::calcAppRank($pdo, "(".Constants::CODE_SHOPPING.")");

             $r->status  = Constants::STATUS_OK;
             $r->message = "";
         }  catch (Exception $e) {
             $r->status = Constants::STATUS_ERROR;
             $r->message = $e->getMessage();
         }
         return $r;
     }

 }

?>