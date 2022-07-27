@extends('layouts.main')
    @section('content')
            <!-- Jumbotron-->
    <section class="one">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 d-inline">Načelnik</h1>
                <p class="lead d-inline" id="naslov">Općine Kupres</p>
                <hr class="my-4">    
            </div>
        </div>
    </section>
   <!--Info-->
   <section class="three">
       <div class="container position-relative float-center">
           
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="card">
                        <div class="card-body p-4" id="nacelnik">
                                <div class="row">
                                    <div class="col-5 p-3">
                                        <img src=http://localhost/opcinakupres/public/images/nacelnik.jpg alt="">
                                        <h4 class="pt-5">Osnobne informacije</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>Datum rođenja:</b> 02.02.1960. </li>
                                            <li class="list-group-item"><b>Mjesto rođenja: </b> Kupres</li>
                                            <li class="list-group-item">Na Kupresu završava osnovnoškolsko obrazovanje i pohađa Srednju školu Kupres - Gimnaziju, koju završava 1979. godine</li>
                                            <li class="list-group-item">Odlazi na studij i završava Ekonomski fakultet (1.stupanj) na Sveučilištu u Splitu 1982. godine</li>
                                        </ul>
                                    </div>
                                    <div class="col-7 p-4">
                                        <h4 class="pb-4">Radno iskustvo</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><h5>Ravnatelj</h5><p>/2008 - 2019</br> Centar za socijalnu skrb Kupres, Splitska 5, 80320</p></li>
                                            <li class="list-group-item"><h5>Šef kabineta ministra</h5><p>/2001-2004</br>Ministarstvo rada, zdravstva, socijalne skrbi i prognanih Hercegbosanske županije, Kralja Zvonimira bb, 80240 Tomislavgrad</p></li>
                                            <li class="list-group-item"><h5>Zamnjenik ministra</h5><p>/1997-2001</br>Ministarstvo rada, zdravstva, socijalne skrbi i prognanih Hercegbosanske županije, Kralja Zvonimira bb, 80240 Tomislavgrad</p></li>
                                            <li class="list-group-item"><h5>Vršitelj dužnosti ravnatelja</h5><p>/1996-1997</br>Centar za socijalnu skrb Kupres, Splitska 5, 80320 Kupres</p></li>
                                            <li class="list-group-item"><h5>Pripravnik HVO-a</h5><p>/1992-1995</p></li>
                                            <li class="list-group-item"><h5>Direktor i vlasnik privatnog poduzeća</h5><p>/1988-1992</br>"Staklo commerce" Kupres</p></li>
                                            <li class="list-group-item"><h5>Pripravnički staž</h5><p>/1982</br>"Vitorog promet" Kupres</p></li>
                                        </ul>
                                    </div>
                                </div> 
                            
                        </div>
                </div>
            </div>
       

           <div class="col-lg-1 col-md-9 col-12">
            <div class="poveznice">
                @include('inc.weather')
                    <div class="card text-center" id="sluzbenici">
                        <div class="card-body" >
                            <h3 class="card-header">Kontakt informacije:</h3></br>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-person-fill"> Zdravko Mioč, Općinski načelnik</i></li></br>
                                <li class="list-group-item"><i class="bi bi-phone-fill"> +387 63 343 363</i></li></br>
                                <li class="list-group-item"><i class="bi bi-telephone-fill"> +387 34 276 301</i></li></br>
                                <li class="list-group-item"><i class="bi bi-printer-fill"> +387 34 276 333</i></li></br>
                                <li class="list-group-item"><i class="bi bi-envelope-fill"> opcina.kupres1@tel.net.ba</i></li></br>
                            </ul>
                        </div>
                    </div>
            </div>
       </div>
        </div>
       </div>
 @endsection