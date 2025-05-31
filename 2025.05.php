<?php

require_once 'slide.php';

$teams = array(
               // Name => (number, number of members, flair)
               // Available flairs: <small>, <blue>, <smallblue>
               'Viktat Projektivt Rum'        => array(1, 6),
               'Enar Åkered'                  => array(2, 9),
               'Trial & Error'                => array(5, 7),
               'RRL för Claes Elfsberg'       => array(6, 6),      
               'Webus Express'                => array(8, 9),
               'Ibsens Kusiner'               => array(9, 9),
               'Senaste Laget'                => array(10, 9),
               'Sötgötarna'                   => array(11, 9),
               'Rebussen med släp'            => array(12, 6),
               'Puh - Det mörka hotet'        => array(14, 7),
               'Krukkrossarna'                => array(15, 5,'<smallblue>'),
               'Ingenjörer på gränsen'        => array(42, 9),
               'Buzzin\''                     => array(83, 9,'<blue>'),
               'Blodbussen Light'             => array(112, 5,'<small>'),
               'TBD'                          => array(780, 7,'<blue>'),
               );

// Blåbärsrebusar
$bluerebus = array();
// Blåbärshjälp
$bluehelprebus = array();

$events = array(
    // Rebusar
    'R 1' => 'Rebus 1',
    'R 2' => 'Rebus 2',
    'R 3' => 'Rebus 3',
    'R 4' => 'Rebus 4',
    'R 5' => 'Rebus 5',
    'R 6' => 'Rebus 6',
    'R 7' => 'Rebus 7',
    'R 8' => 'Rebus 8',

    // Stjälp
    'S 1' => 'Stjälp 1',
    'S 2' => 'Stjälp 2',
    'S 3' => 'Stjälp 3',
    'S 4' => 'Stjälp 4',
    'S 5' => 'Stjälp 5',
    'S 6' => 'Stjälp 6',
    'S 7' => 'Stjälp 7',
    'S 8' => 'Stjälp 8',
    'S 9' => 'Stjälp 9',
    'S 10' => 'Stjälp 10',
    'S 11' => 'Stjälp 11',
    'S 12' => 'Stjälp 12',
    'ÖppReb' => 'Öppnat stjälprebuskuvertet',

    'ÖppPlk' => 'Öppnat stjälpplockkuvertet',
    'StjPlk' => 'Stjälpplock',

    // Heldagspyssel
    'P KAT' => 'Katt-las',
    'P LAS' => 'KatLAS',
    'P MUS' => 'Djurisk musik',
    'P GEO' => 'Geoguessr',
    'P SUP' => 'Gissa Drinken',
    'P KRY' => 'Musikkryss',
    'P OND' => 'Ond bråd död',
    'P KOD' => 'Koder & Chiffer',
    'P VIK' => 'Vik något fint',
    
    // Lunchpyssel
    'P MÜS' => 'Müsli',
    'P 1X2' => 'Tipspromenad',
    
    // Pyssel förmiddag
    'P BPR' => 'Banprofiler',
    'P BAM' => 'Bamse',
    'P BIG' => 'Matoligopolet',
    'P RIP' => 'Pyssel Macabre',

    'Stil' => 'Stil och finess',

    'Tid S' => 'Tidsprickar vid Start',
    'Tid L' => 'Tidsprickar vid Lunch',
    'Tid M' => 'Tidsprickar vid Mål',

    'TP 1' => 'Tallriksplock 1',
    'TP 2' => 'Tallriksplock 2',
    'TP 3' => 'Tallriksplock 3',
    'TP 4' => 'Tallriksplock 4',
    'TP 5' => 'Tallriksplock 5',
    'TP 6' => 'Tallriksplock 6',
    'TP 7' => 'Tallriksplock 7',
    'TP 8' => 'Tallriksplock 8',
    'TP 9' => 'Tallrikstema',

    'FP 1' => 'Fotoplock 1',
    'FP 2' => 'Fotoplock 2',
    'FP 3' => 'Fotoplock 3',
    'FP 4' => 'Fotoplock 4',
    'FP 5' => 'Fotoplock 5',
    'FP 6' => 'Fotoplock 6',
    'FP 7' => 'Fotoplock 7',
    'FP 8' => 'Fotoplock 8'
    );

