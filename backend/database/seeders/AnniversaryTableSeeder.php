<?php

namespace Database\Seeders;

use App\Models\Anniversary;
use Illuminate\Database\Seeder;

class AnniversaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 
         * 
         *            $table->bigIncrements("id");
            $table->bigInteger("user_id")->references('id')->on('users')->comment("ユーザーID");
            $table->bigInteger("people_id")->references('id')->on('people')->comment("人物ID");
            $table->string("genre")->comment("記念日ジャンル");
            $table->date("date");
            $table->string("memo");
            $table->uuid('anniversary_hash')->unique()->comment('記念日のUUID');
            $table->timestamps();
            
         */
        $param=[
            'user_id'=>'3',
            'people_id'=>'2',
            'genre'=>'birthday',
            'date'=>"0414",
            'memo'=>"テスト",
            'anniversary_hash'=>"542c0082-cbc0-4362-ad98-12f87650cd68",
        ];
        $anniversary=new Anniversary;
        $anniversary->fill($param)->save();
    }
}