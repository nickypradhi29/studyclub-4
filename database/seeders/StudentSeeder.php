<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facecades\DB;
use Illuminate\Support\Str;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Student::create([  
            "nim" => "F1E324018$i",
            "name" => "Nicky Pradhitiya Dinata$i",
            "prodi" => "Informatika$i",
            "angkatan"=> 2000+$i,
            "alamat"=> "dirumah$i"
            ]);



        Student::create([
            "nim" => "F1E324018",
            "name" => "Nicky Pradhitiya Dinata",
            "prodi" => "Informatika",
            "angkatan" => 2024,
            "alamat" =>"dirumah"
            ]);

        Student::create([
            "nim"=> Str::random(8),
            "name"=> Str::random(28),
            "prodi"=> Str::random(15),
            "angkatan"=> rand(2000, 2024),
            "alamat" => Str::random(50)
            ]);
    }
    }}