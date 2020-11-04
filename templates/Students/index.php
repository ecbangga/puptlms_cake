<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="students index content">
    <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Students') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('stud_id') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('middle_name') ?></th>
                    <th><?= $this->Paginator->sort('birthdate') ?></th>
                    <th><?= $this->Paginator->sort('birthplace') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('nationality') ?></th>
                    <th><?= $this->Paginator->sort('residential_address') ?></th>
                    <th><?= $this->Paginator->sort('ra_zipcode') ?></th>
                    <th><?= $this->Paginator->sort('permanent_address') ?></th>
                    <th><?= $this->Paginator->sort('pa_zipcode') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('religion') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('course') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('academic_status') ?></th>
                    <th><?= $this->Paginator->sort('batch') ?></th>
                    <th><?= $this->Paginator->sort('guardian_name') ?></th>
                    <th><?= $this->Paginator->sort('relationship') ?></th>
                    <th><?= $this->Paginator->sort('guardian_contactno') ?></th>
                    <th><?= $this->Paginator->sort('guardian_mobileno') ?></th>
                    <th><?= $this->Paginator->sort('guardian_email') ?></th>
                    <th><?= $this->Paginator->sort('educ_attain') ?></th>
                    <th><?= $this->Paginator->sort('guardian_occupation') ?></th>
                    <th><?= $this->Paginator->sort('guardian_employer_name') ?></th>
                    <th><?= $this->Paginator->sort('guardian_employer_address') ?></th>
                    <th><?= $this->Paginator->sort('family_monthly_income') ?></th>
                    <th><?= $this->Paginator->sort('section') ?></th>
                    <th><?= $this->Paginator->sort('semester') ?></th>
                    <th><?= $this->Paginator->sort('mom_name') ?></th>
                    <th><?= $this->Paginator->sort('dad_name') ?></th>
                    <th><?= $this->Paginator->sort('mom_cnum') ?></th>
                    <th><?= $this->Paginator->sort('dad_cnum') ?></th>
                    <th><?= $this->Paginator->sort('mom_mnum') ?></th>
                    <th><?= $this->Paginator->sort('dad_mnum') ?></th>
                    <th><?= $this->Paginator->sort('mom_email') ?></th>
                    <th><?= $this->Paginator->sort('dad_email') ?></th>
                    <th><?= $this->Paginator->sort('mom_educ') ?></th>
                    <th><?= $this->Paginator->sort('dad_educ') ?></th>
                    <th><?= $this->Paginator->sort('mom_work') ?></th>
                    <th><?= $this->Paginator->sort('dad_work') ?></th>
                    <th><?= $this->Paginator->sort('mom_emp_name') ?></th>
                    <th><?= $this->Paginator->sort('dad_emp_name') ?></th>
                    <th><?= $this->Paginator->sort('mom_emp_add') ?></th>
                    <th><?= $this->Paginator->sort('dad_emp_add') ?></th>
                    <th><?= $this->Paginator->sort('mom_add') ?></th>
                    <th><?= $this->Paginator->sort('dad_add') ?></th>
                    <th><?= $this->Paginator->sort('elementary_school') ?></th>
                    <th><?= $this->Paginator->sort('elementary_school_year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('highschool') ?></th>
                    <th><?= $this->Paginator->sort('highschool_year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('highschool_address') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('account_status') ?></th>
                    <th><?= $this->Paginator->sort('contact_num') ?></th>
                    <th><?= $this->Paginator->sort('elementary_school_address') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= h($student->stud_id) ?></td>
                    <td><?= h($student->last_name) ?></td>
                    <td><?= h($student->first_name) ?></td>
                    <td><?= h($student->middle_name) ?></td>
                    <td><?= h($student->birthdate) ?></td>
                    <td><?= h($student->birthplace) ?></td>
                    <td><?= h($student->gender) ?></td>
                    <td><?= h($student->nationality) ?></td>
                    <td><?= h($student->residential_address) ?></td>
                    <td><?= h($student->ra_zipcode) ?></td>
                    <td><?= h($student->permanent_address) ?></td>
                    <td><?= h($student->pa_zipcode) ?></td>
                    <td><?= h($student->email) ?></td>
                    <td><?= h($student->religion) ?></td>
                    <td><?= h($student->year) ?></td>
                    <td><?= h($student->course) ?></td>
                    <td><?= h($student->password) ?></td>
                    <td><?= h($student->academic_status) ?></td>
                    <td><?= h($student->batch) ?></td>
                    <td><?= h($student->guardian_name) ?></td>
                    <td><?= h($student->relationship) ?></td>
                    <td><?= h($student->guardian_contactno) ?></td>
                    <td><?= h($student->guardian_mobileno) ?></td>
                    <td><?= h($student->guardian_email) ?></td>
                    <td><?= h($student->educ_attain) ?></td>
                    <td><?= h($student->guardian_occupation) ?></td>
                    <td><?= h($student->guardian_employer_name) ?></td>
                    <td><?= h($student->guardian_employer_address) ?></td>
                    <td><?= h($student->family_monthly_income) ?></td>
                    <td><?= h($student->section) ?></td>
                    <td><?= h($student->semester) ?></td>
                    <td><?= h($student->mom_name) ?></td>
                    <td><?= h($student->dad_name) ?></td>
                    <td><?= h($student->mom_cnum) ?></td>
                    <td><?= h($student->dad_cnum) ?></td>
                    <td><?= h($student->mom_mnum) ?></td>
                    <td><?= h($student->dad_mnum) ?></td>
                    <td><?= h($student->mom_email) ?></td>
                    <td><?= h($student->dad_email) ?></td>
                    <td><?= h($student->mom_educ) ?></td>
                    <td><?= h($student->dad_educ) ?></td>
                    <td><?= h($student->mom_work) ?></td>
                    <td><?= h($student->dad_work) ?></td>
                    <td><?= h($student->mom_emp_name) ?></td>
                    <td><?= h($student->dad_emp_name) ?></td>
                    <td><?= h($student->mom_emp_add) ?></td>
                    <td><?= h($student->dad_emp_add) ?></td>
                    <td><?= h($student->mom_add) ?></td>
                    <td><?= h($student->dad_add) ?></td>
                    <td><?= h($student->elementary_school) ?></td>
                    <td><?= h($student->elementary_school_year_graduated) ?></td>
                    <td><?= h($student->highschool) ?></td>
                    <td><?= h($student->highschool_year_graduated) ?></td>
                    <td><?= h($student->highschool_address) ?></td>
                    <td><?= h($student->path) ?></td>
                    <td><?= h($student->account_status) ?></td>
                    <td><?= h($student->contact_num) ?></td>
                    <td><?= h($student->elementary_school_address) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->stud_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->stud_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->stud_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->stud_id)]) ?>
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
