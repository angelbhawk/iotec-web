<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Application;
use App\Models\Device;
use App\Models\DeviceLog;
use App\Models\ApplicationDevice;
use App\Models\UserApplication;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Application::truncate();
        Device::truncate();
        DeviceLog::truncate();
        ApplicationDevice::truncate();
        UserApplication::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Application::factory(10)->create();
        Device::factory(10)->create();
        DeviceLog::factory(1000)->create();
        ApplicationDevice::factory(10)->create();
        UserApplication::factory(10)->create();
    }
}
