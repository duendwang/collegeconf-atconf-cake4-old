<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CheckInsFixture
 */
class CheckInsFixture extends TestFixture
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
                'conference_attendee_id' => 1,
                'timestamp' => 1639293014,
                'creator' => 1,
                'created' => '2021-12-12 07:10:14',
                'modifier' => 1,
                'modified' => '2021-12-12 07:10:14',
            ],
        ];
        parent::init();
    }
}
