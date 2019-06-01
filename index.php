<?php
/**
 * Created by PhpStorm.
 * User: Jyles Coad-Ward
 * Date: 1/06/2019
 * Time: 6:26 PM
 */

    $interviewid = $_GET['interview'];
    $showid = $_GET['show'];
    $page = $_GET['page'];

    $content = 'oof';

$homecontent = <<<EOD
<br><h3 id="interview">Interviews</h3><a href="?page=interview&interview=adam-hall">Adam Hall</a><br><a href="?page=interview&interview=cathrine-summers">Cathrine Summers</a><br><a href="?page=interview&interview=hobgood">Laurence Hobgood</a><br><a href="?page=interview&interview=kate-pass">Kate Pass</a><br><a href="?page=interview&interview=libby-hammer">Libby Hammer</a><br><a href="?page=interview&interview=pjs">Perth Jazz Society</a><br><a href="?page=interview&interview=vince-jones">Vince Jones</a><br><br><h3 id="contact">Contact</h3>You can contact Samm on her <a href="https://www.facebook.com/SammsJazzLounge">Facebook Page</a><br><br>If there are any problems with the website don't hesitate to email the website operator (Jyles Coad-Ward)<br> <a href="mailto:dariox.club@gmail.com">HERE</strong></a>
EOD;
$contactcontent = <<<EOD
<h3>The only way to contact me is through my <a href="https://www.facebook.com/SammsJazzLounge/">Facebook Page</a><br><br>If there are any problems with the website please eamil the website administrator (Jyles Coad-Ward) <a href="mailto:dariox.club@gmail.com">Here</a></h3>
EOD;


    if ($page == 'home') {
        $title = 'Home';
        $content = $homecontent;
    } elseif ($page == 'contact') {
        $title = 'Contact Me';
        $content = $contactcontent;
    } elseif ($page == 'interview') {
        $title = 'Interview';
        goto interview;
    } else {
        header("Location: index.php?page=home");
    }

    interview:
    /* ----Interview Links---- */
    $interviewdllinks = array();
    $interviewdllinks[1] = "https://storage.googleapis.com/dariox/samm/interview/ADAM-HALL.wav";
    $interviewdllinks[2] = "https://storage.googleapis.com/dariox/samm/interview/CATHRINE-SUMMERS.wav";
    $interviewdllinks[3] = "https://storage.googleapis.com/dariox/samm/interview/HOBGOOD.wav";
    $interviewdllinks[4] = "https://storage.googleapis.com/dariox/samm/interview/KATE-PASS.mp3";
    $interviewdllinks[5] = "https://storage.googleapis.com/dariox/samm/interview/LIBBY-HAMMER.wav";
    $interviewdllinks[6] = "https://storage.googleapis.com/dariox/samm/interview/PJS.wav";
    $interviewdllinks[7] = "https://storage.googleapis.com/dariox/samm/interview/VINCE-JONES.mp3";

    /* ----Interview Content---- */
    $interviewcontent = array();
    $interviewcontent[1] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/adamhall.png" height="256" width="256" />
        <div class="interview title">
            Adam Hall
        </div>
    </div>
    <div class="interview description">
        Adam Hall began playing in 1990 at the age of ten, and later studied the craft at Berklee College of Music in Boston, 
        USA. Adam is also competent in playing the Trombone, Alto Sax, Piano, Euphonium, Mellophonium, and a little bit of 
        Bass and Drums for good measure.<br>
<br>
In his early career Adam played at the Sydney Olympics and was Artist in Residence at Southbridge Jazz Club, 
Singapore. He has worked with numerous talents such as: James Morrison, Don Burrows, 45-year-long former leader 
of the Count Basie Orchestra Frank Foster, Shirley Horn’s band, Vanessa Amorosi and Grace Knight, to name just a few.<br>
<br>
Adam has since made regular tours to Europe and various cities all over the world including Singapore, Boston,
 New York, New Orleans and Los Angeles. He has performed throughout Germany at the Jazzclub Rheingau, <br>
 <br>
Yorckschlösschen, Ratskeller Köpenick and on the Rhein River, and played at the Rockin’ Race Jamboree in 
Spain and the Metropol in Vienna. Adam was a guest musician in Jeremy Monteiro’s Merry Bebop: A Jazzy Christmas
for 2013 and headlined the opening night of the Berne Jazz & Blues Sessions in Switzerland in 2014.<br>
<br>
Adam Hall features on Bluesin’ The Groove’s 2013 album ‘Mess Around’, which won Blues Album of the Year 
in Germany and ranked number 5 in the international list.
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/ADAM-HALL.wav" type="audio/x-wav">
    </audio>
</div>
EOD;
    $interviewcontent[2] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/cathrine-summers.jpg" height="256" width="256" />
        <div class="interview title">
            Cathrine Summers
        </div>
    </div>
    <div class="interview description">
