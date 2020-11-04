<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PUPTLMS </title>
    <?= $this->Html->meta('icon') ?>

    <?=$this->Html->css(['bootstrap.min','style','login','all'],['block' => true]); ?>
    
    <?=$this->Html->script(['jquery-3.3.1.slim.min','jquery-3.2.1.min'],['block' => true]); ?>
    <?=$this->Html->script(['popper.min','bootstrap.min', 'myAlerts','sweetalert2@9','login'],['block' => true]); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <main class="main">
        <div class="container">

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
                
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
