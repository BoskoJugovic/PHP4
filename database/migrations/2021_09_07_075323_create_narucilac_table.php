<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarucilacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narucilacs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organizaciona_celina');
        });

        $data = [
            ['organizaciona_celina'=>'Čukarica'],
            ['organizaciona_celina'=>'Novi Beograd'],
            ['organizaciona_celina'=>'Palilula'],
            ['organizaciona_celina'=>'Rakovica'],
            ['organizaciona_celina'=>'Savski venac'],
            ['organizaciona_celina'=>'Stari grad'],
            ['organizaciona_celina'=>'Voždovac'],
            ['organizaciona_celina'=>'Vračar'],
            ['organizaciona_celina'=>'Zemun'],
            ['organizaciona_celina'=>'Barajevo'],
            ['organizaciona_celina'=>'Lazarevac'],
            ['organizaciona_celina'=>'Grocka'],
            ['organizaciona_celina'=>'Obrenovac'],
            ['organizaciona_celina'=>'Sopot'],
            ['organizaciona_celina'=>'Surčin'],
            ['organizaciona_celina'=>'Zvezdara']
                         
        ];
        DB::table('narucilacs')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('narucilac');
    }
}
