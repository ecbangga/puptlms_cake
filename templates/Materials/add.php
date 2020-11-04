<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material $material
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Materials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materials form content">
            <?= $this->Form->create($material) ?>
            <fieldset>
                <legend><?= __('Add Material') ?></legend>
                <?php
                    echo $this->Form->control('qrcode');
                    echo $this->Form->control('accnum');
                    echo $this->Form->control('isbn');
                    echo $this->Form->control('datereceived');
                    echo $this->Form->control('title');
                    echo $this->Form->control('subj');
                    echo $this->Form->control('callno');
                    echo $this->Form->control('issueno');
                    echo $this->Form->control('author');
                    echo $this->Form->control('publisher');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('edition');
                    echo $this->Form->control('volume');
                    echo $this->Form->control('pages');
                    echo $this->Form->control('source');
                    echo $this->Form->control('copyright');
                    echo $this->Form->control('month');
                    echo $this->Form->control('year');
                    echo $this->Form->control('date');
                    echo $this->Form->control('copies');
                    echo $this->Form->control('boxno');
                    echo $this->Form->control('thesisaccnum');
                    echo $this->Form->control('articles');
                    echo $this->Form->control('frequency');
                    echo $this->Form->control('region');
                    echo $this->Form->control('organizers');
                    echo $this->Form->control('place');
                    echo $this->Form->control('categoryid');
                    echo $this->Form->control('duration');
                    echo $this->Form->control('Remarks');
                    echo $this->Form->control('status');
                    echo $this->Form->control('location');
                    echo $this->Form->control('ebook_path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
