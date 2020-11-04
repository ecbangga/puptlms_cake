<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->stud_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->stud_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students form content">
            <?= $this->Form->create($student) ?>
            <fieldset>
                <legend><?= __('Edit Student') ?></legend>
                <?php
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('birthdate');
                    echo $this->Form->control('birthplace');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('nationality');
                    echo $this->Form->control('residential_address');
                    echo $this->Form->control('ra_zipcode');
                    echo $this->Form->control('permanent_address');
                    echo $this->Form->control('pa_zipcode');
                    echo $this->Form->control('email');
                    echo $this->Form->control('religion');
                    echo $this->Form->control('year');
                    echo $this->Form->control('course');
                    echo $this->Form->control('password');
                    echo $this->Form->control('academic_status');
                    echo $this->Form->control('batch');
                    echo $this->Form->control('guardian_name');
                    echo $this->Form->control('relationship');
                    echo $this->Form->control('guardian_contactno');
                    echo $this->Form->control('guardian_mobileno');
                    echo $this->Form->control('guardian_email');
                    echo $this->Form->control('educ_attain');
                    echo $this->Form->control('guardian_occupation');
                    echo $this->Form->control('guardian_employer_name');
                    echo $this->Form->control('guardian_employer_address');
                    echo $this->Form->control('family_monthly_income');
                    echo $this->Form->control('section');
                    echo $this->Form->control('semester');
                    echo $this->Form->control('mom_name');
                    echo $this->Form->control('dad_name');
                    echo $this->Form->control('mom_cnum');
                    echo $this->Form->control('dad_cnum');
                    echo $this->Form->control('mom_mnum');
                    echo $this->Form->control('dad_mnum');
                    echo $this->Form->control('mom_email');
                    echo $this->Form->control('dad_email');
                    echo $this->Form->control('mom_educ');
                    echo $this->Form->control('dad_educ');
                    echo $this->Form->control('mom_work');
                    echo $this->Form->control('dad_work');
                    echo $this->Form->control('mom_emp_name');
                    echo $this->Form->control('dad_emp_name');
                    echo $this->Form->control('mom_emp_add');
                    echo $this->Form->control('dad_emp_add');
                    echo $this->Form->control('mom_add');
                    echo $this->Form->control('dad_add');
                    echo $this->Form->control('elementary_school');
                    echo $this->Form->control('elementary_school_year_graduated');
                    echo $this->Form->control('highschool');
                    echo $this->Form->control('highschool_year_graduated');
                    echo $this->Form->control('highschool_address');
                    echo $this->Form->control('path');
                    echo $this->Form->control('account_status');
                    echo $this->Form->control('contact_num');
                    echo $this->Form->control('elementary_school_address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
