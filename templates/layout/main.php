<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PUPTLMS </title>
    <?= $this->Html->meta('icon') ?>

    <?=$this->Html->css(['bootstrap.min','style','login','all','home'],['block' => true]); ?>
    
    <?=$this->Html->script(['jquery-3.3.1.slim.min','jquery-3.2.1.min'],['block' => true]); ?>
    <?=$this->Html->script(['popper.min','bootstrap.min', 'myAlerts','sweetalert2@9','login'],['block' => true]); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body onload="startTime()">
    <div class="header"><center>
        <?= $this->Html->image('lmsheader1.jpg', array('height' => '100','width' => '1505','url' => array('controller' => 'home', 'action' => 'home')));?>
    </div>
    
    <main class="main">
    
            <?= $this->element('flash/nav') ?>
            <?= $this->fetch('content') ?>

    </main>
    <footer>
    </footer>
</body>
</html>