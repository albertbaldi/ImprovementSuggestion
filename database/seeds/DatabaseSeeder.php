<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

        // $this->call(UserTableSeeder::class);
        
        factory(App\User::class)->create([
            'name' => 'Albert',
            'email' => 'albertbaldi@gmail.com',
            'password' => \Hash::make('123456'),
            'rule' => 'admin',
            'remember_token' => str_random(10),
            ]);

        factory(App\User::class, 3)->create();

        $customerSizes = ['< 250 alunos','>= 250 alunos','>= 1000 alunos','>= 5000 alunos','> 15000 alunos'];
        foreach ($customerSizes as $key => $value) {
            factory(App\CustomerSize::class)->create(['description' => $value]);
        }

        $importances = ['N/D','Alta','Média','Baixa'];
        foreach ($importances as $key => $value) {
            factory(App\Importance::class)->create(['description' => $value]);
            factory(App\Difficulty::class)->create(['description' => $value]);
        }

        factory(App\Improvement::class, 13)->create();

        Model::reguard();
    }
}