Perth based female jazz singer, Cathrine Summers is a sell-out artist. Since her 2008 debut, Cathrine Summers has lit up many events, festivals, high profile galas and regularly performs nationally and internationally. She’s a resident sell-out artist at local Perth and Melbourne jazz clubs, and has featured in revered festivals like, BRAVO! Cruise of the Performing Arts, Perth International Festival, Jazz By The Bay, sell-out seasons in Fringe World Festival 15, 16, 17 & 18, City of Perth New Years, Kings Park Festival and many more. Described as a cross between Dinah Washington and Anita O’Day, with a splash of Ella Fitzgerald, the UK-born vocalist is acclaimed for her rich timbre and broad vocal range. Her charismatic engagement with the audience is exhilarating.
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/CATHRINE-SUMMERS.wav" type="audio/x-wav">
    </audio>
</div>
EOD;
    $interviewcontent[3] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/hobgood.jpg" height="256" width="256" />
        <div class="interview title">
            Laurence Hobgood
        </div>
    </div>
    <div class="interview description">
Jazz pianist, composer, arranger, producer, Yamaha® artist and Grammy® winner Laurence Hobgood has enjoyed a 30+year career. Highlights include: three consecutive Fellowships to the Aspen Music Festival (1990, '91, '92), being chosen as a 1995 Chicagoan
of the Year in the Arts, a 2003 Deems Taylor Award given by ASCAP for the year’s outstanding music journalism, multiple Grammy® nominations and a 2010 Grammy®
Award. He's played at many of the world’s most prestigious venues including Carnegie
Hall, Lincoln Center, the White House, John F. Kennedy Center for the Performing Arts,
Tanglewood, Hollywood Bowl, and the Sydney Opera House.
For almost 20 years he served as pianist/arranger/collaborator/co-producer for singer
Kurt Elling during which time he wrote virtually all of the material on Elling's first ten
albums, all of which received Grammy® nominations. 
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/HOBGOOD.wav" type="audio/x-wav">
    </audio>
</div>
EOD;
    $interviewcontent[4] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/katepass.webp" height="256" width="256" />
        <div class="interview title">
            Kate Pass
        </div>
    </div>
    <div class="interview description">
Kate Pass is a double bassist and electric bassist from Western Australia with a passion for composing and performing original music.<br>
<br>
She has completed several tours nationally and internationally, performing at an array of festivals and events in Asia, New York and Europe with highlights including performing at the Metropolitan Museum of Art in New York, the Provincetown Playhouse in New York, WOMADelaide, Singapore International Jazz Festival, Penang Island Jazz Festival, Ghent Festival in Belgium and Bergmannstrasse Festival in Germany.<br>
<br>
Kate has performed around Australia with several high-profile Persian musicians including Mohsen Namjoo, Moien, and Tara Tiba. These experiences ignited a passion for Persian music and led to the formation of the Kate Pass Kohesia Ensemble, a unique ensemble that serves as a platform for Kate’s original compositions that explore elements of Persian music in a jazz context. Since forming in 2016, Kohesia Ensemble was nominated for two WAM Song of the Year Awards for both the Jazz and World Music categories, and a Music Award at Perth Fringe Festival.<br>
<br>
Kate has been the recipient of several grants and scholarships including the ECU Academic Excellence Scholarship, WAYJO Jack Bendat Travel Scholarship, ArtStart Australian Council for the Arts Grant and DCA Commercial Development Grant. These have enabled her to develop her career through performance and study locally, in the USA and Europe at institutions such as WAAPA, New York University and Conservatorium van Amsterdam.<br>
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/KATE-PASS.mp3" type="audio/mpeg">
    </audio>
</div>
EOD;
    $interviewcontent[5] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/libbyhammer.jpg" height="256" width="256" />
        <div class="interview title">
            Libby Hammer
        </div>
    </div>
    <div class="interview description">
 Libby Hammer is a West Australian jazz singer, bandleader and vocal coach. Libby Hammer leads and performs in ensembles ranging from an intimate duo to a swingin' big band. Libby Hammer can compose and arrange music too, some of which can be heard on our CDs. Libby Hammer is also an actor with a background in musical theatre and circus. Yes, Libby Hammer can juggle! Above all, Libby Hammer love to bring high quality, fun, entertaining jazz music to the broader public. Libby Hammer is also passionate about sharing her skills and experiences with other singers to enable them to reach their own goals while lifting benchmarks for singers everywhere.
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/LIBBY-HAMMER.wav" type="audio/x-wav">
    </audio>
</div>
EOD;
    $interviewcontent[6] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/pjs.png" height="256" width="256" />
        <div class="interview title">
            Perth Jazz society
        </div>
    </div>
    <div class="interview description">
