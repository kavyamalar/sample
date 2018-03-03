<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoryFixture
 *
 */
class HistoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'history';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'email' => ['type' => 'string', 'length' => 200, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'start_place' => ['type' => 'string', 'length' => 200, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'end_place' => ['type' => 'string', 'length' => 200, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'travel_date' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'email' => 'Lorem ipsum dolor sit amet',
            'start_place' => 'Lorem ipsum dolor sit amet',
            'end_place' => 'Lorem ipsum dolor sit amet',
            'travel_date' => '2018-01-27'
        ],
    ];
}
