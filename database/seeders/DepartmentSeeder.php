<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = Department::first();
        if (empty($model)) {
            $model = new Department();
            $model->title = 'Mathematics';
            $model->short_code = 'ARC';
            $model->status = \App\Libraries\Enumerations\DepartmentStatus::$APPROVED;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();

            $model = new Department();
            $model->title = 'Business Administration';
            $model->short_code = 'HOA';
            $model->status = \App\Libraries\Enumerations\DepartmentStatus::$APPROVED;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();

            $model = new Department();
            $model->title = 'Computer Science';
            $model->short_code = 'CL';
            $model->status = \App\Libraries\Enumerations\DepartmentStatus::$APPROVED;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();

            $model = new Department();
            $model->title = 'Civil Engineering';
            $model->short_code = 'CE';
            $model->status = \App\Libraries\Enumerations\DepartmentStatus::$APPROVED;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->save();
        }
    }
}
