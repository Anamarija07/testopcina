<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Službena stranica za Općinu Kupres" />
        <meta name="author" content="Anamarija Dumančić" />
        <title>Općina Kupres</title>
        <!-- Favicon-->
        <link rel="icon" type="image/gif" href={{url('/images/grb.gif')}} />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Naslovna stranica</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#izbornik">Izbornik</a></li>
                        <li class="nav-item"><a class="nav-link" href="#novosti">Novosti</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/okupresu') }}">O Kupresu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><img src={{url('/images/grb.gif')}} width="75" class="me-3" id="grb">Općina Kupres</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Službena stranica</p>
                        <a class="btn btn-primary btn-xl" href="#izbornik">Idi na izbornik</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Izbornik-->
        
        <section class="page-section bg-primary" id="izbornik">

      <div class="row">
        <div class="col-12 col-md-2">
            <div class="hoverizbornik">
              <a class="btn btn-primary ms-5"  href="#novosti" role="button">
                  Novosti
              </a>   
            </div>
        </div>
        <div class="col-12 col-md-2">
          <div class="hoverizbornik">
            
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#sluzba" role="button" aria-expanded="false" aria-controls="collapseExample" id="sluzbe-btn">
                Općinske službe
              </a>
              <div class="collapse" id="sluzba">
        
                <div class="list-group-flush mt-4" id="sjednice">
                    <a href="sluzbazagospodarstvofinancijeiinspekcijskeposlove" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Služba za gospodarstvo, financije i inspekcijeske poslove</a>
                    <a href="sluzbazaprostornouredenjestambeno-komunalneposloveikatastar" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Služba za prostorno uređenje, stambeno-komunalne poslove i katastar</a>
                    <a href="sluzbazadrustvenedjelatnostiopcuupravuimovinsko-pravneposlovepitanjabraniteljaicivilnuzastitu" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Služba za društvene djelatnosti, opću upravu, imovinsko-pravne poslove, pitanja branitelja i civilnu zaštitu</a>
                </div>
            
            </div>
            <script >
                $("#sluzbe-btn").mouseenter(function () {
                    $("#sluzba").fadeIn();
                });
                $("#sluzba").mouseleave(function(){
                    $("#sluzba").fadeOut();
                });
            </script>
            
          </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="hoverizbornik" id="sluzbe-btn">
              <a class="btn btn-primary"  href="opcinskovijece" role="button">
                  Općinsko vijeće
              </a>  
            </div>
        </div>
       <!--Za brisati
        <div class="col-12 col-md-2">
            <div class="hoverizbornik">
              <a class="btn btn-primary" data-bs-toggle="collapse" href="#opcinsko" role="button" aria-expanded="false" aria-controls="collapseExample" id="v-btn">
                  Općinsko vijeće
                </a>
                
                <div class="collapse" id="opcinsko">
          
                  <div class="list-group-flush" id="sjednice">
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Statut Općine</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Sjednice Općinskog vijeća</a>
                      <a href="opcinskovijece" type="button" class="list-group-item list-group-item-action" id="li-izbornik">O općinskom vijeću</a>
                      
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Prava i dužnosti vijećnika</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Sastav općinskog vijeća</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Sjednice Općinskog vijeća</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Poslovnik</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Program rada Općinskog vijeća</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Službeni glasnik ???</a>
                      
                  </div>
              
              </div>
            </div>
            <script >
                $("#v-btn").mouseenter(function () {
                    $("#opcinsko").fadeIn();
                });
                $("#opcinsko").mouseleave(function(){
                    $("#opcinsko").fadeOut();
                });
            </script>
          </div>
        
          <div class="col-12 col-md-2">
            <div class="hoverizbornik">
              <a class="btn btn-primary" data-bs-toggle="collapse" href="#nacelnik" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Općinski načelnik
              </a>
                <div class="collapse" id="nacelnik">
          
                  <div class="list-group-flush" id="sjednice">
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Općinski načelnik * ni ovo neće biti potrebno</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">Ured načelnika</a>
                      <a href="#" type="button" class="list-group-item list-group-item-action" id="li-izbornik">**Dokumenti i pravilnici ću staviti sa desne strane</a>
                  </div>
              
              </div>
            </div>
          </div>-->
        <div class="col-12 col-md-2">
            <div class="hoverizbornik" id="sluzbe-btn">
              <a class="btn btn-primary"  href="opcinskinacelnik" role="button">
                  Općinski načelnik
              </a>  
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="hoverizbornik" id="sluzbe-btn">
              <a class="btn btn-primary"  href="opcinskovijece" role="button">
                  Službeni glasnik
              </a>  
            </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="hoverizbornik" id="sluzbe-btn">
              <a class="btn btn-primary"  href="javnapoduzecaiustanove" role="button">
                  Javna poduzeća i ustanove
              </a>  
            </div>
        </div>
  </div>
        </section>
        
        <!-- Services-->
        <section class="page-section" id="novosti">
          <!--Posts-->
    <section class="one" id="novosti">
          <div class="container">
              <div class="row">
                  <div class="col-md-7 col-12">
                      <!-- Jumbotron-->
                      <div class="jumbotron pt-5 mb-4 ">
                          <h1 class="display-2 d-inline" id="title">Novosti</h1>
                          <p class="lead d-inline" id="naslov">Općine Kupres</p>
                          <hr class="my-4">
                      </div>
                      @if(count($posts)>0)
                          @foreach ($posts as $post)
                      <div class="card">
                          <img src={{ asset('/storage/cover_image/'.$post->cover_image)}} alt="noimage.jpg" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <small>{{$post->created_at->format('d.m.Y.  H:m')}}</small><hr>
                            <p class="card-text">{{$post->caption}}</p>
                            <a href="/opcinakupres1/public/posts/{{$post->id}}" class="btn btn-primary">Pročitaj više</a>
                          </div>
                      </div>
                      @endforeach
                      <div class="d-flex justify-content-center">
                        {{$posts->links("pagination::bootstrap-4")}}
                      </div>
                      @else
                          <p>Rubrika "Novosti" je prazna</p>
                      @endif
                  </div>
                  <div class="col-md-5 col-12">
                      <a href="opcinskovijece" class="text-decoration-none">
                      <div class="card text-white mt-5 mb-3">
                        <div class="card-body" id="glasnik">
                          <h3 class="text-right"><i class="bi bi-newspaper ms-2 me-3"></i>Službeni glasnik</h3>
                        </div>
                      </div>
                     </a>
                      <div class="jumbotron pt-5 mb-4 ">
                          <h1 class="display-6">Obavijesti i javni pozivi</h1>
                          <hr>
                      </div>
                      @if(count($obavijesti)>0)
                          @foreach ($obavijesti as $obavijest)
                      <div class="card">
                          <img src={{ asset('/storage/cover_image/'.$obavijest->cover_image)}} alt="noimage.jpg" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{$obavijest->title}}</h5>
                            <small>{{$obavijest->created_at->format('d.m.Y.  H:m')}}</small><hr>
                            <p class="card-text">{{$obavijest->caption}}</p>
                            <a href="/opcinakupres1/public/obavijesti/{{$obavijest->id}}" class="btn btn-primary">Pročitaj više</a>
                          </div>
                        </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{$obavijesti->links("pagination::bootstrap-4")}}
                        </div>
                      @else
                          <p>Rubrika "Obavijesti" je prazna</p>
                      @endif
                  </div>
              </div>
          </div>
    </section>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
           
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-lg-3 col-sm-6 col-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Općina Kupres">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Općina Kupres</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Trg hrvatskih vitezova">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Općina Kupres</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Spomenik poginulim braniteljima">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Općina Kupres</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Ulaz u park">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Općina Kupres</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-primary text-white mb-5">
           
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
              <div class="row">
                <div class="col-lg-5 ms-5">
                    <h3>Kontakt informacije:</h3>
                    <ul class="list-group list-group-flush me-5">
                        <li class="list-group-item"><i class="bi bi-building"></i> Vukovarska 2</br>80320 Kupres, Hercegbosanska županija</br>Bosna i Hercegovina</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>	opcina.kupres1@tel.net.ba</li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>	maticni.ured@opcinakupres.ba</li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i>	+387 34 276 347</li>
                        <li class="list-group-item"><i class="bi bi-printer"></i> +387 34 276 333</li>
                    </ul>
                </div>
                <div class="col-md-9 col-lg-6 ms-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2870.390005058732!2d17.274745414893374!3d43.99266293843213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475fbd0e71e1fa7d%3A0x71957325b7475964!2sOp%C4%87ina%20Kupres!5e0!3m2!1shr!2sba!4v1643105867530!5m2!1shr!2sba" width="550px" height="320px" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
                </div>
            </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=" bg-dark py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Općina Kupres</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
