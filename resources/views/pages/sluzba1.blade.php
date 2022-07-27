@extends('layouts.main')
    @section('content')
        
    <!-- Jumbotron-->
    <section class="one">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 d-inline lead">Služba za gospodarstvo, financije i inspekcijske poslove</h1>
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
                                U  Službi za gospodarstvo, financije i inspekcijske poslove osigurava se izvršavanje zakona, podzakonskih akata i drugih propisa iz oblasti  poduzetništva, poljoprivrede, obrta, trgovine, turizma i ugostiteljstva;
                                    <ul class="list-group">
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi se prvostupanjski upravni postupak i donose pojedinačni upravni akti u navedenim oblastima;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše inspekcijski poslovi u oblasti trgovine,  turizma, ugostiteljstva, urbanizma , graditeljstva i komunalne djelatnosti;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju se poslovi iz nadležnosti komunalnog redarstva;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi propisani postupak u cilju davanja u zakup i raspolaganja poljoprivrednim zemljištem;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provodi se postupak utvrđivanja minimalno-tehničkih uvjeta opremljenosti poslovnih prostora za obavljanje gospodarske djelatnosti;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> uspostavlja, vodi i ažurira propisana evidencija i registri te provodi postupak izdavanja uvjerenja iz djelokruga službe;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju se upravni i drugi stručni poslovi koji se odnose na planiranje, praćenje i izvješćivanje o izvršenju Proračuna;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vode se računovodstveni i knjigovodstveni poslovi, poslovi bankarskog sustava, sustava plaćanja i platni promet;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vodi se općinska riznica i svi poslovi vezani za poslovanje riznice Općine;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> obavljaju poslovi interne revizije;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> pripremaju se propisi i drugi akti iz djelokruga službe koje podnosi na usvajanje Općinskom vijeću i Općinskom načelniku;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> prati stanje i predlažu mjere za poboljšanje stanja u javnim poduzećima čiji je osnivač općina;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> daju mišljenja i sugestije kod izrade propisa koje usvajaju  nadležna tijela Županije i Federacije;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> pripremaju se i dostavljaju analize i studije;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> pripremaju se i dostavljaju informacije o eksternim aktima;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše se aktivnosti vezano za koordinaciju i rad Općinskog razvojnog tima (ORT), partnerske grupe i drugih tijela u svim fazama strateškog planiranja sukladno Metodologiji za integrirano  planiranje razvoja;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> prikupljaju se informacije o eksternom financiranju razvojnih programa i projekata iz domaćih i inozemnih izvora;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> provode se statistička istraživanja u oblastima iz svoje nadležnosti sukladno Programu statističkih istraživanja od interesa za Federaciju BiH;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right">  izrađuju se informacije, analize, izvješća i drugi stručni materijali iz svog djelokruga;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> ostvaruje suradnju s mjesnim zajednicama, udruženjima građana i nevladinim organizacijama u cilju izrade informativnih i strateških dokumenata iz djelokruga Službe;</i></li>
                                        <li class="list-group-item" id="lista"><i class="bi bi-chevron-right"> vrše i drugi poslovi koje joj u zadaću stavi Općinsko vijeće i Općinski načelnik.</i></li>
                                    </ul>
                            </p>
                        </div>
                    
           <div class="col-lg-1 col-md-9 col-sm-12">
                <div class="poveznice">
                    @include('inc.weather')
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body" >
                            <h3 class="card-header">Pomoćnik načelnika:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Goran Dizdar, dipl.oec.  (šef službe)</i></li></br>
                                <li class="list-group-item"><i class="bi bi-telephone-fill"> +387 34 276 305</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> gospodarstvoifinancije@opcinakupres.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body">
                            <h3 class="card-header">Kontakt:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> financije@opcinakupres.ba</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> gospodarstvo@opcinakupres.ba</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> poljoprivreda@opcinakupres.ba</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> inspekcija@opcinakupres.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
                    <!--
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body">
                            <h3 class="card-header">Službenici:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Jelena Lozančić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Marija Ravančić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Ružica Jaman</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> financije@opcinakupres.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body" >
                            <h3 class="card-header">Službenici:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Josip Čolić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Mirko Šimić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> gospodarstvo@opcinakupres.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body">
                            <h3 class="card-header">Službenici:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Dragun Dumančić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Vesna Jurič</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Ivan Pašalić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> poljoprivreda@opcinakupres.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body" >
                            <h3 class="card-header">Službenici:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Niko Ivić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-person-fill"> Miro Pašalić</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> inspekcija@opcinakupres.ba </i></li></br>
                            </ul>
                        </div>      
                    </div>
                -->
                </div>
           </div>
        </div>
       </div>
   </section>
     
@endsection
