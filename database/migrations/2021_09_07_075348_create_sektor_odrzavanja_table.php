<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSektorOdrzavanjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sektor_odrzavanjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objekat_sektora_odrzavanja');
            $table->string('sluzba');
        });

        $data = [
            ['objekat_sektora_odrzavanja'=>'Toplana Borča','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Batajnica','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Cerak','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Mladenovac','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Voždovac','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Banovo Brdo','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Konjarnik','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Novi Beograd','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Zemun','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Barajevo','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Lazarevac','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Grocka','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Obrenovac','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Sopot','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Medaković','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Miljakovac','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana DUnav','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Višnjička banja','sluzba'=>'Održavanje'],
            ['objekat_sektora_odrzavanja'=>'Toplana Mirijevo','sluzba'=>'Održavanje']
                         
        ];
        DB::table('sektor_odrzavanjas')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sektor_odrzavanja');
    }
}
