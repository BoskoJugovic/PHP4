<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDobavljacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dobavljacs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firma');
            $table->string('adresa');
            $table->string('telefon');
            $table->string('email');
        });

        $data = [
            ['firma'=>'Slobodna Zona Subotica', 'adresa'=>'Batinska 94', 'telefon'=>'+381 24 548-277', 'email'=>'slobodnazonasu@gmail.com'],
            ['firma'=>'PAKOM NIŠ', 'adresa'=>'Rajićeva 12', 'telefon'=>'', 'email'=>'info@pakom.com '],
            ['firma'=>'METAL Sistemi', 'adresa'=>'Bulevar Kraljice Marije 54V-4', 'telefon'=>'+381 34 63 55 635', 'email'=>'office@metalsistemiplus.com'],
            ['firma'=>'21. Oktobar', 'adresa'=>'Dragoslava Srejovića 54', 'telefon'=>'034 334-588', 'email'=>'marketing@21oktobar.rs'],
            ['firma'=>'Yumco a.d.', 'adresa'=>'Radnička 5', 'telefon'=>'017 422 041', 'email'=>'yumco@open.telekom.rs'],
            ['firma'=>'Istocna Radna Zona', 'adresa'=>'Resavska 13-15', 'telefon'=>'+381.11.3398.510', 'email'=>'office@ras.gov.rs'],
            ['firma'=>'Industrijski park Priboj', 'adresa'=>'Jurija Gagarina 36D/1/15', 'telefon'=>'+381-11-27-55-110', 'email'=>'info@ipb.rs'],
            ['firma'=>'IMT Agromehanika a.d.', 'adresa'=>'Đorđa Simeonovića 25', 'telefon'=>'+381 30 63 455', 'email'=>'imt@agromehanika.com'],
            ['firma'=>'EI Fabrika mašinskih delova', 'adresa'=>'Bulevar Svetog Cara Konstantina 80-86', 'telefon'=>'+381 18 550 802', 'email'=>'eifabrika@fabrika.rs'],
            ['firma'=>'Prva Petoletka FUD a.d.', 'adresa'=>'Cara Dusana 101', 'telefon'=>'+381(0)37/715-959', 'email'=>'export@petoletka.com'],
            ['firma'=>'Elektromreza Srbije', 'adresa'=>'Kneza Milosa 11', 'telefon'=>'+381 113239408', 'email'=>'pr@ems.rs'],
            ['firma'=>'ELma TT', 'adresa'=>'Glavna 85', 'telefon'=>'+38124715933', 'email'=>'info@elmatt.rs'],
            ['firma'=>'Energo Remont', 'adresa'=>'Steve Todorovica 8', 'telefon'=>'+381112972125', 'email'=>'office@energoremont.rs'],
            ['firma'=>'Energize', 'adresa'=>'Bulevar Vojvode Mišića 23/5', 'telefon'=>'+3811 4055 264', 'email'=>'office@energize.rs'],
            ['firma'=>'Elcom Sistem d.o.o.', 'adresa'=>'Rajkova ulica 10', 'telefon'=>'+38111-71 31 006', 'email'=>'office@elecomsistem.com '],
            ['firma'=>'Elvod Struja', 'adresa'=>'Prvomajska 2', 'telefon'=>'+38164 644-34-66', 'email'=>'office@elvod.rs'],
            ['firma'=>'ELEKTROISTOK', 'adresa'=>'Husinskih rudara 19', 'telefon'=>'+38111 2775 199', 'email'=>'izgradnja@eii.rs'],
            ['firma'=>'ELPA d.o.o.', 'adresa'=>'Lava Tolstoja 40', 'telefon'=>'+38113 377 174', 'email'=>'office@elpa.rs'],
            ['firma'=>'ekovoxprodukt', 'adresa'=>'Karađorđeva 10/9', 'telefon'=>'+381(11) 8727-276', 'email'=>'office@ekovoxprodukt.com'],
            ['firma'=>'Energotehnika JuznaBacka', 'adresa'=>'Put Novosadskog partizanskog odreda 1.', 'telefon'=>'+381 21 48 77 222', 'email'=>'juzna.backa@entjuba.rs'],
            ['firma'=>'ENERGY PRO', 'adresa'=>' Ružin gaj 15', 'telefon'=>'+38121 63-928-77', 'email'=>'office@energypro.co.rs'],
            ['firma'=>'ENERGOBULL ', 'adresa'=>'Kej zrtava racije 8', 'telefon'=>'+38121453-030 
            ', 'email'=>'energobull@uns.ac.rs '],
            ['firma'=>'EnergoGlobal', 'adresa'=>'Fruškogorska 57', 'telefon'=>'+381 21 499315', 'email'=>'servis@energoglobal.com']
        ];
        DB::table('dobavljacs')->insert($data);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dobavljac');
    }
}
