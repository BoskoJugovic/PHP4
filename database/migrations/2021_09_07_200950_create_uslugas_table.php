<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUslugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uslugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->text('opis');
        });

        $data = [
            ['naziv'=>'Servisiranje opreme','opis'=>'Da bi se obezbedio adekvatan rad vašeg sistema, neophodno je redovno preventivno i interventno održavanje. Redovno održavanje će vam pomoći da sprečite nepotreban zastoj i uštedite vreme i novac.'],
            ['naziv'=>'Proizvodnja sistema','opis'=>'Prema vašim potrebama proizvodimo sisteme u oblasti modularnih sistema, ispravljača, specijalizovanih solarnih primena i primenjenih PV tehnologija'],
            ['naziv'=>'Održavanje opreme','opis'=>'Da bi se obezbedio adekvatan rad vašeg sistema, neophodno je redovno preventivno i interventno održavanje. Redovno održavanje će vam pomoći da sprečite nepotreban zastoj i uštedite vreme i novac.'],
            ['naziv'=>'Razvoj i inovacije','opis'=>'Naši sertifikovani inženjeri implementiraju opremu na postojeće električne instalacije, njihov rad, kao i prilagođavanje i projektovanje novih električnih instalacija. Svi naši partneri imaju sertifikat za ugradnju i puštanje u rad.'],
            ['naziv'=>'FAT / SAT / Test kapaciteta','opis'=>'Obavljamo sve usluge za FAT / SAT i ispitivanja kapaciteta koji su jedino rešenje za validaciju ispravnog rada složenih sistema, koji su glavni faktor za održavanje kontinuiteta eksploatacije sistema.'],
            ['naziv'=>'Elektroinstalacije','opis'=>'Prema vašim potrebama radimo u oblasti električnih instalacija. Pružamo kompletne usluge električnih radova za naše područje rada sa obučenim i organizovanim timom ENERGIZE, uključujući inženjere i tehničare.'],
            ['naziv'=>'Konsultantske usluge','opis'=>'Kompanija ENERGIZE pruža veliki opseg konsultantskih usluga u oblasti energetske efikasnosti i ugovora za otkup električne energije.'],
            ['naziv'=>'Projektovanje i dizajn','opis'=>'Naš tim je sastavljen od inženjera elektrotehnike sa licencama 350 i 450 koji svakodnevno rade na projektovanju najkompleksnijih energetskih sistema.'],['naziv'=>'Transfer elektricne energije','opis'=>'Termoelektrana - toplana „Novi Beograd“ je do 2003. godine proizvodila električnu energiju. Danas, za potrebe EPS-a, koristi trafostanicu (110/35 kV), koja se nalazi u okviru toplane, vranege uslefi uslege uslane. Radom transformatorskog postrojenja, električnom energijom se napaja centar grada, deo Novog Beograda.'],
            ['naziv'=>'Topla voda','opis'=>'Termoelektrana – toplana „Novi Beograd“ je do 2003. godine proizvodila električnu energiju. Danas, za potrebe EPS-a, koristeći trafostanicu (110/35 kV), koja se nalazi u okviru toplane, vrši uslugu transfera električne energije. Radom transformatorskog postrojenja, električnom energijom se napaja centar grada, deo Novog Beograda i Čukarice.Proizvodnja i isporuka toplotne energije za zagrevanje sanitarne tople vode vrši se tokom cele godine iz 13 toplotnih izvora i preuzima iz jednog toplotnog izvora. Toplotni konzum za pripremu potrošne tople vode iznosi oko 70 MW, a sanitarnom toplom vodom snabdeva se oko 31.000 stanova u Beogradu.'],
            ['naziv'=>'Zaštita životne sredine','opis'=>'Zaštita životne sredine je jedan od prioriteta naše poslovne politike. Konstantnim sprovođenjem Programa gašenja kotlarnica i priključenja objekata na sistem daljinskog grejanja eliminišemo sve aspekte zagađenja koje, prirodno, generišu toplotni izvori: emisije u vazduh, vodu, zagađenje zemljišta i stvaranje otpada.']
                         
        ];
        DB::table('uslugas')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uslugas');
    }
}
