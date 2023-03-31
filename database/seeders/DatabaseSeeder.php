<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;
use App\Models\MultiImage;
use App\Models\Instruments;
use App\Models\Teachers;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',

    // ]);

    $courses = [
      [
        'courses_name' => 'Curs de chitară',
        'courses_description' => 'Lecțiile de chitară sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 6 ani, dar și adulților.
                La lecțiile de chitară veți învață despre:
                •	notele muzicale
                •	noțiuni despre ritm
                •	acorduri
                •	reproducerea de sunete sau fragmente muzicale
                •	improvizație
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Chitara este un instrument muzical popular printre tineri. Ca și în cazul oricărui instrument, măiestria ajută la creșterea încrederii, dar crește și concentrarea și îmbunătățește memoria.
                
                Acest lucru face ca chitara să fie un instrument excelent pentru dezvoltarea copiilor, dar și un instrument pentru a-și menține mintea ascuțită pe măsură ce îmbătrânesc! Sunt disponibile cursuri de chitară clasică, precum și cursuri de chitară electrică! Dacă știți deja să cântați la acest instrument, instructorul dumneavoastră vă va analiza nivelul și vă va îndruma să dezvoltați în continuare acest instrument.
                
                Pentru a vă grăbi progresul, este recomandat să aveți o chitară acasă pentru a consolida ceea ce ați învățat la școală. Dacă aveți nevoie de ajutor pentru a alege instrumentul potrivit, nu ezitați să ne contactați.
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644397817829.jpg',
        'courses_price' => 500,
      ],
      [
        'courses_name' => 'Curs de pian',
        'courses_description' => 'Lecțiile de pian sunt individuale, durează 50 de minute și se adresează copiilor cu vârsta minima de 5 ani, dar și adulților. 
                În cadrul cursurilor de pian veți învăța despre: 
                ● poziția corectă a degetelor pe clape 
                ● coordonarea mâinilor
                ● notele muzicale
                ● noțiuni despre ritm 
                ● reproducerea de sunete sau fragmente muzicale
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                
                Pianul este un instrument minunat, care cuprinde o paleta largă de culori muzicale, oferindu-ți o pregătire muzicală amplă și multilaterală. Cântatul la pian poate îmbunătăți abilitățile cognitive, precum gândirea creativă, memoria și concentrarea. De asemenea e benefic pentru un bun control al emoțiilor distructive, iar EQ (inteligență emoțională) mai solidă, ceea ce determină o mai bună inserție socială.
                Vei primi de la noi toate materialele de care ai nevoie pentru a urmă lecțiile noastre de pian.
                Va invităm la o lecție introductivă în cadrul căreia ne vom cunoaște, vom face o evaluare a potențialului muzical, vei învață claviatura pianului și bineînțeles o mică piesă!
                
                
                Dacă deja deții abilități de cântat la pian, profesorul tău va evalua nivelul tău și te va ghida în aprofundarea mai departe a acestei competențe. În cazul în care dorești să înveți să cânți la un instrument muzical și nu ești încă hotărât asupra alegerii, îți recomandăm pianul. Acesta îți va oferi o mare satisfacție încă de la prima apăsare a tastelor, iar notiunile teoretice sunt mai ușor de înțeles învățând acest instrument. Datorită complexității sale, pianul va continua să te surprindă. Fiind un instrument ușor de integrat într-un grup muzical, îți oferim posibilitatea și îndrumarea necesară pentru a cânta alături de alți cursanți de la alte instrumente sau, de ce nu, chiar și piese ce pot fi cântate la patru mâini alături de un alt pianist.
                ',
        'courses_image' => '1761644386465075.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de ukulele',
        'courses_description' => 'Lecțiile de ukulele sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 5 ani, dar și adulților.
                În cadrul lecțiilor de ukulele veți învață despre:
                •	acorduri
                •	noțiuni despre ritm
                •	reproducerea de sunete sau fragmente muzicale
                •	improvizație
                •	acompaniament
                
                Lecțiile de ukulele sunt individuale, durează 50 de minute și sunt concepute individual în funcție de dorințele, vârsta și abilitățile elevului.
                
                Ca instrument legat de chitară, ukulele este un instrument foarte potrivit pentru copiii sub 7 ani care doresc să învețe să cânte la chitară, dar nu este singurul. Un instrument distractiv pentru toate vârstele!
                
                Datorită dimensiunilor reduse, acest instrument poate fi dus oriunde și este foarte portabil, precum și ușor de integrat în orice situație.
                
                Dacă știi deja să cânți la chitară, este foarte ușor să încerci acest instrument, deoarece tehnicile sunt foarte apropiate.
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644372735580.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de vioară',
        'courses_description' => 'Lecțiile de vioara sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 6 ani, dar și adulților.
                În cadrul cursurilor de vioara veți învață despre:
                ● poziția corectă la acest instrument
                ● notele muzicale
                ● noțiuni ritmice
                ● multitudinea de tehnici folosite la acest instrument
                ● melodii adaptate nivelului
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Vioara este un instrument grațios care este admirat pentru eleganța sa. Cântând la vioară îți ascuți mintea și îți îmbunătățește memoria și atenția. În plus, postura dreaptă înapoi, unică pentru practicarea viorii, favorizează o postură armonioasă.
                
                Cunoaște-te, evaluează-ți potențialul muzical, învață poziția corectă a instrumentelor și cum sunt produse sunetele viorii încă de la prima lecție.
                
                Dacă știți deja să cântați la acest instrument, instructorul dumneavoastră vă va analiza nivelul și vă va îndruma să dezvoltați în continuare acest instrument. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                
                ',
        'courses_image' => '1761644361133599.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de mandolină',
        'courses_description' => 'Lecțiile de mandolină sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 7 ani, dar și adulților.
                •	În cadrul cursurilor de mandolină veți învață despre:
                notele muzicale
                •	noțiuni despre ritm
                •	acorduri
                •	reproducerea de sunete sau fragmente muzicale
                •	improvizație
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Cu capacitatea sa de a produce sunete surprinzătoare și uimitoare, mandolina este un instrument la fel de popular ca chitara, pianul și tobe și se găsește frecvent în trupele de muzică moderne.
                Mandolina este un instrument ușor de cântat care își dezvoltă rapid abilitățile de a cânta și este o sursă neprețuită de împlinire și fericire. Acest instrument ajută la dezvoltarea răbdării într-un mod simplu și distractiv și, de asemenea, ajută la relaxare, dezvoltarea cognitivă și emoțională. Această mandolină ușor de transportat aduce iubitorii de muzică și frumusețe deopotrivă în orice loc și în orice situație. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644351763501.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de chitară bass',
        'courses_description' => 'Lecțiile de chitară bass sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 5 ani, dar și adulților.
                În cadrul cursurilor de bass veți învață despre:
                notele muzicale
                •	noțiuni despre ritm
                •	acorduri
                •	reproducerea de sunete sau fragmente muzicale
                •	improvizație
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                
                Chitara bas este un instrument important care leagă ritmul și armonia unui cântec.
                Cursul de chitară basă predă terminologia de bază a teoriei muzicii și aplicarea acesteia la instrument, atât din perspectivă muzicală, cât și din perspectivă de acțiune.
                Puteți beneficia de metode personalizate în funcție de genul preferat și direcția de evoluție muzicală 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644337715207.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de tobe',
        'courses_description' => 'Lecțiile de tobe sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 5 ani, dar și adulților.
                În cadrul cursurilor de tobe veți învață despre:
                ● tehnici de baza
                ● ritmuri și modele de baterie
                ● modul de a folosi coardele, pedalele și ciocanelele
                ● improvizație și compoziție
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Tobele sunt instrumente care vă oferă posibilitatea de a vă exprima și de a vă dezvolta muzical și personal. Tehnicile și metodele de predare sunt moderne și adaptate fiecărui elev.
                Cântarea la tobe îți îmbunătățește capacitatea de a-ți coordona părțile corpului. Învățarea să cânți la tobe este una pe termen lung, dar satisfacția pe care o aduce acest instrument merită efortul. Privirea publicului aplauda este o experiență unică, diferită de oricare alta.
                Dezvoltați-vă capacitatea de concentrare, inteligența muzicală și capacitatea de a vă angaja și de a vă exprima emoțional cu ajutorul tobelor. Învățarea să cânte la tobe necesită mai mult decât lecții, dar, mai ales, răbdare, simțul ritmului și mult studiu personal. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644329891629.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de saxofon',
        'courses_description' => 'Lecțiile de saxofon sunt individuale, durează 50 de minute și se adresează copiilor începând cu vârstă cuprinsă între 8 și 11 ani, dar și adulților.
                În cadrul cursurilor de saxofon veți învață despre:
                ● înțelegerea acordurilor
                ● modul de a suflă
                ● modul de a utiliza degetele pentru acoperirea găurilor
                ● improvizație și compoziție
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Deși mai puțin prezent în orchestrele simfonice, saxofonul este folosit foarte activ în muzică ușoară și în orchestrele de jazz și se găsește adesea în posturi de solist.
                Cursul de saxofon este un ghid pentru înțelegerea tehnicilor și a tipurilor de cântare, a locurilor și a rolurilor acestora în interpretarea muzicii. Învățarea saxofonului oferă studenților cunoașterea structurii acestuia, a tehnicilor instrumentale și a principiilor de interpretare. Cursul de saxofon nu numai că dezvoltă sensibilitatea și intelectul, dar beneficiază și la nivel de condiție fizică prin practicarea unei respirații adecvate și dezvoltă o constituție puternică și un echilibru mental, nu numai în muzică, ci și în alte activități. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644320039508.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de flaut',
        'courses_description' => 'Lecțiile de flaut sunt individuale, durează 50 de minute și se adresează copiilor începând cu vârstă cuprinsă între 8 și 11 ani, dar și adulților.
                În cadrul cursurilor de flaut veți învață despre:
                ● înțelegerea acordurilor
                ● modul de a suflă
                ● modul de a utiliza degetele pentru acoperirea găurilor
                ● improvizație și compoziție
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Deși flautele aparțin categoriei instrumentelor de suflat din lemn, flautele moderne sunt realizate din diverse aliaje metalice, aliaje simple, aliaje cu argint, argint pur, aur pur, platină, dar și lemn. Flautul metalic este adesea întâlnit în orchestrele simfonice contemporane, ansamblurile de cameră și lucrările solo.
                Cursul de flaut oferă ca punct de plecare un studiu prin aplicarea corectă a conceptului de tehnică instrumentală, dar și dezvoltarea alegerilor de joc. Studiile medicale au arătat că diverse afecțiuni respiratorii la copii, precum și bronșita și astmul bronșic, au fost ameliorate sau chiar vindecate prin învățarea și practicarea flautului. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644311000127.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de chitară electrică',
        'courses_description' => 'Lecțiile de chitară electrică sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 5 ani, dar și adulților.
                În cadrul cursurilor de chitară electrică veți învață despre:
                ● notele muzicale
                ● efecte și amplificare
                ● acorduri
                ● reproducerea de sunete sau fragmente muzicale
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                 
                Chitară electrică este un instrument muzical popular care utilizează un sistem electronic pentru a amplifică sunetul produs de corzi. Este folosită în principal în muzică rock, pop, blues și jazz, dar este utilizată și în alte genuri muzicale.
                Chitară electrică are o construcție simplă, dar este deosebit de versatilă și poate produce o varietate largă de sunete și tonuri, în funcție de configurația electronică și setările utilizate. Corpul chitarei este adesea realizat din lemn, iar corzile sunt din metal sau nylon.
                Cântatul la chitară electrică implică mișcarea și coordonarea precisă a degetelor pentru a produce sunete clare și melodii complexe. Practicarea constanța a acestui instrument poate ajută la dezvoltarea abilităților motorii fine și la îmbunătățirea dexterității mâinilor.Pe de altă parte cântatul la acest instrument necesită concentrare și atenție la detalii. Trebuie să fii atent la fiecare notă și mișcare a degetelor lor pentru a produce sunetele dorite. Această concentrare poate ajută la dezvoltarea abilităților de atenție și la îmbunătățirea performanțelor în alte activități care necesită concentrare.
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761644300734657.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de canto',
        'courses_description' => 'Lecțiile de canto sunt individuale, durează 50 de minute și se adresează copiilor cu vârstă minimă de 5 ani, dar și adulților.
                În cadrul cursurilor de canto veți învață despre:
                ● dicția și respirația corectă
                ● intonația
                ● prezența/ mișcarea scenică
                ● noțiuni despre ritm
                 
                Cursurile de pian sunt personalizate în funcție de dorințele, nivelul,  aptitudinile și vârstă cursantului. 
                
                Lecțiile de canto vă pot ajuta să vă extindeți potențialul ca artist. Cursurile de canto vă ajută să vă îmbunătățiți abilitățile muzicale, să atingeți noi tonuri și să vă dezvoltați propriul stil muzical. De asemenea, contribuie la dezvoltarea caracterului, a stimei de sine și a încrederii în a te prezenta în fața unui public.
                
                Este foarte important să-ți încălziți vocea prin exerciții de respirație și vocale înainte de a cânta melodia preferată. Acest lucru crește rezistența, îmbunătățește calitatea vocii și, în același timp, vă protejează vocea pe termen lung.
                
                Dezvoltă-ți vocea cu ajutorul vocalizărilor și în diferite exerciții cu profesorii noștri vei descoperi că vocea ta este instrumentul perfect care nu încetează să te uimească!
                
                Repertoriul de repetiții este selectat în funcție de vârsta elevului, capacitatea muzicală și dorințele.
                
                Muzica este și mai bună cu prietenii, așa că oferim studenților oportunitatea și îndrumările necesare pentru a cânta în duete sau trupe mici. 
                
                Vă invităm la o lecție introductivă pentru a vă cunoaște, a vă evalua potențialul muzical și, bineînțeles, a cânta împreună. 
                ',
        'courses_image' => '1761644289431498.jpg',
        'courses_price' => 500,
      ],

      [
        'courses_name' => 'Curs de teorie muzicală',
        'courses_description' => 'Luarea lecțiilor de teorie muzicală te va ajuta să înveți mai bine instrumentul pe care vrei să-l stăpânești. Puteți învăța cum să comutați cu ușurință de la un gen de muzică la altul. Acest lucru te va ajuta să ieși din zona ta de confort și să-ți stăpânești propriul stil muzical. Spre deosebire de orele de grup din seminariile de teorie muzicală, orele noastre individuale de teorie muzicală sunt individuale, foarte detaliate și vă vor ajuta să stăpâniți și să progresați în aceste noi abilități. Lecțiile de teorie muzicală durează 50 de minute și sunt destinate copiilor cu vârsta de peste 6 ani și adulților. 

                Cursurile de pian sunt personalizate in functie de dorintele, nivelul,  aptitudinile si varsta cursantului. 
                
                Vă invităm la o lecție introductivă în care vă veți cunoaște, vă veți evalua potențialul muzical și veți învăța să cântați o mică melodie încă de la prima lecție! 
                ',
        'courses_image' => '1761812288163998.jpg',
        'courses_price' => 500,
      ],
    ];

    foreach ($courses as $key => $value) {
      Courses::create($value);
    }

    $multi_image = [
      ['multi_image' => 'upload/multi/1761371378397633.jpg'],
      ['multi_image' => 'upload/multi/1761371378453259.jpg'],
      ['multi_image' => 'upload/multi/1761371378484538.jpg'],
      ['multi_image' => 'upload/multi/1761371378513705.jpg'],
      ['multi_image' => 'upload/multi/1761371378585495.jpg'],
      ['multi_image' => 'upload/multi/1761371378619404.jpg'],
      ['multi_image' => 'upload/multi/1761371378637335.jpg'],
      ['multi_image' => 'upload/multi/1761371502842817.jpg'],
      ['multi_image' => 'upload/multi/1761371502958212.jpg'],
    ];

    foreach ($multi_image as $key => $value) {
      MultiImage::create($value);
    }

    $instruments = [
      [
        'instruments_name' => 'Pian',
        'instruments_description' => 'Roland GP-609 PE',
        'instruments_image' => 'upload/instruments/1761880459548922.jpg',
        'instruments_price' => 2000,
      ],

      [
        'instruments_name' => 'Chitara',
        'instruments_description' => 'Chitara acustica',
        'instruments_image' => 'upload/instruments/1761880531935666.jp',
        'instruments_price' => 3000,
      ],

      [
        'instruments_name' => 'Ukulele',
        'instruments_description' => 'Ukulele soprano',
        'instruments_image' => 'upload/instruments/1761880590299791.jpg',
        'instruments_price' => 300,
      ],

      [
        'instruments_name' => 'Vioară',
        'instruments_description' => 'Vioara clasica, lemn, marime 3/4, maro',
        'instruments_image' => 'upload/instruments/1761880622656157.jpg',
        'instruments_price' => 450,
      ],

      [
        'instruments_name' => 'Mandolină',
        'instruments_description' => 'Thomann Portuguese Mandolin 1',
        'instruments_image' => 'upload/instruments/1761880691283677.jpg',
        'instruments_price' => 3000,
      ],

      [
        'instruments_name' => 'Chitară bass',
        'instruments_description' => 'Ibanez GSRM20B-WNF',
        'instruments_image' => 'upload/instruments/1761880768338092.jpg',
        'instruments_price' => 1300,
      ],

      [
        'instruments_name' => 'Saxofon',
        'instruments_description' => 'Set Saxofon Alto Parrot Auriu',
        'instruments_image' => 'upload/instruments/1761880904455934.jpg',
        'instruments_price' => 1800,
      ],

      [
        'instruments_name' => 'Flaut',
        'instruments_description' => 'Startone SFL-55 Flute',
        'instruments_image' => 'upload/instruments/1761880950861017.jpg',
        'instruments_price' => 580,
      ],

      [
        'instruments_name' => 'Chitară electrică',
        'instruments_description' => 'Chitara Electrica, Harley Benton',
        'instruments_image' => 'upload/instruments/1761880994870012.jpg',
        'instruments_price' => 1000,
      ],

      [
        'instruments_name' => 'Tobe',
        'instruments_description' =>
          'Set Tobe Acustice(hardware, stative, sacun si cinele incluse)',
        'instruments_image' => 'upload/instruments/1761881124178545.jpg',
        'instruments_price' => 2000,
      ],
    ];

    foreach ($instruments as $key => $value) {
      Instruments::create($value);
    }

    $teachers = [
      [
        'teachers_name' => 'Bogdan Zăgan',
        'teachers_course' => 'Profesor Pian',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886625666103.jpg',
      ],

      [
        'teachers_name' => 'Andrei Dornea',
        'teachers_course' => 'Profesor Chitară',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886706257149.jpg
            ',
      ],

      [
        'teachers_name' => 'Letiția Hoza',
        'teachers_course' => 'Profesor Ukulele',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886745522347.jpg',
      ],

      [
        'teachers_name' => 'Anisa Dornea',
        'teachers_course' => 'Profesor Mandolină',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886778484752.jpg',
      ],

      [
        'teachers_name' => 'Octavia Lazea',
        'teachers_course' => 'Profesor Vioară',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886815262820.jpg',
      ],

      [
        'teachers_name' => 'Sergiu Dornea',
        'teachers_course' => 'Profesor Chitară Electrică',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886940182368.jpg',
      ],

      [
        'teachers_name' => 'Filip Mureșan',
        'teachers_course' => 'Profesor Saxofon',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887023295704.jpg',
      ],

      [
        'teachers_name' => 'Filip Mureșan',
        'teachers_course' => 'Profesor Saxofon',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761886625666103.jpg',
      ],

      [
        'teachers_name' => 'Ingrid Bretea',
        'teachers_course' => 'Profesor Flaut',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887053021318.jpg',
      ],

      [
        'teachers_name' => 'Rut Petrean',
        'teachers_course' => 'Profesor Canto',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887079623319.jpg',
      ],

      [
        'teachers_name' => 'Adina Mocan',
        'teachers_course' => 'Profesor Teorie Muzicală',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887107361926.jpg',
      ],

      [
        'teachers_name' => 'Adrian Cadiș',
        'teachers_course' => 'Profesor Chitară Bass',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887269176563.jpg',
      ],

      [
        'teachers_name' => 'Cristi Catrința',
        'teachers_course' => 'Profesor Tobe',
        'teachers_description' => 'zzz',
        'teachers_iamge' => 'upload/teachers/1761887311650316.jpg',
      ],
    ];

    foreach ($teachers as $key => $value) {
      Teachers::create($value);
    }
  }
}
