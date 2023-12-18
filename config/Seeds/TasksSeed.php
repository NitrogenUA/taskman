<?php
use Migrations\AbstractSeed;

/**
 * Tasks seed.
 */
class TasksSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '5',
                'user_id' => '1',
                'title' => 'Christmas!',
                'description' => '',
                'date' => '2023-12-25',
                'completed' => '0',
                'created' => '2023-12-13 17:25:35',
                'modified' => '2023-12-13 17:25:35',
            ],
            [
                'id' => '6',
                'user_id' => '1',
                'title' => 'New Year!',
                'description' => '',
                'date' => '2023-12-31',
                'completed' => '0',
                'created' => '2023-12-13 17:25:35',
                'modified' => '2023-12-13 17:25:35',
            ],
            [
                'id' => '7',
                'user_id' => '1',
                'title' => 'my new task',
                'description' => 'desc',
                'date' => NULL,
                'completed' => '0',
                'created' => '2023-12-14 15:03:01',
                'modified' => '2023-12-18 07:43:44',
            ],
            [
                'id' => '9',
                'user_id' => '2',
                'title' => 'u2 event',
                'description' => '',
                'date' => '2023-12-15',
                'completed' => '1',
                'created' => '2023-12-15 11:00:10',
                'modified' => '2023-12-15 11:00:10',
            ],
            [
                'id' => '11',
                'user_id' => '1',
                'title' => 'T1',
                'description' => 'D1',
                'date' => '2023-12-18',
                'completed' => '1',
                'created' => '2023-12-18 07:18:57',
                'modified' => '2023-12-18 07:23:49',
            ],
            [
                'id' => '12',
                'user_id' => '2',
                'title' => 'New assignment',
                'description' => '',
                'date' => '2024-01-01',
                'completed' => '0',
                'created' => '2023-12-18 08:02:45',
                'modified' => '2023-12-18 08:02:45',
            ],
        ];

        $table = $this->table('tasks');
        $table->insert($data)->save();
    }
}
