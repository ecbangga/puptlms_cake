<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('lname');
                    echo $this->Form->control('fname');
                    echo $this->Form->control('birthdate');
                    echo $this->Form->control('birthplace');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('add');
                    echo $this->Form->control('email');
                    echo $this->Form->control('year');
                    echo $this->Form->control('course');
                    echo $this->Form->control('pwd');
                    echo $this->Form->control('role');
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
