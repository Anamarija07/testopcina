@extends('layouts.main')
    @section('content')
            <!-- Jumbotron-->
    <section class="one">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 d-inline">Poduzeća i ustanove</h1>
                <hr class="my-4">    
            </div>
        </div>
    </section>
 
    <!--Poduzeća i ustanove-->

    <section class="three">
        <div class="container position-relative float-center">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="card" id="blogcard1">
                        <img class="card-img-top" src=http://localhost/opcinakupres/public/images/kupreskiRadio.jpg alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Kupreški radio</h5>
                            <p class="card-text">Kupreški radio je regionalna radio postaja čije je sjedište u općini Kupres. Emitira na hrvatskom jeziku.</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#radio">Detalji</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5 ">
                    <div class="card" id="blogcard2">
                        <div class="card-body">
                            <h5 class="card-title">JKP komunalno "Kupres"</h5>
                            <p class="card-text">Održava: vodovod i kanalizaciju, otvorene tržnice (pijace), gradsko zelenilo i čistoću.</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#komunalno">Detalji</a>
                        </div>
                        <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/komunalno.png alt="Card image cap">
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="card" id="blogcard1">
                        <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/polje.jpeg alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">JP Kupreško polje</h5>
                            <p class="card-text">Poljeprivredno poduzeće</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#polje">Detalji</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="card" id="blogcard2">
                        <div class="card-body">
                            <h5 class="card-title">Dječji vrtić Pahuljica</h5>
                            <p class="card-text">Ustanova za odgoj i čuvanje predškolske djece. Namjena dječjeg vrtića je odgoj, briga i čuvanje djece do šest godina starosti.</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#vrtic">Detalji</a>
                        </div>
                        <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/vrtic.jpg alt="Card image cap">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="card" id="blogcard1">
                        <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/dom.jpg alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hrvatski Dom Kupres</h5>
                            <p class="card-text">Javna ustanova tipa doma kulture koji pokriva sve glavne kulturne manifestacije u općini Kupres.</p>
                            <a href="#" class="btn"  data-bs-toggle="modal" data-bs-target="#dom">Detalji</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="card" id="blogcard2">
                        <div class="card-body">
                            <h5 class="card-title">Centar za socijalni rad</h5>
                            <p class="card-text">Osnovna zadaća centra je doprinjeti izgradnji zajednice pružanjem mjera i usluga socijalne zaštite svojim građanima.</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#centar">Detalji</a>
                        </div>
                        <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/centar.jpeg alt="Card image cap">
                    </div>
                </div>
    
                    <div class="col-lg-6 col-md-12 mb-5">
                        <div class="card" id="blogcard1">
                            <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/srednja.jpeg alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Srednja škola Kupres</h5>
                                <p class="card-text">Obrazovni sustav koji uključuje gimnaziju, ugostiteljski, ekonomski i šumarski smjer.</p>
                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#srednja">Detalji</a>
                            </div>
                        </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-5">
                        <div class="card" id="blogcard2">
                            <div class="card-body">
                                <h5 class="card-title">Osnovna škola fra Miroslava Džaje</h5>
                                <p class="card-text">Odgojna i obrazovna ustanova čija je svrha omogućiti učenicima stjecanje znanja, pojmova, umijeća, stavova i navika potrebnih za život i rad.</p>
                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#osnovna">Detalji</a>
                            </div>
                            <img class="card-img-top" src=http://localhost/opcinakupres1/public/images/osnovna.jpeg alt="Card image cap">
                        </div>
                </div>
            </div>
    </div>
</section>


        <!-- Modal -->
<div class="modal fade" id="dom" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-building"></i> Ustanova " Hrvatski dom " Kupres</li>
                    <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i> Don Dominika Stojanovića 3, 80320 Kupres</li>
                    <li class="list-group-item"><i class="bi bi-envelope"></i> hdk.kupres@gmail.com</li>
                    <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274-048</li>
                    <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 276-018 </li>
                    <li class="list-group-item"><i class="bi bi-facebook"><a href="https://hr-hr.facebook.com/hrvatskidom.kupres.7" class="text-decoration-none text-secondary ps-2" target="_blank">Hrvatski dom Kupres</a></i></li>
                </ul>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="polje" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-building"></i> JP Kupreško polje d.o.o.</li>
                    <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i>Zagrebačka 1, 80320 Kupres</li>
                    <li class="list-group-item"><i class="bi bi-envelope"></i>  </li>
                    <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 050 | 063 370 334</li>
                    <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 274 050</li>
                    <li class="list-group-item"><i class="bi bi-facebook"></i> </li>
                </ul>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="srednja" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-building"></i> JU Srednja škola "Kupres"</li>
                    <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i> Splitska 4, Kupres 80320</li>
                    <li class="list-group-item"><i class="bi bi-envelope"></i> sskola-kupres@tel.net.ba</li>
                    <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274-100</li>
                    <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 274-100</li>
                    <li class="list-group-item"><i class="bi bi-globe2"><a href="https://sskupres.edupage.org/" class="text-decoration-none text-secondary ps-2" target="_blank">Srednja škola "Kupres"</a></i></li>
                </ul>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
        </div>
    </div>
    </div>
</div>
    <div class="modal fade" id="osnovna" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building"></i> JU Osnovna škola fra Miroslava Džaje</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i></i> Splitska 10, Kupres 80320</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i> os.kupres@tel.net.ba</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 099</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 274 099</li>
                        <li class="list-group-item"><i class="bi bi-globe2"><a href="https://www.osframiroslavadzajekupres.com/" class="text-decoration-none text-secondary ps-2" target="_blank">Osnovna škola fra Miroslava Džaje</a></i></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="radio" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building"></i> JP Radio Kupres d.o.o.</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i></i>  Don Dominika Stojanovića 3, Kupres 80320</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>  info@kupreskiradio.com</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 866</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 274 631</li>
                        <li class="list-group-item"><i class="bi bi-globe2"><a href="https://www.kupreskiradio.com/" class="text-decoration-none text-secondary ps-2" target="_blank">Kupreški radio</a></i></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="centar" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building"></i> Centar za socijalni rad</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i></i>  Trg hrvatskih vitezova bb, Kupres 80320</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>  socijalno.kupres@tel.net.ba</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 080</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 276 312</li>
                        <li class="list-group-item"><i class="bi bi-globe2"></i> </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="vrtic" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building"></i> JU Dječji vrtić "Pahuljica"</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i>  Kupreške bojne 27, 80320 Kupres</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i> </li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 667</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> </li>
                        <li class="list-group-item"><i class="bi bi-globe2"></i> </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="komunalno" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Kontakt informacije</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building"></i> JKP "Kupres" d.o.o.</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i> Splitska 5, 80320 Kupres</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>  komunalno.kupres@tel.net.ba</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 274 381</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 274 384</li>
                        <li class="list-group-item"><i class="bi bi-facebook"><a href="https://www.facebook.com/komunalno.kupres/" class="text-decoration-none text-secondary ps-2" target="_blank">JKP "Kupres" doo</a></i></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            </div>
        </div>
        </div>
    </div>
    @endsection