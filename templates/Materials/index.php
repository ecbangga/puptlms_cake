<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Material[]|\Cake\Collection\CollectionInterface $materials
 */
?>
<div class="materials index content">
    <?= $this->Html->link(__('New Material'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Materials') ?></h3>

    <?=$this->Form->create(null,['type'=>'get']) ?>
    <?=$this->Form->control('key',['label'=>'Search','value'=>$this->request->getQuery('key')]) ?>
    <?=$this->Form->submit() ?>
    <?=$this->Form->end() ?>

    <div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('qrcode') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('accnum') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('subj') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('callno') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materials as $material): ?>
                <tr>
                    <td><?= $this->Number->format($material->id) ?></td>
                    <td><?= h($material->qrcode) ?></td>
                    <td><?= h($material->accnum) ?></td>
                    <td><?= h($material->isbn) ?></td>
                    <td><?= h($material->title) ?></td>
                    <td><?= h($material->subj) ?></td>
                    <td><?= h($material->callno) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $material->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $material->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
