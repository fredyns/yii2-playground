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
                        <div class="pull-left image img-circle" style="width: 25px; height: 25px; overflow: hidden">
                            <?php
                            $profile = Yii::$app->user->identity->profile;

                        if (!empty($profile->picture_id))
                        {
                            echo Html::img(
                                    ['/file', 'id' => $profile->picture_id], [
                                    'alt'   => $profile->user->username,
                                    'style' => 'max-length: 25px; max-width: 25px;',
                                    ]
                                );
                        }
                        else
                        {
                                echo Html::img(
                                    '@web/image/user-160.png', [
                                    'alt'   => "User Image",
                                    'style' => 'max-length: 25px; max-width: 25px;',
                                    ]
                                );
                        }
                        ?>
                        </div>
                        <span class="hidden-xs">
                            &nbsp; <?= Yii::$app->user->identity->username; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <div class="image img-circle" style="width: 90px; height: 90px; overflow: hidden; margin: 0 auto;">
                                <?php
                            $profile = Yii::$app->user->identity->profile;

                            if (!empty($profile->picture_id))
                            {

                                echo Html::img(
                                        ['/file', 'id' => $profile->picture_id], [
                                        'style' => 'max-length: 90px; max-width: 90px;',
                                        'alt'   => $profile->user->username,
                                        ]
                                    );
                            }
                            else
                            {
                                    echo Html::img(
                                        '@web/image/user-160.png', [
                                        'alt'   => "User Image",
                                        'style' => 'max-length: 90px; max-width: 90px;',
                                        ]
                                );
                            }
                            ?>
                            </div>
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
                                    'Profile', ['/user/profile/show', 'id' => Yii::$app->user->id], ['class' => "btn btn-default btn-flat"]
);
?>
                            </div>
                            <div class="pull-right">
                                <?=
                                Html::a(
                                    'Sign out', ['/user/security/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
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
