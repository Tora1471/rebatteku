<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Student_Subject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->foreignId('student_id')->constrained('students');   //参照先のテーブル名を
            $table->foreignId('subject_id')->constrained('subjects');    //constrainedに記載
            $table->primary(['student_id', 'subject_id']);  
    
        });
    }
}
