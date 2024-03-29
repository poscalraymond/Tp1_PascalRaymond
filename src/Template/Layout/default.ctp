<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';

?>

<!DOCTYPE html>
<html>

<head>
    <?= $this->Flash->render() ?>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?php
    echo $this->Html->css([
        'base.css',
        'style.css',
        'home.css',
        'nav.css',
        'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'

    ]);
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?php
    echo $this->Html->script([
        'https://code.jquery.com/jquery-1.12.4.js',
        'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
        //'https://code.jquery.com/jquery-3.3.1.slim.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'

    ], ['block' => 'scriptLibraries']
    );
    ?>

</head>


<body>
<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/Tp1/users">Garderie de Pascal Raymond</a>
        </div>
        <ul  class="nav navbar-nav"">
            <li class="active"><a <?php
                $loguser = $this->request->session()->read('Auth.User');
                if ($loguser) {
                    $user = $loguser['email'];
                    echo $this->Html->link($user . ' logout', ['controller' => 'Users', 'action' => 'logout']);
                } else {
                    echo $this->Html->link('login', ['controller' => 'Users', 'action' => 'login']);
                }
                ?></a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Languages
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a <?= $this->Html->link('Latin', ['action' => 'changeLang', 'en_LA'], ['escape' => false]) ?></a></li>
                    <li><a <?= $this->Html->link('Français', ['action' => 'changeLang', 'en_FR'], ['escape' => false]) ?></a></li>
                    <li><a <?= $this->Html->link('English', ['action' => 'changeLang', 'en_US'], ['escape' => false]) ?></a></li>
                </ul>
            </li>
            <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
            <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            <li><a target="_blank" href="http://localhost/Tp1/pages/Apropos">A propos</a></li>

        </ul>
    </div>
</nav>
    <!--<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li>
                    <?= $this->Html->link('Latin', ['action' => 'changeLang', 'en_LA'], ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link('Français', ['action' => 'changeLang', 'en_FR'], ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link('English', ['action' => 'changeLang', 'en_US'], ['escape' => false]) ?>
                </li>
                <li><?php
                    $loguser = $this->request->session()->read('Auth.User');
                    if ($loguser) {
                        $user = $loguser['email'];
                        echo $this->Html->link($user . ' logout', ['controller' => 'Users', 'action' => 'logout']);
                    } else {
                        echo $this->Html->link('login', ['controller' => 'Users', 'action' => 'login']);
                    }
                    ?> </li>
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                <li><a target="_blank" href="http://localhost/Tp1/pages/Apropos">A propos</a></li>
            </ul>
        </div>
    </nav>!-->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->fetch('scriptLibraries') ?>
    <?= $this->fetch('script'); ?>
    <?= $this->fetch('scriptBottom') ?>
</body>
</html>
