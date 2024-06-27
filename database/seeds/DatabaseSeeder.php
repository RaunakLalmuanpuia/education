<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserSeed::class);
        $this->call(SchoolMetaSeed::class);
        $this->call(TeacherMetaSeed::class);
        $this->call(LocationsSeed::class);

        Model::reguard();
    }
}
