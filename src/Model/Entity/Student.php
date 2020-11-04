<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property string $stud_id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $birthplace
 * @property string $gender
 * @property string $nationality
 * @property string $residential_address
 * @property string $ra_zipcode
 * @property string $permanent_address
 * @property string $pa_zipcode
 * @property string $email
 * @property string $religion
 * @property string $year
 * @property string $course
 * @property string $password
 * @property string $academic_status
 * @property string $batch
 * @property string $guardian_name
 * @property string $relationship
 * @property string $guardian_contactno
 * @property string $guardian_mobileno
 * @property string|null $guardian_email
 * @property string $educ_attain
 * @property string $guardian_occupation
 * @property string $guardian_employer_name
 * @property string $guardian_employer_address
 * @property string $family_monthly_income
 * @property string $section
 * @property string $semester
 * @property string $mom_name
 * @property string $dad_name
 * @property string $mom_cnum
 * @property string $dad_cnum
 * @property string $mom_mnum
 * @property string $dad_mnum
 * @property string $mom_email
 * @property string $dad_email
 * @property string $mom_educ
 * @property string $dad_educ
 * @property string $mom_work
 * @property string $dad_work
 * @property string $mom_emp_name
 * @property string $dad_emp_name
 * @property string $mom_emp_add
 * @property string $dad_emp_add
 * @property string $mom_add
 * @property string $dad_add
 * @property string $elementary_school
 * @property string $elementary_school_year_graduated
 * @property string $highschool
 * @property string $highschool_year_graduated
 * @property string $highschool_address
 * @property string|null $path
 * @property string $account_status
 * @property string $contact_num
 * @property string $elementary_school_address
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'last_name' => true,
        'first_name' => true,
        'middle_name' => true,
        'birthdate' => true,
        'birthplace' => true,
        'gender' => true,
        'nationality' => true,
        'residential_address' => true,
        'ra_zipcode' => true,
        'permanent_address' => true,
        'pa_zipcode' => true,
        'email' => true,
        'religion' => true,
        'year' => true,
        'course' => true,
        'password' => true,
        'academic_status' => true,
        'batch' => true,
        'guardian_name' => true,
        'relationship' => true,
        'guardian_contactno' => true,
        'guardian_mobileno' => true,
        'guardian_email' => true,
        'educ_attain' => true,
        'guardian_occupation' => true,
        'guardian_employer_name' => true,
        'guardian_employer_address' => true,
        'family_monthly_income' => true,
        'section' => true,
        'semester' => true,
        'mom_name' => true,
        'dad_name' => true,
        'mom_cnum' => true,
        'dad_cnum' => true,
        'mom_mnum' => true,
        'dad_mnum' => true,
        'mom_email' => true,
        'dad_email' => true,
        'mom_educ' => true,
        'dad_educ' => true,
        'mom_work' => true,
        'dad_work' => true,
        'mom_emp_name' => true,
        'dad_emp_name' => true,
        'mom_emp_add' => true,
        'dad_emp_add' => true,
        'mom_add' => true,
        'dad_add' => true,
        'elementary_school' => true,
        'elementary_school_year_graduated' => true,
        'highschool' => true,
        'highschool_year_graduated' => true,
        'highschool_address' => true,
        'path' => true,
        'account_status' => true,
        'contact_num' => true,
        'elementary_school_address' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
