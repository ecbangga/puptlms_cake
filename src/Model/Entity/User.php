<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $lname
 * @property string $fname
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $birthplace
 * @property string $gender
 * @property string $add
 * @property string $email
 * @property string $year
 * @property string $course
 * @property string $pwd
 * @property string $role
 * @property string $position
 */
class User extends Entity
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
        'lname' => true,
        'fname' => true,
        'birthdate' => true,
        'birthplace' => true,
        'gender' => true,
        'add' => true,
        'email' => true,
        'year' => true,
        'course' => true,
        'pwd' => true,
        'role' => true,
        'position' => true,
    ];
}
