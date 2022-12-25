<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzvodjacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izvodjacs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime');
            $table->string('prezime');
            $table->date('datum_rodjenja');
            $table->string('email');
            $table->string('radno_mesto');
        });

        $data = [
            ['ime'=>'Ivan', 'prezime'=>'Ivanović', 'datum_rodjenja'=>'1987-01-17', 'email'=>'iivanovic@gmail.com', 'radno_mesto'=>'Električar'],
            ['ime'=>'Miloš', 'prezime'=>'Milošević', 'datum_rodjenja'=>'1976-7-17', 'email'=>'mmilosevic@gmail.com', 'radno_mesto'=>'Električar'],
            ['ime'=>'David', 'prezime'=>'Đorđević', 'datum_rodjenja'=>'1972-02-04', 'email'=>'ddjordj@gmail.com', 'radno_mesto'=>'Gorioničar'],
            ['ime'=>'Petar', 'prezime'=>'Petrović', 'datum_rodjenja'=>'1976-05-03', 'email'=>'ppetrov@gmail.com', 'radno_mesto'=>'Moler'],
            ['ime'=>'Vladimir', 'prezime'=>'Vlad', 'datum_rodjenja'=>'1957-11-11', 'email'=>'vlado12@gmail.com', 'radno_mesto'=>'Parketar'],
            ['ime'=>'Vladan', 'prezime'=>'Sokolic', 'datum_rodjenja'=>'1978-12-12', 'email'=>'vlad4432@gmail.com', 'radno_mesto'=>'Vodoinstalater'],
            ['ime'=>'ALeksandar', 'prezime'=>'Šmigić', 'datum_rodjenja'=>'1980-01-03', 'email'=>'acoludi@gmail.com', 'radno_mesto'=>'Gorioničar'],
            ['ime'=>'Mladen', 'prezime'=>'Starčević', 'datum_rodjenja'=>'1966-01-01', 'email'=>'mstarcevic@gmail.com', 'radno_mesto'=>'Električar'],
            ['ime'=>'Lazar', 'prezime'=>'Lazarević', 'datum_rodjenja'=>'1977-07-09', 'email'=>'lazarl@gmail.com', 'radno_mesto'=>'Električar'],
            ['ime'=>'Milan', 'prezime'=>'Milanović', 'datum_rodjenja'=>'1989-02-02', 'email'=>'mmmilaan@gmail.com', 'radno_mesto'=>'Vodoinstalater'],
            ['ime'=>'Mladen', 'prezime'=>'Nezdić', 'datum_rodjenja'=>'1969-04-02', 'email'=>'mladennezdic@gmail.com', 'radno_mesto'=>'Moler'],
    
        ];
        DB::table('izvodjacs')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izvodjac');
    }
}
