<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '1',
                'login' => 'user1',
                'password' => '$2y$10$qkzQsculvr5UfE3tJIj9dO3UmJCRMbqNiWjo61jahahDswnrzqM.q',
                'created' => '2023-12-13 17:20:12',
                'modified' => '2023-12-14 15:57:50',
            ],
            [
                'id' => '2',
                'login' => 'user2',
                'password' => '$2y$10$Av7qxOy72wtOp68XJnSCyujs2NPgKYeKQkavE/crCIU0YoFDZ7RNm',
                'created' => '2023-12-14 15:41:02',
                'modified' => '2023-12-14 15:58:04',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
