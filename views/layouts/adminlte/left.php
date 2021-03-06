<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image img-circle" style="width: 45px; height: 45px; overflow: hidden">

                <?php
                $profile = Yii::$app->user->identity->profile;

                if (!empty($profile->picture_id))
                {
                    echo Html::img(
                        ['/file', 'id' => $profile->picture_id], [
                        'class' => '',
                        'alt'   => $profile->user->username,
                        'style' => 'max-length: 45px; max-width: 45px;',
                        ]
                    );
                }
                else
                {
                    echo Html::img('@web/image/user-160.png', ['class' => "img-circle", 'alt' => "User Image"]);
                }
                ?>
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    $name  = Yii::$app->user->identity->profile->name;
                    $label = empty($name) ? Yii::$app->user->identity->username : $name;

                    echo Html::a($label, ['/user/settings/profile']);
                    ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="<?= Url::to('/site/search') ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items'   => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    [
                        'label'  => 'My Menu',
                        'encode' => FALSE,
                        'icon'   => 'fa fa-file-text',
                        'url'    => ['#'],
                    ],
                    ['label' => 'Module', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Daerah Indonesia',
                        'icon'  => 'fa fa-map-o',
                        'url'   => '#',
                        'items' => [
                            [
                                'label' => 'Provinsi',
                                'icon'  => 'fa fa-map-marker',
                                'url'   => ['/daerah-indonesia/provinsi'],
                            ],
                            [
                                'label' => 'Kota/Kabupaten',
                                'icon'  => 'fa fa-map-marker',
                                'url'   => ['/daerah-indonesia/kota'],
                            ],
                            [
                                'label' => 'Kecamatan',
                                'icon'  => 'fa fa-map-marker',
                                'url'   => ['/daerah-indonesia/kecamatan'],
                            ],
                            [
                                'label' => 'Kelurahan',
                                'icon'  => 'fa fa-map-marker',
                                'url'   => ['/daerah-indonesia/kelurahan'],
                            ],
                            [
                                'label' => 'Kodepos',
                                'icon'  => 'fa fa-map-marker',
                                'url'   => ['/daerah-indonesia/kodepos'],
                            ],
                        ],
                    ],
                    ['label' => 'Development', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Yii2',
                        'icon'  => 'fa fa-gears',
                        'url'   => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                        ],
                    ],
                ],
            ]
        )
        ?>

    </section>

</aside>
