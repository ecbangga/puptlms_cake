<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string $qrcode
 * @property string $accnum
 * @property string $isbn
 * @property \Cake\I18n\FrozenDate $datereceived
 * @property string $title
 * @property string $subj
 * @property string $callno
 * @property string $issueno
 * @property string $author
 * @property string $publisher
 * @property string $amount
 * @property string $edition
 * @property string $volume
 * @property string $pages
 * @property string $source
 * @property string $copyright
 * @property string $month
 * @property string $year
 * @property string $date
 * @property string $copies
 * @property string $boxno
 * @property string $thesisaccnum
 * @property string $articles
 * @property string $frequency
 * @property string $region
 * @property string $organizers
 * @property string $place
 * @property string $categoryid
 * @property string $duration
 * @property string $Remarks
 * @property string $status
 * @property string $location
 * @property string $ebook_path
 */
class Material extends Entity
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
        'qrcode' => true,
        'accnum' => true,
        'isbn' => true,
        'datereceived' => true,
        'title' => true,
        'subj' => true,
        'callno' => true,
        'issueno' => true,
        'author' => true,
        'publisher' => true,
        'amount' => true,
        'edition' => true,
        'volume' => true,
        'pages' => true,
        'source' => true,
        'copyright' => true,
        'month' => true,
        'year' => true,
        'date' => true,
        'copies' => true,
        'boxno' => true,
        'thesisaccnum' => true,
        'articles' => true,
        'frequency' => true,
        'region' => true,
        'organizers' => true,
        'place' => true,
        'categoryid' => true,
        'duration' => true,
        'Remarks' => true,
        'status' => true,
        'location' => true,
        'ebook_path' => true,
    ];
}
