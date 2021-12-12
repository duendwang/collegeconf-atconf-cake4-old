<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenceDeadlinesFixture
 */
class ConferenceDeadlinesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'weeks_before' => 1,
                'weekday' => 1,
                'time' => '07:10:17',
                'creator' => 1,
                'created' => '2021-12-12 07:10:17',
                'modifier' => 1,
                'modified' => '2021-12-12 07:10:17',
            ],
        ];
        parent::init();
    }
}
