<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE HTML !">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MFS Prototype</title>
        <!-- icon not required it needs to be removed in clean up
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<c:url value="/resources/img/favicon.ico"/>">
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<c:url value="/resources/img/favicon.ico"/>">
        -->
        
        <!-- css migrated to assets\AppAsset 
        <link href="<c:url value="/resources/css/bootstrap/bootstrap.min.css"/>" rel="stylesheet" type="text/css"/>
        <link href="<c:url value="/resources/css/bootstrap/bootstrap-theme.min.css"/>" rel="stylesheet" type="text/css"/>
        <link href="<c:url value="/resources/css/styles.css"/>" rel="stylesheet" type="text/css"/>
        <link href="<c:url value="/resources/css/fonts.css"/>" rel="stylesheet" type="text/css"/> 
        -->       
    </head>
    <body class="bgs" oncontextmenu="return false;">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="margin-top-50px">
                        <div class="bordered padding-20px border-radius-5px white-panels box-shadows">
                            <div class="padding-10px margin-top-50px">
                                <!-- fixing the image Yii style
                                <img src="<c:url value="/resources/img/ussd-simulator.png"/>" style="margin-left: -10px;"/>
                                -->
                                <?= Html::image(Yii::app()->request->baseUrl.'/assets/img/ussd-simulator.png',"USSD EMULATOR",array('style'=> 'margin-left: -10px'));?>
                                <!-- i stopped here -->
                            </div>                            
                            <div class="padding-10px margin-top-20px">
                                <div class="padding-20px row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12 font-13px">MSISDN</div>
                                            <div class="col-md-12 margin-top-5px">
                                                <input type="text" class="form-control font-13px" placeholder="Enter your MSISDN" id="msisdn" maxlength="14" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="form-control btn btn-primary font-13px" onclick="loadWindow();" style="margin-top: 23px;"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Launch</button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="status red-theme font-11px font-bolds centers padding-10px"></div>
                                    </div>                                    
                                </div>
                            </div>     
                            <div class="padding-10px margin-top-20px">
                                <div class="font-11px padding-10px">
                                    <div>Version 1.0.0.0</div>
                                    <div>&COPY; Ericsson AB, 2012-2016. All Right Reserved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <script type="text/javascript" src="<c:url value="/resources/js/jquery.js"/>"></script>
        <script type="text/javascript">
                                            function loadWindow() {
                                                var msisdn = $("#msisdn").val();
                                                if (msisdn.match("^[0-9]{11,14}$")) {
                                                    var url = "ussdmenu?msisdn=" + msisdn;
                                                    window.open(url, "USSD_Window#" + msisdn, "width=700,toolbar=0,scrollbars=1,resizable=1");
                                                }else{
                                                    $(".status").html("Invalid MSISDN entered. Please try again later.");
                                                    setTimeout(function(){
                                                        $(".status").html("");
                                                    },5000);
                                                }
                                            }
                                            function rightClick() {
                                                alert('Right Click Message');
                                                alert(event.button);
                                                if (event.button === 2) {
                                                    alert('Right Click Message');
                                                }
                                            }
        </script>
    </body>
</html>
