<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([ 'title' => 'room arrangement', 'status' => 0,'project_id' => 1]);
        DB::table('tasks')->insert([ 'title' => 'parts list', 'status' => 0, 'project_id' => 2]);
        DB::table('tasks')->insert([ 'title' => 'stock items', 'status' => 0, 'project_id' => 3]);
    }
}
