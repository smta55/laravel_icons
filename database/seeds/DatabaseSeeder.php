<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       factory(App\Clientsource::class,10)->create();
       factory(App\Proposaltype::class,10)->create();
       factory(App\Technicalapproval::class,10)->create();

       
       
}
}
