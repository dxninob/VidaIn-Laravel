<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Module;
use App\Models\Question;
use App\Models\Activity;
use App\Models\DoctorPatient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        function import_CSV($filename, $delimiter = ',')
        {
            if (!file_exists($filename) || !is_readable($filename))
                return false;
            $header = null;
            $data = array();
            if (($handle = fopen($filename, 'r')) !== false) {
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                    if (!$header)
                        $header = $row;
                    else
                        $data[] = array_combine($header, $row);
                }
                fclose($handle);
            }
            return $data;
        }

        $this->call([UserSeeder::class]);
        $this->call([ModuleSeeder::class]);
        $this->call([QuestionSeeder::class]);
        $this->call([ActivitySeeder::class]);
        $this->call([DoctorPatientSeeder::class]);


        $userFile = resource_path("/seeders/users" . ".csv");
        $moduleFile = resource_path("/seeders/modules" . ".csv");
        $questionFile = resource_path("/seeders/questions" . ".csv");
        $activityFile = resource_path("/seeders/activities" . ".csv");
        $doctorPatientFile = resource_path("/seeders/doctor_patient" . ".csv");

        $userRecords = import_CSV($userFile);
        $moduleRecords = import_CSV($moduleFile);
        $questionRecords = import_CSV($questionFile);
        $activityRecords = import_CSV($activityFile);
        $doctorPatientRecords = import_CSV($doctorPatientFile);


        // add each record to the posts table in DB

        foreach ($userRecords as $key => $record) {
            User::create([
                'name' => $record['name'],
                'email' => $record['email'],
                'password' => bcrypt($record['password']),
                'lastname' => $record['lastname'],
                'document' => $record['document'],
                'profession' => $record['profession'],
                'age' => $record['age'],
                'phone' => $record['phone'],
                'emergencyName' => $record['emergencyName'],
                'emergencyPhone' => $record['emergencyPhone'],
                'role' => $record['role'],

            ]);
        }

        foreach ($moduleRecords as $key => $record) {
            Module::create([
                'name' => $record['name'],
                'description' => $record['description'],
            ]);
        }

        foreach ($questionRecords as $key => $record) {
            Question::create([
                'question' => $record['question'],
                'module' => $record['module'],
            ]);
        }

        foreach ($activityRecords as $key => $record) {
            Activity::create([
                'description' => $record['description'],
            ]);
        }

        foreach ($doctorPatientRecords as $key => $record) {
            DoctorPatient::create([
                'doctor_id' => $record['doctor_id'],
                'patient_id' => $record['patient_id'],
            ]);
        }
    }
}
