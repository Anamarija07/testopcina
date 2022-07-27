@extends('layouts.main')
    @section('content')
<!-- Jumbotron-->
<section class="one">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 d-inline">Služba za društvene djelatnosti, opću upravu, imovinsko-pravne poslove, pitanja branitelja i civilnu zaštitu</h1>
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
                            U Službi za društvene djelatnosti, opću upravu, imovinsko-pravne poslove, pitanja branitelja i civilnu zaštitu osigurava se izvršenje zakona, podzakonskih akata i drugih propisa u oblastima za koju je  utemeljena;
                            <ul class="list-group">
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi se prvostupanjski upravni postupak i donose pojedinačni upravni akti u navedenim oblastima;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> inicira i sudjeluje u izradi nacrta propisa u oblastima za koju je utemeljena;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> brine o osiguravanju lokalnih potreba stanovništva u oblasti obrazovanja, kulture, zdravstva i športa;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vode se poslovi evidencije obrazovnih, kulturnih i sportskih institucija, udruženja mladih i udruga od značaja za općinu;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi i poboljšava procedura suradnje sa organizacijama mladih, nevladinim organizacijama i organizacijama civilnog društva;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslovi građanskih stanja (matične knjige, knjige državljana i birački popisi);</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslovi ovjere potpisa, rukopisa i prijepisa;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslove prijemne kancelarije (pisarnice) i arhivski poslovi;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslovi iz radnih odnosa uposlenih djelatnika;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> izrađuju godišnje analize potreba za obukom i edukacijom djelatnika, izrađuju godišnji programi obuke, organizira izvođenje programa obuka, provodi  ocjena učinka obuke djelatnika svih službi za upravu;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> izrađuju se  i realiziraju planovi, projekti i programi u oblasti za koju je utemeljena;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> osigurava pravo pristupa zainteresiranim građanima administrativnim procedurama sukladno Zakonu o slobodi pristupa informacijama;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju upravni i drugi stručni poslovi u oblasti imovinsko-pravnih odnosa (izvlaštenje, komasacija, arondacija, prodaja neizgrađenog građevinskog zemljišta, utvrđivanje prava vlasništva u svrhu legalizacije objekata, povrat imovine)</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> prati stanje i rješava u prvom stupnju u upravnim stvarima i poduzimaju upravne i druge mjere u oblasti braniteljsko invalidske zaštite, vodi kompletna  evidenciju o korisnicima i provedenim isplatama sukladno zakonu, te vrši administrativna obrada podnesenih zahtjeva korisnika;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> organizira, priprema i provodi zaštita i spašavanje ljudi na području općine;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> izrađuje procjena ugroženosti od prirodnih i drugih nesreća u općini;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> priprema program i predlaže plan zaštite i spašavanja od prirodnih i drugih nesreća u općini;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> prati stanje, priprema za zaštitu i spašavanje i predlažu mjere za poboljšanje organiziranja i osposobljavanja civilne zaštite;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> organizira, izvodi i prati realizaciju obuke građana na provođenju osobne i uzajamne zaštite;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> organizira i koordinira provođenje mjera zaštite i spašavanja iz nadležnosti Općine;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vodi propisana evidencija;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vode poslovi vezani za organizaciju i rad mjesnih zajednica sukladno propisima;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> pripremaju  nacrti i prijedlozi akata koje donose Općinsko vijeće i Općinski načelnik;</i></li>
                            <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše i drugi poslovi  koje joj u zadaću stavi Općinsko vijeće i Općinski načelnik.</i></li>
                        </ul></p>
                    
       </div>
       <div class="col-lg-1 col-md-9 col-sm-12">
            <div class="poveznice">
                @include('inc.weather')
                <div class="card text-center" id="sluzbenici">
                    <div class="card-body" >
                        <h3 class="card-header">Pomoćnik načelnika:</h3></br>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="bi bi-person-fill"> Marija Ivković, mag. prava</i></li></br>
                            <li class="list-group-item"><i class="bi bi-telephone-fill"> +387 34 276 304</i></li></br>
                            <li class="list-group-item"><i class="bi bi-envelope-fill"> maticni.ured@opcinakupres.ba</i></li></br>
                            <li class="list-group-item"><i class="bi bi-envelope-fill"> sluzba.opceuprave@opcinakupres.ba</i></li></br>
                        </ul>
                    </div>
                </div>
            </div>
       </div>
    </div>
   </div>
</section>
    @endsection