The Perth Jazz Society is a non-profit incorporated association. Founded in 1973, its aims and objectives are to embolden the artist, enhance the artform and facilitate the performance. It has had a long and distinguished history in presenting jazz of the highest quality through its weekly Monday night performances, for 27 years based at the Hyde Park Hotel, and between October 2007 and December 2011, at The Charles Hotel in North Perth.
<br><br>
In September 2008 the Perth Jazz Society celebrated its 35th Anniversary, making it the oldest modern jazz society in Australia. It remains the focal point for modern jazz in Western Australia.
<br><br>
The PJS has a strong subscription base of some 500 members who receive a substantial discount on tickets to the Monday night performances and other benefits including discounts on recorded music and other products and services.
<br><br>
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/PJS.wav" type="audio/x-wav">
    </audio>
</div>
EOD;
    $interviewcontent[7] = <<<EOD
<div class="interview">
    <div class="interview image">
        <img class="img" src="https://storage.googleapis.com/dariox/samm/webasset/vincejones.jpg" height="256" width="256" />
        <div class="interview title">
            Vince Jones
        </div>
    </div>
    <div class="interview description">
Vincent Hugh Jones was born on 24 March 1954 in Paisley, Scotland.[2] He is the second eldest of four children to John Jones and Mary (née Docherty); the family moved to Australia in April 1964 and lived in Wollongong.[3][4] He attributes his love of jazz to hearing Miles Davis's album Sketches of Spain, when he was about 14 and taught himself to play the trumpet. Jones began his career in 1974 in New South Wales as a bebop trumpet player on the club and jazz circuit.[2]
<br><br>
In November 1981 Jones recorded his debut album, Watch What Happens, with John Bye producing at Richmond Recorders in Melbourne.[5][6] Adrian Jackson of Jazz magazine touted Jones as the "new Melbourne jazz star" in June 1982.[7]
<br><br>
In 1994, he contributed "A Song for You" for Kate Ceberanos 1994 album, Kate Ceberano and Friends.
<br><br>
He has sold more than 200,000 albums worldwide and still tours and performs regularly.
<br><br>
Currently he is living on the south coast of New South Wales, on the edge of the Royal National Park, and he teaches part-time at the Canberra School of Music, Australian National University.
    </div>
    <audio controls class="interview audio">
        <source src="https://storage.googleapis.com/dariox/samm/interview/VINCE-JONES.mp3" type="audio/mpeg">
    </audio>
</div>
EOD;
    if ($interviewid == 'adam-hall') {
        $content = $interviewcontent[1];
        $audio = $interviewdllinks[1];
    } elseif ($interviewid == 'cathrine-summers') {
        $content = $interviewcontent[2];
        $audio = $interviewdllinks[2];
    } elseif ($interviewid == 'hobgood') {
        $content = $interviewcontent[3];
        $audio = $interviewdllinks[3];
    } elseif ($interviewid == 'kate-pass') {
        $content = $interviewcontent[4];
        $audio = $interviewdllinks[4];
    } elseif ($interviewid == 'libby-hammer') {
        $content = $interviewcontent[5];
        $audio = $interviewdllinks[5];
    } elseif ($interviewid == 'pjs') {
        $content = $interviewcontent[6];
        $audio = $interviewdllinks[6];
    } elseif ($interviewid == 'vince-jones') {
        $content = $interviewcontent[7];
        $audio = $interviewdllinks[7];
    }
    goto audiocheck;



    show:
    /* ----Show Links---- */
    $showdllinks = array();
    $showdllinks[1] = "https://storage.googleapis.com/dariox/samm/show/satjazz/21-07-2018.mp3";

    /* ----Show Content---- */
    $showcontent = array();
    $showcontent[1] = 'Content for Show #1 Will Go Here';
    if ($showid == '1'){
        $content = $showcontent[1];
        $audio = $showdllinks[1];
    }
    goto audiocheck;



    audiocheck:
    if (strpos($audio, '.mp3') !== false) {
        $audiotype = "audio/mpeg";
    } elseif (strpos($audio, '.wav') !== false) {
        $audiotype = "audio/x-wav";
    }



?>


<html>
    <head>
        <title>SJL - <?php echo ($title); ?></title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="header">
        <div class="navbar">
            <a class="active" href="?page=home">Home</a>
            <a href="?page=home#shows">Shows</a>
            <a href="?page=home#interview">Interviews</a>
            <a href="?page=contact">Contact</a>
        </div>
    </div>
    <div class="content">
        <div class="title">
            <h1>Samms Jazz Lounge - <?php echo($title); ?></h1>
        </div>
        <?php echo($content); ?>
    </div>
    <div class="footer">
        <div class="copyright">
            Powered by <a href="http://dariox.club">DARiOX</a>
        </div>
    </div>
    </body>
</html>



