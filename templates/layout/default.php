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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css">
    <?= $this->Html->css('app.css')?>
    <?= $this->Html->css('bootstrap.min.css')?>
    <?= $this->Html->script('jquery-3.4.1.slim.min.js')?>
    <?= $this->Html->script('popper.min.js')?>
    <?= $this->Html->script('bootstrap.min.js')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <svg class="bi bi-house-fill" width="2em" height="2em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.5 12.995V16.5a.5.5 0 01-.5.5H4a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5h-4a.5.5 0 01-.5-.5V13c0-.25-.25-.5-.5-.5H9c-.25 0-.5.25-.5.495z"></path>
          <path fill-rule="evenodd" d="M15 4.5V8l-2-2V4.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"></path>
        </svg>
      <?= $this->Html->link('Início', '/', ['class' => 'navbar-brand']) ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <?= $this->Html->link('Usuários', 'users', ['class' => 'nav-link']) ?> 
          </li>
          <li class="nav-item">
            <?= $this->Html->link('Roles', 'roles', ['class' => 'nav-link']) ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link('Categorias', 'categories', ['class' => 'nav-link']) ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link('Pagamentos', 'payments', ['class' => 'nav-link']) ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link('Recebimentos', 'receivements', ['class' => 'nav-link']) ?>
          </li>
        </ul>
      </div>
    </nav>
    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <footer>
    </footer>
</body>
</html>
