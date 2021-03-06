<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="shortcut icon" href="/hstcesys/Public/Images/favicon.ico" type="image/x-icon" />
        <title>
            考试注意事项
        </title>
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js">
        </script>
        <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet"/>
        <link href="/hstcesys/Public/Css/readyexam.css" rel="stylesheet"/>
        <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js">
        </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body draggable="">
        <!--容器-->
        <div class="container" style=" ">
            <!--主要面板-->
            <div class="panel panel-primary" style=" ">
                <!--面板标题-->
                <div class=" panel-heading" style="text-align: center;">
                    <h1 class=" panel-title">
                        欢迎您来到韩山师范学院高校资助政策知识竞赛
                    </h1>
                </div>
                <!--面板主体-->
                <div class="panel-body" style="background-color: #EEEEEE;">
                    <div class="jumbotron">
                        <h3 style="color: #C12E2A; font-size: 58px;">
                            <span aria-hidden="true" class="glyphicon glyphicon-bullhorn">
                                考前注意事项
                            </span>
                        </h3>
                        <p>
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            题目一共50题，每题2分，共100分！
                        </p>
                        <p>
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            考试时长为40分钟，请注意时间！
                        </p>
                        <p>
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            诚信考试，请勿作弊！
                        </p>
                        <p>
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            每人只有一次考试机会！
                        </p>
                        <p>
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            请认真阅读以上注意事项！
                        </p>
                        <p style="color: #D43F3A;">
                            <span aria-hidden="true" class="glyphicon glyphicon-grain">
                            </span>
                            看完就可以点击下方的按钮“前往考试”进行您的考试啦!
                        </p>
                    </div>
                </div>
                <div class="panel-footer" style="background-color: #EEEEEE;text-align: right; ">
                    <a class="btn btn-primary btn-lg " href="<?php echo U("home/exam/examing?exam_id=$exam_id",'','');?>" role="button">
                        <span aria-hidden="true" class="glyphicon glyphicon-pencil">
                        </span>
                        前往考试
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>