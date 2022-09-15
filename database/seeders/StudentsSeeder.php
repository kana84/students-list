<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => '山田太郎',
                'kana' => 'ヤマダタロウ',
                'gender' => 1,
                'school_grade' => 6,
                'class' => 1,
                'created_at' => new DateTime()
            ],
            [
                'name' => '鈴木花子',
                'kana' => 'スズキハナコ',
                'gender' => 2,
                'school_grade' => 5,
                'class' => 2,
                'created_at' => new DateTime()
            ],
            [
                'name' => '佐藤一郎',
                'kana' => 'サトウイチロウ',
                'gender' => 2,
                'school_grade' => 2,
                'class' => 3,
                'created_at' => new DateTime()
            ],
            [
                'name' => '田中優子',
                'kana' => 'タナカユウコ',
                'gender' => 1,
                'school_grade' => 1,
                'class' => 3,
                'created_at' => new DateTime()
            ],
        ]);
    }
}
