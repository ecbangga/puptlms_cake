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
            <?= $this->Html->link(__('Edit Material'), ['action' => 'edit', $material->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Material'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Materials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Material'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materials view content">
            <h3><?= h($material->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Qrcode') ?></th>
                    <td><?= h($material->qrcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accnum') ?></th>
                    <td><?= h($material->accnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Isbn') ?></th>
                    <td><?= h($material->isbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($material->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subj') ?></th>
                    <td><?= h($material->subj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Callno') ?></th>
                    <td><?= h($material->callno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Issueno') ?></th>
                    <td><?= h($material->issueno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Volume') ?></th>
                    <td><?= h($material->volume) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($material->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($material->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thesisaccnum') ?></th>
                    <td><?= h($material->thesisaccnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency') ?></th>
                    <td><?= h($material->frequency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= h($material->region) ?></td>
                </tr>
                <tr>
                    <th><?= __('Organizers') ?></th>
                    <td><?= h($material->organizers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoryid') ?></th>
                    <td><?= h($material->categoryid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duration') ?></th>
                    <td><?= h($material->duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($material->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($material->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datereceived') ?></th>
                    <td><?= h($material->datereceived) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Author') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->author)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Publisher') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->publisher)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Amount') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->amount)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Edition') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->edition)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Pages') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->pages)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Source') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->source)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Copyright') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->copyright)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Month') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->month)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Copies') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->copies)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Boxno') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->boxno)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Articles') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->articles)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Place') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->place)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->Remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Status') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->status)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ebook Path') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($material->ebook_path)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
