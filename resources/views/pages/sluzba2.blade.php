@extends('layouts.main')
    @section('content')
    <!-- Jumbotron-->
<section class="one">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 d-inline">Služba za prostorno uređenje, stambeno-komunalne poslove i katastar</h1>
            <hr class="my-4">    
        </div>
    </div>
</section>
<!--news-->
<section class="three">
   <div class="container position-relative float-center">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                        <p>
                            U Službi za prostorno uređenje, stambeno-komunalne poslove i katastar osigurava se izvršavanje zakona, podzakonskih akata i drugih propisa iz oblasti za koju je utemeljena;
                            <ul class="list-group">
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi se prvostupanjski upravni postupak i donose pojedinačni upravni akti u navedenim oblastima;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> izvršavaju se zakoni, opći akti i drugi propisi iz oblasti urbanizma, prostornog uređenja, korištenja građevinskog zemljišta, cestovnog prometa i javnih cesta, zaštite okoliša, utvrđivanja i provođenja politike uređenja prostora, korištenja građevinskog zemljišta, geodetskih poslova, katastra nekretnina i katastra zemljišta;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrši se izdavanje uvjerenja, provođenje promjena na zemljištu i računalna obrada podataka na provođenju promjena na katastarskim planovima i operatu;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrši se izdavanje kopija podataka premjera;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše poslovi održavanja premjera i drugi geodetski poslovi;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrši se izvršavanje zadataka utvrđenih metodologijom za uvođenje i vođenje jedinstvene evidencije i jedinstvenog registra prostornih jedinica;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše se stručni poslovi u pripremi, donošenju i provođenju prostorno-planske dokumentacije (prostorni plan, urbanistički plan, regulacijski plan,  urbanistički projekti i planovi parcelacije), izdavanja lokacijskih dozvola, dozvola za građenje i uporabnih dozvola za objekte;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrši se izdavanje uvjerenja i izvoda;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju se poslovi organizacije  upravljanja stambeno-komunalnim objektima, poslovnim prostorima u vlasništvu općine, zajedničkim dijelovima  stambenih i stambeno- poslovnih zgrada;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslovi vezano za komunalnu naknadu (formira i ažurira baze podataka za obveznike komunalne naknade);</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše statističke obrade podataka o pitanjima iz djelokruga službe;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrši pokretanje postupka javne nabave iz oblasti građenja i prostornog planiranja;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> izrađuju se prijedlozi propisa i drugih akata iz nadležnosti Službe koje donosi Općinsko vijeće i Općinski načelnik;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> daju mišljenja, prijedlozi i sugestije kod izrade propisa i drugih akata koje donose nadležna tijela Županije i Federacije o pitanjima iz nadležnosti Službe;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> pripremaju i daju odgovori na pitanja Općinskog vijeća u svezi provođenja politike i izvršavanja zakona i drugih propisa iz svoje nadležnosti o stanju  i  problemima u oblasti za koju je utemeljena;</i></li>
                                <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše i drugi poslovi  koje joj u zadaću stavi Općinsko vijeće i Općinski načelnik.</i></li></ul>
                        </p>
                    
                
       </div>
       <div class="col-lg-1 col-md-9 col-sm-12">
            <div class="poveznice">
                @include('inc.weather')
                <div class="card text-center" id="sluzbenici">
                    <div class="card-body" >
                        <h3 class="card-header">Pomoćnik načelnika:</h3></br>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="bi bi-person-fill"> Branka Ivić, dipl.oec;  ing.geod.</i></li></br>
                            <li class="list-group-item"><i class="bi bi-telephone-fill"> +387 34 276 303</i></li></br>
                            <li class="list-group-item"><i class="bi bi-envelope-fill"> graditeljstvokatastar@opcinakupres.ba</i></li></br>
                        </ul>
                    </div>
                </div>
            </div>
       </div>
    </div>
   </div>
</section>
@endsection
