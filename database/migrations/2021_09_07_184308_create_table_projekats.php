<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProjekats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projekats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->text('o_projektu');
            $table->text('status');
        });

        $data = [
            ['naziv'=>'Moto-plast Nova Pazova','o_projektu'=>'Na industrijskim objektima u Novoj Pazovi, kompanija Energize doo je tokom 2019. godine izgradila najveću industrijsku solarnu elektranu u Srbiji, za potrebe klijenta MOTO-PLAST, vodećeg proizvođača stretch folije u Srbiji. Izgrađene su dve solarne elektrane snage 496.92 kWp i 330.55 kWp i predviđene su za sopstvenu potrošnju, a korišćena je oprema vodećih proizvođača, solarni paneli LUXOR Solar Nemačka, aluminijumske konstrukcije K2 Systems Nemačka i solarni invertori i NN opreme kompanije ABB. Očekivane uštede koje će ove elektrane donositi korisniku na godišnjem nivou su oko 1 GWh električne energije i smanjenje emisije CO2 od 1.000.000kg godišnje.','status'=>'Najveća industrijska solarna elektrana na krovu u Srbiji'],
            ['naziv'=>'Gasovod "Turski tok"','o_projektu'=>'Energize d.o.o. je u toku 2019.godine u saradnji sa kompanijom Siemens realizovao prvu fazu kapitalnog energetskog projekta izgradnje gasovoda “Turski tok”. Energize d.o.o. učestvuje u projektu napajanja na kompletnoj trasi gasovoda sa premium opremom proizvođača. Baterije su proizvedene u naprednoj TPPL tehnologiji proizvođača Enersys, UPS sistemi u industrijskoj izvedbi renomiranog proizvođača Eaton. Isporuku i instalaciju prate sertifikovane usluge našeg tima inženjera i tehničara.','status'=>'Napajanje u okviru kapitalnog projekta gasovoda kroz Srbiju'],
            ['naziv'=>'COMEX','o_projektu'=>'Kompanija COMEX doo iz Šapca, vodeća u oblasti proizvodnje ambalaže, na 30-tu godišnjicu od osnivanja kompanije, zajedno sa kompanijom ENERGIZE doo, izgradila je najveću solarnu elektranu za sopstvenu potrošnju zajedno sa sistemom za upravljanje energijom prema Industry 4.0 standardu u gradu Šapcu. Generalni direktor kompanije COMEX doo prezentuje uspešnu realizaciju projekta. Čestitamo na 30 godina uspešnog poslovanja, Vaš ENERGIZE TIM.','status'=>'Najveća industrijska solarna elektrana za sopstvenu potrošnju u Šapcu'],
            ['naziv'=>'ELIT INOX','o_projektu'=>'U toku 2020. godine, za kompaniju ELIT INOX doo iz Čačka, vodećeg proizvođača proizvoda od inoksa u Srbiji, ugradili smo kompletan sistem za zaštitu kritičnog proizvodnog procesa, proizvod naše kompanije pod oznakom ENERGIZE MPP 100kVA. Kompanija ELIT INOX doo dobila je kroz ovaj projekat potpunu zaštitu mašina, produžetak životnog veka mašina i besprekidnost kritičnog procesa proizvodnje.','status'=>'Zaštita proizvodnog procesa indujstrijske proizvodnje'],
            ['naziv'=>'IVA 28','o_projektu'=>'Kompanija IVA28 doo iz Obrenovca, vodeća u oblasti mašinogradnje i precizne obrade metala, zajedno sa kompanijom Energize doo, izgradila je jedinstveni i prvi projekat solarne elektrane za sopstvenu potrošnju sa kompletnim sistemom energetskog menadžmenta i zaštitom proizvodnog procesa prema Industry 4.0 standardima. Generalni direkor kompanije IVA28 doo prezentuje uspeh u realizaciji projekta.','status'=>'Prva industrijska solarna elektrana za sistemom upravljanja energijom i zaštitom proizvodnog procesa'],
            ['naziv'=>'Solar LED Novi Sad','o_projektu'=>'
            Početkom 2019.godine na 100 lokacija dečijih igrališta i autobuskih stajališta u Novom Sadu su postavljeni sistemi Solarnog LED napajanja sa inovativnim Energize ECO Smart LED Controller-om. Projekat ima za cilj podizanje energetske efikasnosti i bezbednosti u gradu Novom Sadu i finansiran je iz fonda EU za prekograničnu saradnju.','status'=>'Solarno LED ovetljenje na 100 lokacija u Novom Sadu'],
            ['naziv'=>'Srboauto – solarna elektrana','o_projektu'=>'Kompanija “Srboauto” je primer da u okviru svog industrijskog pogona moguće značajno podići energetsku efikasnost kroz različite vidove investiranja, a da pritom se investicija isplaćuje kroz uštede. Najpre je izvršena kompenzacija reaktivne energije u pogonu, a zatim je na industrijskom objektu ove kompanije u Ostružnici instalirana i puštena u rad solarna elektrana snage 126.5kWp za sopstvenu potrošnju koja bi trebalo godišnje da korisniku donese uštede od preko 150 MWh električne energije. Fotonaponski paneli i invertori su proizvodi renomiranih nemačkih kompanija Luxor Solar i KACO.','status'=>'Uštede i podizanje energetske efikasnosti izgradnjom solarne elektrane i kompenzacijom reaktivne energije'],
            ['naziv'=>'Srboauto – gasne instalacije','o_projektu'=>'Kompanija Energize doo završila je projekat ugradnje INFRACRVENIH grejača Mark Climate Holandija u proizvodne hale kompanije Srboauto. Ukupno 12 velikih Infra 40kW grejača ugrađeno je u 8 hala i greje prostor od 5000m2, sa uštedom energenta do 40%. U sklopu isporuke izgrađena je i glavna gasna merno regulacioni stanica kapaciteta 100m3/h koja koristi komprinovani gas i pripremljena je za buduće povezivanje na magistralni gasovod.','status'=>'Ugradnja infracrvenih gasnih grejača Mark Climate i gasne merno-regulacione stanice za potrebe grejanja u proizvodnim halama'],
            ['naziv'=>'IKEA','o_projektu'=>'U toku 2016. godine, sa završetkom puštanja u rad ABB trafo stanice u okviru robne kuće IKEA u Beogradu, sertifikovano osoblje kompanije ENERGIZE DOO zajedno sa svojim partnerima pustilo u solarnu elektranu snage 340kWp na krovu objekta IKEA Beograd. Ovim je završena finalna faza u izgradnji solarne elektrane po principu ”ključ u ruke” prema zahtevnim procedurama kompanije IKEA. Ovo je najveća solarna elektrana na komercijalnim krovovima objekata u 2016. godini, koja godišnje štedi oko 400MWh energije i 350.000kg emisije CO2.','status'=>'IKEA u Beogradu'],
            ['naziv'=>'ERS – SCADA 19','o_projektu'=>'
            U toku 2019. godine i kroz proširenje ugovora u 2020. godini sa kompanijom SIEMENS DOO, naša kompanija je uspešno realizovala ukupno 31 kompletan orman DC napajanja za potrebe napajanja SCADA sistema u trafostanicama u Republici Srpskoj. Ovaj projekat je dokaz našeg uspešnog razvoja u proizvodnji ormana specijalizovanog napajanja prema najzahtevnijim standardima.','status'=>'31 orman DC napajanja za potrebe napajanja SCADA sistema u trafostanicama u Republici Srpskoj'],
            ['naziv'=>'Jovšić Printing Centar','o_projektu'=>'Kao društveno odgovorna kompanija, Jovšić Printing Centar (JPC), odlučila se toku 2020. godine, za primenu unapređenja energetske efikasnosti u oblasti štampe i smanjenje emisije CO2 (carbon footprint), kroz implementaciju solarne fotonaponske elektrane na krovovima objekata, za sopstvene potrebe. Izvor: instore.rs','status'=>'Solarna elektrana za sopstvenu potrošnju'],
            ['naziv'=>'KKE EL-TO','o_projektu'=>'
            Novi visokoučinkoviti kombi-kogeneracijski blok KKE EL-TO Zagreb, električne snage 150MWe i toplinske snage 114MWt, bit će pouzdan oslonac sigurnog napajanja grada Zagreba električnom i toplinskom energijom. To je osobito važno u trenucima ozbiljnih poremećaja u elektroenergetskom sustavu jer svodi moguće prekide u isporuci električne i toplinske energije u gradu Zagrebu na najmanju moguću mjeru.
            HEP je u razvoju projekta vodio računa o osiguranju kontinuirane proizvodnje na lokaciji EL-TO Zagreb za potrebe kupaca toplinske energije i industrijske pare u zapadnom dijelu grada Zagreba, i nakon 1. siječnja 2018. godine od kada je Hrvatska obveznik primjene odredaba EU direktive o industrijskim emisijama. U skladu sa smjernicama o energetskoj učinkovitosti koja je sastavni dio strateških energetskih dokumenata EU i Republike Hrvatske, HEP će  izgraditi novi kogeneracijski blok, izuzetno visoke uštede primarne energije, koji će zamijeniti dio dotrajalih i zastarjelih jedinica na lokaciji EL-TO Zagreb.
            Kako se radi o toplifikacijskom objektu koji će koristiti isključivo plinsko gorivo, to znači znatno manju specifičnu količinu emisija CO2 po proizvedenom kWh energije u odnosu na postojeće stanje na lokaciji.','status'=>'Financiranje projekta osigurano je kreditom Europske banke za obnovu i razvoj i Europske investicijske banke. Ugovor o izgradnji i Ugovor o dugoročnom održavanju potpisan je s talijanskom tvrtkom FATA S.p.A.'],
            
          
                         
        ];
        DB::table('projekats')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projekats');
    }
}
