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
use App\Models\UserModule;
use App\Models\ActivityModule;

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
        $this->call([ActivityModuleSeeder::class]);
        $this->call([UserModuleSeeder::class]);

        $userFile = resource_path("/seeders/users" . ".csv");
        $moduleFile = resource_path("/seeders/modules" . ".csv");
        $questionFile = resource_path("/seeders/questions" . ".csv");
        $activityFile = resource_path("/seeders/activities" . ".csv");
        $doctorPatientFile = resource_path("/seeders/doctor_patient" . ".csv");
        $userModuleFile = resource_path("/seeders/user_module" . ".csv");
        // $activityModuleFile = resource_path("/seeders/activity_module" . ".csv");

        $userRecords = import_CSV($userFile);
        $moduleRecords = import_CSV($moduleFile);
        $questionRecords = import_CSV($questionFile);
        $activityRecords = import_CSV($activityFile);
        $doctorPatientRecords = import_CSV($doctorPatientFile);
        $userModuleRecords = import_CSV($userModuleFile);
        // $activityModuleRecords = import_CSV($activityModuleFile);


        // add each record to the posts table in DB

        foreach ($userRecords as $key => $record) {
            User::create([
                'name' => $record['name'],
                'lastname' => $record['lastname'],
                'email' => $record['email'],
                'document' => $record['document'],
                'phone' => $record['phone'],
                'nameCuidador'  => $record['nameCuidador'],
                'documentCuidador' => $record['documentCuidador'],
                'namePatient' => $record['namePatient'],
                'documentPatient' => $record['documentPatient'],
                'entity' => $record['entity'],
                'profession' => $record['profession'],
                'role' => $record['role'],
                'password' => bcrypt($record['password']),
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

        foreach ($userModuleRecords as $key => $record) {
            UserModule::create([
                'score' => $record['score'],
                'user_id' => $record['user_id'],
                'module_id' => $record['module_id'],
            ]);
        }
        // foreach ($activityModuleRecords as $key => $record) {
        //     ActivityModule::create([
        //         'activity_id' => $record['activity_id'],
        //         'module_id' => $record['module_id'],
        //     ]);
        // }
    }
}