$parts = array(
    '*picture*Rebusrally 2025-05:logga_stor.png',
    '*picture*Start:start.jpg',

    'Etapp 1' => array('Tid S', 'R 1', 'P KAT', 'P BPR', 'TP 1', 'FP 1'),

    'Etapp 2' => array('R 2', 'P MUS', 'P GEO', 'TP 2', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sumcomp*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3', 'P SUP', 'P KRY','*picture*JAK:jak.jpeg','TP 3', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sumcomp*', 'Totalt efter Etapp 2', 'Etapp 3'),

    'Etapp 4' => array('R 4', 'P RIP', 'TP 4', 'FP 4'),
    'Totalt efter Etapp 4' => array('*sumcomp*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Lunch' =>
    array(
          //'*picture*Lunch:lunch.jpg',
        'Tid L',
        'P MÜS',
        'P 1X2',
          'ÖppPlk', 'StjPlk',
      //     array('*esum*', 'Stjälpplock totalt', 'StjPlk', 'ÖppPlk'),
          'ÖppReb',
          'S 1', 'S 2', 'S 3', 'S 4', 'S 5', 'S 6', 'S 7',
          'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
          array('*esum*', 'Stjälprebusar totalt',
                'ÖppReb',
                'S 1', 'S 2', 'S 3', 'S 4', 'S 5',
                'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12')),
    'Totalt efter Lunch' => array('*sumcomp*', 'Totalt efter Etapp 4', 'Lunch'),

    'Etapp 5' => array('R 5', 'P LAS', 'TP 5', 'FP 5'),
    'Totalt efter Etapp 5' => array('*sumcomp*', 'Totalt efter Lunch', 'Etapp 5'),

    'Etapp 6' => array('R 6', 'P BAM', 'P KOD', 'TP 6', 'FP 6'),
    'Totalt efter Etapp 6' => array('*sumcomp*', 'Totalt efter Etapp 5', 'Etapp 6'),

    'Etapp 7' => array('R 7', 'P VIK', '*picture*Sötgötarna:vik_1.jpg','*picture*Enar Åkered:vik_2.jpg', 'TP 7', 'FP 7'),
    'Totalt efter Etapp 7' => array('*sumcomp*', 'Totalt efter Etapp 6', 'Etapp 7'),

    'Etapp 8' => array('R 8', 'P BIG', 'P OND', 'TP 8', 'TP 9', 'FP 8', 'Tid M'),

    '*picture*Prisutdelning:prisutdelning.jpg',

    //'*picture*Karta:karta.jpg',

    // Stilpris
    '*picture*Stilpriset:Stilochfiness.jpg',
    //'*picture*1 till 2 till:stil.jpg',
    '*picture*Blodbussen Light:drakegg.jpg',
    '*sorted*Stil',

    // Plockpris
    '*picture*Bästa plockare:plockpris.jpg',
    'Plock totalt' =>
    array('*sum*',
          'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
          'TP 9',
          'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8',
          'ÖppPlk', 'StjPlk'),

    // Pysselpriset
    '*picture*Pysselpriset:pysselpris.jpg',
    'Pyssel totalt' =>
    array('*sum*',
    'P MÜS', 'P 1X2', 'P KAT', 'P LAS', 'P MUS', 'P GEO', 'P SUP', 'P KRY',
    'P OND', 'P BPR', 'P BAM', 'P KOD', 'P VIK', 'P BIG', 'P RIP'),

    // Rebuspriset
    '*picture*Rebuspriset:rebuspris.jpg',
    'Rebusar totalt' =>
    array('*sum*',
          'ÖppReb', 'S 1', 'S 2', 'S 3', 'S 4',
          'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
          'R 1', 'R 2', 'R 3', 'R 4',
          'R 5', 'R 6', 'R 7', 'R 8'),
    '*picture*Blåbärsrebuspriset:blåbärsrebus.jpg',
    'Rebusar totalt (Blåbärspris)' =>
    array('*sum*','ÖppReb', 'S 1', 'S 2', 'S 3', 'S 4',
          'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
          'R 1', 'R 2', 'R 3', 'R 4',
          'R 5', 'R 6', 'R 7', 'R 8'),

    '*picture*Färstapriset:Förstapriset.jpg',
    'Totalt' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Ständiga tvåan:Andrapriset.jpg',
    'Ständiga tvåan' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Blåbärspriset:Blåbärspris.jpg',
    'Blåbärspriset' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Bästa småbil:Småbilspris.jpg',
    'Bästa småbil' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Bästa utlänska lag:utlänsktlag.jpg',
    'Bästa utlänska lag' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Mittenpriset:mittenpriset.jpg',
    'Mittenpriset' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*SaS kula på en pinne:saskula.jpg',
    '*picture*Backpriset:Backpris.jpg',
    '*picture*Läggarpinnen:pinne.jpg',
    'Läggarpinnen' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Sura trean:SuraTrean.jpg',
    );

$maxPoints =
  array(
    'P MÜS' => 10, # 10 sorter
    'P 1X2' => 13, # 13 frågor
    'P KAT' => 20, # 20 frågor
    'P LAS' => 25, # 25 frågor
    'P MUS' => 20, # 20 frågor
    'P GEO' => 18, # 18 frågor
    'P SUP' => 20, # 20 frågor
    'P KRY' => 25, # 25 frågor
    'P OND' => 20, # 20 frågor
    'P BPR' => 17, # 17 frågor
    'P BAM' => 20, # 20 frågor
    'P KOD' => 20, # 20 frågor
    'P VIK' => 10, # 20 frågor
    'P BIG' => 28, # 28 frågor
    'P RIP' => 25, # 25 frågor
  );

$info =
  array(
        'P MÜS' => '<red>1 per fel',
        'P 1X2' => '<red>1 per fel',
        'P KAT' => '<red>1 per fel, -? för fin bild',
        'P LAS' => '<red>Se formulär',
        'P MUS' => '<red>1 per fel',
        'P GEO' => '<red>1 per fel, \"fel\" gubbe kan ge poäng om den också är rätt, men bägge filmer måste vara rätt',
        'P SUP' => '<red>1 per fel',
        'P KRY' => '<red>1 per fel',
        'P OND' => '<red>1 per fel',
        'P BPR' => '<red>1 per fel',
        'P BAM' => '<red>1 per fel',
        'P KOD' => '<red>1 per fel',
        'P VIK' => '<red>-10 för snyggast, -9 för näst snyggast, osv...',
        'P BIG' => '<red>1 per fel',
        'P RIP' => '<red>1 per fel',

        'P .*' => '1 per fel',
        'ÖppReb' => '40',
        'ÖppPlk' => '80',
        'StjPlk' => '-10 per bild',
        'Tid S' => '1 per minut',
        'Tid L' => '1 per minut',
        'Tid M' => '1 per minut, 2 efter 17:30',
        'R [0-9]+' => '25 klippt hjälp, 45 klippt nöd',
        'S [0-9]+' => '-10 korrekt motiverad lösning',
        'FP [0-9]+' => '10 missat plock, 20 falskt plock',
        'TP 9' => '-5 per korrekt tema',
        'TP [0-9]+' => '5 missat plock, 10 falskt plock'
        );
?>
