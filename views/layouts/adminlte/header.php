<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?=
    Html::a('<span class="logo-mini">Yii2</span><span class="logo-lg">'.Yii::$app->name.'</span>', Yii::$app->homeUrl,
        ['class' => 'logo'])
    ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php
                        $profile = Yii::$app->user->identity->profile;

                        if (!empty($profile->picture_id))
                        {
                            echo Html::img(
                                ['/file', 'id' => $profile->picture_id],
                                [
                                'class'  => 'img-circle',
                                'height' => 25,
                                'alt'    => $profile->user->username,
                                ]
                            );
                        }
                        else
                        {
                            Html::img(
                                '@web/image/user-160.png',
                                [
                                'class'  => "img-circle",
                                'height' => 25,
                                'alt'    => "User Image",
                                ]
                            );
                        }
                        ?>
                        <span class="hidden-xs">
                            <?= Yii::$app->user->identity->username; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php
                            $profile = Yii::$app->user->identity->profile;

                            if (!empty($profile->picture_id))
                            {

                                echo Html::img(
                                    ['/file', 'id' => $profile->picture_id],
                                    [
                                    'class'  => 'img-circle',
                                    'height' => 25,
                                    'alt'    => $profile->user->username,
                                    ]
                                );
                            }
                            else
                            {
                                Html::img(
                                    '@web/image/user-160.png',
                                    [
                                    'class' => "img-circle",
                                    'alt'   => "User Image",
                                    ]
                                );
                            }
                            ?>
                            <p>
                                <?php
                                $name = Yii::$app->user->identity->profile->name;
                                echo empty($name) ? Yii::$app->user->identity->username : $name;
                                ?>
                                <small>
                                    Member since 2016
                                </small>
                            </p>
                        </li>
                        <!-- Menu Body ->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?=
                                Html::a(
                                    'Profile', ['/user/profile/show', 'id' => Yii::$app->user->id],
                                    ['class' => "btn btn-default btn-flat"]
                                );
                                ?>
                            </div>
                            <div class="pull-right">
                                <?=
                                Html::a(
                                    'Sign out', ['/user/security/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                )
                                ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less ->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
            </ul>
        </div>
    </nav>
</header>
