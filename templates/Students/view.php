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
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->stud_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->stud_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->stud_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->stud_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Stud Id') ?></th>
                    <td><?= h($student->stud_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($student->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($student->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Middle Name') ?></th>
                    <td><?= h($student->middle_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthplace') ?></th>
                    <td><?= h($student->birthplace) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($student->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($student->nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residential Address') ?></th>
                    <td><?= h($student->residential_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ra Zipcode') ?></th>
                    <td><?= h($student->ra_zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Permanent Address') ?></th>
                    <td><?= h($student->permanent_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pa Zipcode') ?></th>
                    <td><?= h($student->pa_zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($student->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Religion') ?></th>
                    <td><?= h($student->religion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($student->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= h($student->course) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($student->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Academic Status') ?></th>
                    <td><?= h($student->academic_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch') ?></th>
                    <td><?= h($student->batch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Name') ?></th>
                    <td><?= h($student->guardian_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relationship') ?></th>
                    <td><?= h($student->relationship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Contactno') ?></th>
                    <td><?= h($student->guardian_contactno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Mobileno') ?></th>
                    <td><?= h($student->guardian_mobileno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Email') ?></th>
                    <td><?= h($student->guardian_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Educ Attain') ?></th>
                    <td><?= h($student->educ_attain) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Occupation') ?></th>
                    <td><?= h($student->guardian_occupation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Employer Name') ?></th>
                    <td><?= h($student->guardian_employer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Employer Address') ?></th>
                    <td><?= h($student->guardian_employer_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Monthly Income') ?></th>
                    <td><?= h($student->family_monthly_income) ?></td>
                </tr>
                <tr>
                    <th><?= __('Section') ?></th>
                    <td><?= h($student->section) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester') ?></th>
                    <td><?= h($student->semester) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Name') ?></th>
                    <td><?= h($student->mom_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Name') ?></th>
                    <td><?= h($student->dad_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Cnum') ?></th>
                    <td><?= h($student->mom_cnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Cnum') ?></th>
                    <td><?= h($student->dad_cnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Mnum') ?></th>
                    <td><?= h($student->mom_mnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Mnum') ?></th>
                    <td><?= h($student->dad_mnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Email') ?></th>
                    <td><?= h($student->mom_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Email') ?></th>
                    <td><?= h($student->dad_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Educ') ?></th>
                    <td><?= h($student->mom_educ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Educ') ?></th>
                    <td><?= h($student->dad_educ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Work') ?></th>
                    <td><?= h($student->mom_work) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Work') ?></th>
                    <td><?= h($student->dad_work) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Emp Name') ?></th>
                    <td><?= h($student->mom_emp_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Emp Name') ?></th>
                    <td><?= h($student->dad_emp_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Emp Add') ?></th>
                    <td><?= h($student->mom_emp_add) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Emp Add') ?></th>
                    <td><?= h($student->dad_emp_add) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Add') ?></th>
                    <td><?= h($student->mom_add) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Add') ?></th>
                    <td><?= h($student->dad_add) ?></td>
                </tr>
                <tr>
                    <th><?= __('Elementary School') ?></th>
                    <td><?= h($student->elementary_school) ?></td>
                </tr>
                <tr>
                    <th><?= __('Elementary School Year Graduated') ?></th>
                    <td><?= h($student->elementary_school_year_graduated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Highschool') ?></th>
                    <td><?= h($student->highschool) ?></td>
                </tr>
                <tr>
                    <th><?= __('Highschool Year Graduated') ?></th>
                    <td><?= h($student->highschool_year_graduated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Highschool Address') ?></th>
                    <td><?= h($student->highschool_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($student->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Account Status') ?></th>
                    <td><?= h($student->account_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Num') ?></th>
                    <td><?= h($student->contact_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Elementary School Address') ?></th>
                    <td><?= h($student->elementary_school_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthdate') ?></th>
                    <td><?= h($student->birthdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
