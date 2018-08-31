<?php

use Illuminate\Database\Seeder;

class Account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [ 
          'title'=>'Poupança', 
          'agency'=>2, 
          'account_number'=>1, 
          'balance_initial'=>3, 
          'bank_id'=>1
        ],
       
      ];

      DB::table('accounts')->insert($data);
    }
}
