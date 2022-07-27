 <!-- Navigation-->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/') }}"><img src=http://localhost/opcinakupres/public/images/grb.gif alt="" class="grb">Općina Kupres</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/#novosti') }}">Novosti</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Izbornik
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('/sluzbazagospodarstvofinancijeiinspekcijskeposlove') }}">Služba za gospodarstvo,<br> financije i inspekcijeske poslove</a>
                  <a class="dropdown-item" href="{{ url('/sluzbazaprostornouredenjestambeno-komunalneposloveikatastar') }}">Služba za prostorno uređenje,<br> stambeno-komunalne poslove i katastar</a>
                  <a class="dropdown-item" href="{{ url('/sluzbazadrustvenedjelatnostiopcuupravuimovinsko-pravneposlovepitanjabraniteljaicivilnuzastitu') }}">Služba za društvene djelatnosti, opću upravu, <br>imovinsko-pravne poslove, <br>pitanja branitelja i civilnu zaštitu</a>
                  <a class="dropdown-item" href="{{ url('/opcinskovijece') }}">Općinsko vijeće</a>
                  <a class="dropdown-item" href="{{ url('/opcinskinacelnik') }}">Općinski načelnik</a>
                  <a class="dropdown-item" href="{{ url('/opcinskovijece') }}">Službeni glasnik</a>
                  <a class="dropdown-item" href="{{ url('/javnapoduzecaiustanove') }}">Javna poduzeća i ustanove</a>
                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/okupresu') }}">O Kupresu</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('#contact') }}">Kontakt</a>
            </li>
          </ul>
        </div>
      </nav>