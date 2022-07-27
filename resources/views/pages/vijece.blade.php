@extends('layouts.main')
@section('content')
    <!-- Jumbotron-->
    <section class="one">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 d-inline">Općinsko vijeće</h1>
                <hr class="my-4">
            </div>
        </div>
    </section>
    <!--news-->
    <section class="three">
        <div class="container position-relative float-center">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    @include('inc.messages')
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="ov-heading">
                                <a class="btn collapsed" data-toggle="collapse" data-target="#collapseSjednice"
                                    aria-expanded="false" aria-controls="collapseSjednice">
                                    <h5 class="mb-0">Službeni glasnik Općine Kupres</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div id="collapseSjednice" class="collapse" aria-labelledby="ov-heading"
                                data-parent="#accordion">
                                <div class="card-body">

                                    @if (count($glasnici) > 0)
                                        @foreach ($glasnici as $glasnik)
                                            <div class="card-body">
                                                <div class="card-body" id="card-sg">
                                                    <a class="btn" role="button"
                                                        href="storage/glasnici/{{ $glasnik->documents }}"
                                                        onclick="window.open('storage/glasnici/{{ $glasnik->documents }}')"
                                                        id="btn-sg" download="{{ $glasnik->documents }}"><i
                                                            class="bi bi-cloud-arrow-down"></i>
                                                        {{ $glasnik->title }}
                                                    </a>
                                                </div>
                                            </div>
                                            @if (!Auth::guest())
                                                <a href="/opcinakupres1/public/glasnici/{{ $glasnik->id }}/edit"
                                                    class="btn btn-info" id="btn-edit">Uredi</a>
                                                {!! Form::open(['action' => ['App\Http\Controllers\GlasnikController@destroy', $glasnik->id], 'method' => 'POST', 'class' => 'pull-right', 'id' => 'btn-danger']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Izbriši', ['class' => 'btn btn-danger ms-3 me-3', 'onclick' => "return confirm('Jeste li sigurno da želite obrisati glasnik?')"]) }}
                                                {!! Form::close() !!}
                                            @endif
                                        @endforeach
                                    @else
                                        <p>Nije postavljen Službeni glasnik Općine Kupres</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ov-heading">
                                <a class="btn collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    <h5 class="mb-0">Sjednice Općinskog Vijeća</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="ov-heading"
                                data-parent="#accordion">
                                <div class="card-body">
                                    @if (count($sjednice) > 0)
                                        @foreach ($sjednice as $sjednica)
                                            @php $sjednica->odluke = json_decode($sjednica->odluke); @endphp

                                            <div class="card">
                                                <div class="card-header" id="ov-heading1">
                                                    <a class="btn collapsed" data-toggle="collapse"
                                                        data-target="#{{ $sjednica->id }}" aria-expanded="false"
                                                        aria-controls="{{ $sjednica->id }}">
                                                        <h6 class="mb-0">{{ $sjednica->title }} <i
                                                                class="bi bi-chevron-down" id="prilog-slika"></i></h6>

                                                    </a>
                                                </div>
                                                <div id="{{ $sjednica->id }}" class="collapse"
                                                    aria-labelledby="ov-heading">
                                                    <div class="card-body">
                                                      @foreach($sjednica->odluke as $odluka)
                                                        <a class="btn m-2" role="button"
                                                        href="{{ route('download', $odluka) }}" id="btn-sg"
                                                            download="{{ $odluka }}"><i
                                                                class="bi bi-cloud-arrow-down"></i>
                                                                ({{ $odluka }})
                                                        </a>
                                                        @endforeach
                                                        @if (!Auth::guest())
                                                            <a href="/opcinakupres1/public/sjednice/{{ $sjednica->id }}/edit"
                                                                class="btn btn-info" id="btn-edit">Uredi</a>
                                                            {!! Form::open(['action' => ['App\Http\Controllers\SjednicaController@destroy', $sjednica->id], 'method' => 'POST', 'class' => 'pull-right', 'id' => 'btn-danger']) !!}
                                                            {{ Form::hidden('_method', 'DELETE') }}
                                                            {{ Form::submit('Izbriši', ['class' => 'btn btn-danger ms-3 me-3', 'onclick' => "return confirm('Jeste li sigurno da želite obrisati sadržaj odabrane sjednica?')"]) }}
                                                            {!! Form::close() !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Nema unesene sjednice</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ov-heading">
                                <a class="btn" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0">Općinsko vijeće</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="ov-heading"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Općinsko vijeće u okviru svoje mjerodavnosti:
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-chevron-right"> donosi Statut Općine
                                                dvotrećinskom većinom glasova;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke i druge
                                                opće akte kojima uređuje pitanja iz samoupravnoga djelokruga Općine;</i>
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi Proračun Općine,
                                                godišnje izvješće o izvršenju Proračuna kao i odluku o privremenom
                                                financiranju sukladno zakonu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">utvrđuje općinsku
                                                politiku u okviru mjerodavnosti Općine i prati njeno ostvarivanje;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi razvojne,
                                                prostorne i urbanističke planove i programe, te provedbene planove,
                                                uključujući zoniranje;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi propise o
                                                porezima, pristojbama, naknadama i doprinosima Općine sukladno zakonu;</i>
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                upravljanju i raspolaganju imovinom Općine;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                zaduživanju Općine, o raspisivanju javnoga zajma i davanju jamstva sukladno
                                                zakonu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi programe uređenja
                                                gradskog građevinskog zemljiša;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi plan korištenja
                                                javnih površina;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                ustrojstvu mjesne samouprave i nazivima ulica, trgova i naseljenih
                                                mjesta;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                udruživanju Općine u saveze i druge oblike organiziranja, te o trajnom
                                                uspostavljanju prijateljske i druge suradnje s lokalnim i regionalnim
                                                zajednicama drugih država;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                proglašenju praznika Općine;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                priznanjima i nagradama Općine;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi odluke o
                                                raspisivanju referenduma i sazivanju zborova mjesnih zajednica;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">bira i razrješava
                                                predsjedatelja i zamjenika predsjedatelja Općinskog vijeća;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">osniva radna tijela
                                                Općinskog vijeća te bira i razrješava njihove članove;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">imenuje, bira i
                                                razrješava druge osobe određene zakonom, Statutom i odlukama, te daje
                                                suglasnost na imenovanja, izbor i razrješenja kada je to propisano;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">osniva stručnu službu
                                                Općinskoga vijeća;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">osniva poduzeća i
                                                ustanove i druge pravne osobe za obavljanje komunalnih, društvenih,
                                                gospodarskih i drugih djelatnosti od interesa za Općinu, te odlučuje o
                                                njihovim statusnim promjenama sukladno zakonu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">odlučuje o prestanku rada
                                                ustanova i drugih pravnih osoba sukladno zakonu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">odlučuje o prijenosu i
                                                preuzimanju osnivačkih prava sukladno Statutu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">razmatra godišnje
                                                izvješće o provođenju općinske politike i aktivnostima općinskoga
                                                načelnika;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">pokreće i razmatra
                                                inicijativu za pokretanje postupka opoziva općinskog načelnika i donosi
                                                odluke o pokretanju postupka opoziva općinskoga načelnika;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">ocjenjuje rad ustanova i
                                                kvalitet usluga u djelatnosti zdravstva, socijalne zaštite, obrazovanja,
                                                kulture i sporta, najmanje jednom godišnje, te osigurava financijska
                                                sredstava za unapređenje njihova rada i kvaliteta usluga sukladno potrebama
                                                stanovništva i mogućnostima Općine;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi pojedinačne i
                                                druge akte iz samoupravnog djelokruga sukladno zakonu i ovom statutu;</i>
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">analizira stanje javnoga
                                                reda i mira, sigurnost ljudi i imovine najmanje jednom godišnje, te predlaže
                                                mjere prema mjerodavnim tijelima;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">utvrđuje smjernice za
                                                vođenje kadrovske politike sukladno zakonu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi poslovnik o
                                                svome radu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">donosi plan obrane
                                                Općine i svoj plan obrane;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">utvrđuje koeficijente
                                                za obračun plaća za:</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">općinskoga načelnika,
                                                državne službenike i namještenike u općinskome tijelu državne službe i
                                                Stručnoj službi Općinskoga vijeća,
                                                općinskoga pravobranitelja i zamjenika općinskoga pravobranitelja i
                                                državne službenike i namještenike u Općinskome pravobraniteljstvu;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">suradnja sa vjerskim
                                                zajednicama;</i></li>
                                        <li class="list-group-item"><i class="bi bi-chevron-right">te obavlja i druge
                                                poslove utvrđene zakonom i Statutom.</i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ov-heading">
                                    <a class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">Statut Općinskog vijeća</h5>
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="ov-heading"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Vijećnik je predstavnik građana u OV, izabran neposrednim i tajnim glasovanjem, sa
                                        mandatom, pravima i dužnostima utvrđenim u ustavu, zakonu i Statutu.
                                        Prava i dužnosti vijećnika (U prilogu)
                                        <div class="card">
                                            <div class="card-header" id="ov-heading1">
                                                <a class="btn collapsed" data-toggle="collapse" data-target="#collaps4"
                                                    aria-expanded="false" aria-controls="collaps4">
                                                    <h6 class="mb-0">Prilog<i class="bi bi-chevron-down"
                                                            id="prilog-slika"></i></h6>
                                                </a>
                                            </div>
                                            <div id="collaps4" class="collapse" aria-labelledby="ov-heading">
                                                <div class="card-body">
                                                    <div class="card-body">
                                                        <a class="btn" role="button"
                                                            href="docs/Statut Općine Kupres.pdf" id="btn-sg"
                                                            download="Statut Općine Kupres"><i
                                                                class="bi bi-cloud-arrow-down"></i>
                                                            Statut Općine Kupres
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ov-heading">
                                    <a class="btn collapsed" data-toggle="collapse" data-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <h5 class="mb-0">Poslovnik o radu Općinskog vijeća</h5>
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="ov-heading"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">I. OPĆE ODREDBE
                                                <div class="card">
                                                    <div class="card-header" id="ov-heading1">
                                                        <a class="btn collapsed" data-toggle="collapse"
                                                            data-target="#collapse1" aria-expanded="false"
                                                            aria-controls="collapse1">
                                                            <h6 class="mb-0">Članak 1.<i
                                                                    class="bi bi-chevron-down" id="prilog-slika"></i></h6>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="collapse"
                                                        aria-labelledby="ov-heading">
                                                        <div class="card-body">
                                                            Općinsko vijeće Kupres (udaljnjem tekstu: OV) utemeljuje se,
                                                            organizira i radi u skladu sa ustavom, zakonom, Statutom općine
                                                            Kupres (u daljnjem tekstu: Statut) i Poslovnikom Općinskog
                                                            vijeća Kupres (u daljnjem tekstu: Poslovnik).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="ov-heading1">
                                                        <a class="btn collapsed" data-toggle="collapse"
                                                            data-target="#collapse2" aria-expanded="false"
                                                            aria-controls="collapse2">
                                                            <h6 class="mb-0">Članak 2.<i
                                                                    class="bi bi-chevron-down" id="prilog-slika"></i></h6>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="collapse"
                                                        aria-labelledby="ov-heading">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li class="list-group-item">Ovim Poslovnikom uređuju se:
                                                                <li class="list-group-item">Prava i obveze vijećnika;
                                                                <li class="list-group-item">Utemeljenje i organizacija OV;
                                                                <li class="list-group-item">Način rada OV;
                                                                <li class="list-group-item">Akti OV i postupak njihovog
                                                                    donošenja;
                                                                <li class="list-group-item">Javnost rada OV;
                                                                <li class="list-group-item">Postupak kandidiranja, izbora,
                                                                    imenovanja i razrješenja;
                                                                <li class="list-group-item">Odnosi OV i općinskih organa
                                                                    izvršne vlast;
                                                                <li class="list-group-item">Druga pitanja koja su od
                                                                    značaja za rad OV
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="ov-heading">
                                        <a class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <h5 class="mb-0">Povjerenstva Općinskog vijeća</h5>
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="ov-heading"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo1"
                                                        id="povjerenstvo">1. Povjerenstvo za izbor i imenovanje</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo2"
                                                        id="povjerenstvo">2. Povjerenstvo za Statutarna pitanja, Poslovnik i
                                                        propise</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo3"
                                                        id="povjerenstvo">3. Povjerenstvo za proračun financije i ekonomska
                                                        pitanja</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo4"
                                                        id="povjerenstvo">4. Povjerenstvo za zaštitu ljudskih prava i
                                                        predstavke<br> i pritužbe građana</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo5"
                                                        id="povjerenstvo">5. Povjerenstvo za mjesne zajednice i suradnju sa
                                                        općinama<br> i gradovima i nevladinim udrugama</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo6"
                                                        id="povjerenstvo">6. Povjerenstvo za društveni nadzor</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo7"
                                                        id="povjerenstvo">7. Povjerenstvo za zaštitu okoliša kulturnog i
                                                        <br> prirodnog nasljeđa</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo8"
                                                        id="povjerenstvo">8. Povjerenstvo za odnose sa vjerskim
                                                        zajednicama</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo9"
                                                        id="povjerenstvo">9. Povjerenstvo za pitanje branitelja i
                                                        stradalnika <br>Domovinskog rata</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo10"
                                                        id="povjerenstvo">10. Povjerenstvo za šport i pitanja mladih</a>
                                                </li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo11"
                                                        id="povjerenstvo">11. Povjerenstvo za poslove iz stambenih
                                                        oblasti</a></li>
                                                <li class="list-group-item"><a href="#" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#povjerenstvo12"
                                                        id="povjerenstvo">12. Povjerenstvo za jednakopravnost spolova</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="ov-heading">
                                        <a class="btn collapsed" data-toggle="collapse" data-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            <h5 class="mb-0">Program rada OV</h5>
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="ov-heading"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Programi rada Općinskog vijeća Kupres (U prilogu):
                                            <div class="card">
                                                <div class="card-header" id="ov-heading1">
                                                    <a class="btn collapsed" data-toggle="collapse"
                                                        data-target="#collapse5" aria-expanded="false"
                                                        aria-controls="collapse5">
                                                        <h6>Prilog <i class="bi bi-chevron-down" id="prilog-slika"></i>
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div id="collapse5" class="collapse" aria-labelledby="ov-heading">
                                                    <div class="card-body">
                                                        <a class="btn" role="button"
                                                            href="docs/Program rada Općinskog vijeća.pdf" id="btn-sg"
                                                            download="Program rada Općinskog vijeća"><i
                                                                class="bi bi-cloud-arrow-down"></i>
                                                            Program rada Općinskog vijeća
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" id="ov-heading">
                                    <a class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">Etički kodeks izabranih zvaničnika</h5>
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="ov-heading"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Etički kodeks izabranih zvaničnika nalazi se u prilogu
                                        <div class="card">
                                            <div class="card-header" id="ov-heading1">
                                                <a class="btn collapsed" data-toggle="collapse" data-target="#collaps4"
                                                    aria-expanded="false" aria-controls="collaps4">
                                                    <h6 class="mb-0">Prilog<i class="bi bi-chevron-down"
                                                            id="prilog-slika"></i></h6>
                                                </a>
                                            </div>
                                            <div id="collaps4" class="collapse" aria-labelledby="ov-heading">
                                                <div class="card-body">
                                                    <div class="card-body">
                                                        <!--
                                    <a class="btn" role="button" href="docs/Statut Općine Kupres.pdf" id="btn-sg"
                                     download="Statut Općine Kupres"><i class="bi bi-cloud-arrow-down"></i>
                                     Statut Općine Kupres
                                   </a>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-1 col-md-9 col-sm-12">
                    <div class="poveznice">
                        @include('inc.weather')
                        <div class="card text-center" id="sluzbenici">
                            <div class="card-body">
                                <h3 class="card-header">Kontakt informacije:</h3></br>
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="bi bi-person-fill"> Zoran Mišić, predsjednik
                                            Općinskog vijeća</i></li></br>
                                    <li class="list-group-item"><i class="bi bi-person-fill"> Zoran Lovrić, zamjenik
                                            predsjednika Općinskog vijeća</i></li></br>
                                    <li class="list-group-item"><i class="bi bi-telephone-fill"> +387 34 276 324</i></li>
                                    </br>
                                    <li class="list-group-item"><i class="bi bi-envelope-fill">
                                            opcinsko.vijece.kupres@tel.net.ba</i></li></br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--Modal-->
        <!-- Modal -->
        <div class="modal fade" id="povjerenstvo1" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Mišić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Lovrić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo2" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Perica Romić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Lovrić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Slaven Malikanović</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Marijan Rebrina</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Miro Lovrić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo3" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Marijan Rebrina</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Toni Šimić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Valentina Lozančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ružica Jaman</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Perica Romić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="povjerenstvo4" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Dušan Trifunović</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Safet Pilić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Šimić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ana Vukadin</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Ćosić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo5" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Renata Mračajac</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Suzana Lozančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Perica Romić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Pašalić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ante Galić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo6" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Vedrana Jurič</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Bulut</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Lovrić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Antonija Raič</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ilija Jezidžić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo7" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Mišić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Jozo Keškić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Valentina Lozančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ante Galić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Miro Papić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="povjerenstvo8" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Mišić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Jozo Keškić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Josip Raštegorac</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Ćosić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Antonija Raič</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="povjerenstvo9" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Marijan Rebrina</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Miro Lovrić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Bulut</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Marko Lovrić-Pobro</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ilija Jezidžić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="povjerenstvo10" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Safet Pilić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ivan Šimić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Jozo Ivić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Biljana Dumančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ilija Svalina</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="povjerenstvo11" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Suzana Lozančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Vedrana Jurič</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Zoran Lovrić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Miro Papić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Ante Galić</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="povjerenstvo12" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Članovi Povjerenstva</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Suzana Lozančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Vedrana Jurič</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Antonija Raič</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Biljana Dumančić</li>
                                <li class="list-group-item"><i class="bi bi-person-fill"></i> Valentina Lozančić</li>
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
