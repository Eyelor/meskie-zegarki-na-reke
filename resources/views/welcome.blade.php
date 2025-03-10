<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Męskie Zegarki Na Rękę</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="gora-strony">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#gora-strony"><img src="{{ asset('assets/img/navbar-logo.svg') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#o-nas">O nas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#uslugi">Usługi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#oferta">Oferta</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Strona domowa</a></li>
                            @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Logowanie</a></li>

                                @if (Route::has('register'))
                                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Rejestracja</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Witaj w Świecie Zegarków!</div>
                <div class="masthead-heading text-uppercase">Z Nami Znajdziesz Swój Ideał</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#uslugi">Rozejrzyj Się</a>
            </div>
            <div class="slider-dots">
                <span class="dot active" onclick="changeBackground(0)"></span>
                <span class="dot" onclick="changeBackground(1)"></span>
                <span class="dot" onclick="changeBackground(2)"></span>
                <span class="dot" onclick="changeBackground(3)"></span>
            </div>
        </header>
        <!-- O nas-->
        <section class="page-section" id="o-nas">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">O nas</h2>
                    <h3 class="section-subheading text-muted">Zegarki od zawsze były nam bliskie.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/o-nas/1.jpg') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Na początku był...</h4>
                                <h4 class="subheading">Lombard</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nasza historia sięga daleko wstecz, gdy jako skromny sklep rodzinny specjalizowaliśmy się w sprzedaży różnorodnych przedmiotów używanych. Jednak los zgotował nam wyjątkową okazję, która stała się przełomem w naszej drodze. W trakcie przeglądania dostarczonych przedmiotów natrafiliśmy na zapomniany zegarek męski. To odkrycie wzbudziło w nas nową pasję, dając początek niezwykłej transformacji Lombardu.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/o-nas/2.jpg') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Od inspiracji</h4>
                                <h4 class="subheading">do działania</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Inspirowani tym znaleziskiem, postanowiliśmy rozszerzyć naszą ofertę o ekskluzywne zegarki męskie. Lombard przekształcił się w wyjątkowe miejsce, dedykowane miłośnikom eleganckich czasomierzy. Nawiązaliśmy współpracę z renomowanymi producentami, starannie selekcjonując najwyższej jakości modele, które spełniają najwyższe standardy oczekiwane przez naszych wymagających klientów.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/o-nas/3.jpg') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Nieustanny rozwój</h4>
                                <h4 class="subheading">prowadzący do sukcesu</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dzięki naszemu nieustannemu poszerzaniu asortymentu, Lombard stał się prawdziwym rajem dla pasjonatów zegarków męskich. Naszym klientom oferujemy szeroką gamę luksusowych i designerskich modeli, które podkreślają indywidualny styl i elegancję noszącego. Każdy zegarek, który oferujemy, posiada swoją unikalną historię i wyjątkowe cechy, które przyciągają uwagę klientów, czyniąc Lombard synonimem niezawodności i wyjątkowości.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/o-nas/4.jpg') }}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Poprzez profesjonalizm</h4>
                                <h4 class="subheading">na szczyt</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dzisiaj Lombard to nie tylko sklep z zegarkami męskimi, ale również oaza pasji i wiedzy. Nasi eksperci, dzieląc się swoją fachowością, nie tylko pomagają naszym klientom w dokonaniu odpowiedniego wyboru, ale także służą poradami dotyczącymi pielęgnacji zegarków oraz oferują profesjonalne usługi naprawcze. Lombard to nie tylko miejsce transakcji, ale przede wszystkim społeczność zegarmistrzów i pasjonatów, którzy wspólnie tworzą wyjątkową atmosferę tego miejsca.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">
                                    <div class="timeline-image">
                                        <h4>
                                            Poznaj
                                            <br />
                                            Nas
                                            <br />
                                            Lepiej!
                                        </h4>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('login') }}">
                                    <div class="timeline-image">
                                        <h4>
                                            Zaloguj się
                                            <br />
                                            <br />
                                            Po więcej!
                                        </h4>
                                    </div>
                                </a>
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </section>
        <!-- Usługi-->
        <section class="page-section" id="uslugi">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Usługi</h2>
                    <h3 class="section-subheading text-muted">Oferujemy szeroką paletę usług które pozwolą miłośnikom zegarków załatwić wszystko w jednym miejscu.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4 class="my-3">Handel</h4>
                        <p class="text-muted">Uważasz że nadszedł czas na zmiany w twojej kolekcji? Dobrze trafiłeś. Umożliwiamy zakup bardzo szerokiej gamy zegarków męskich oraz ich odsprzedaż od klienta po wcześniejszej wycenie.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-screwdriver-wrench fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4 class="my-3">Naprawa</h4>
                        <p class="text-muted">Na zegarkach znamy się nie od dziś. U nas wymienisz części, wypolerujesz szkiełko, uszczelnisz zegarek, a to tylko niewielka część usług naprawczych jakie świadczymy.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-gem fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4 class="my-3">Specjalne Usługi</h4>
                        <p class="text-muted">Chciałbyś zrobić coś nietuzinkowego ze swoim zegarkiem? Na przykład dodać dodatkowe elementy. A może szukasz jakiegoś modelu, który jest ciężko dostępny? Jeżeli nikt inny nie był w stanie ci pomóc, my to zrobimy.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Oferta Grid-->
        <section class="page-section" id="oferta">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Oferta</h2>
                    <h3 class="section-subheading text-muted">W naszej ofercie znajdują się najbardziej wyszukane zegarki z których na pewno będziesz zadowolony.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Oferta item 1-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal1">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/1.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">Diesel</div>
                                <div class="oferta-caption-subheading text-muted">MR. DADDY</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Oferta item 2-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal2">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/2.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">Adriatica</div>
                                <div class="oferta-caption-subheading text-muted">Multifunction</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Oferta item 3-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal3">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/3.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">Lorus</div>
                                <div class="oferta-caption-subheading text-muted">Chronograph</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Oferta item 4-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal4">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/4.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">G-SHOCK</div>
                                <div class="oferta-caption-subheading text-muted">Mudmaster Carbon</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Oferta item 5-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal5">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/5.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">Daniel Wellington</div>
                                <div class="oferta-caption-subheading text-muted">Iconic Motion Silver</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Oferta item 6-->
                        <div class="oferta-item">
                            <a class="oferta-link" data-bs-toggle="modal" href="#ofertaModal6">
                                <div class="oferta-hover">
                                    <div class="oferta-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/oferta/6.jpg') }}" alt="..." />
                            </a>
                            <div class="oferta-caption bg-primary">
                                <div class="oferta-caption-heading">Tommy Hilfiger</div>
                                <div class="oferta-caption-subheading text-muted">Daniel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Kontakt-->
        <section class="page-section" id="kontakt">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Skontaktuj się z nami</h2>
                    <h3 class="section-subheading text-muted">Jeżeli chcesz się czymś z nami podzielić lub masz pytanie, nie krepuj się. Postaramy się jak najszybciej odpowiedzieć.</h3>
                </div>
                <!-- Formularz -->
                <form id="kontaktForm" action="mailto:s97641@pollub.edu.pl" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="imie" type="text" placeholder="Twoje Imie *"/>
                                <div class="invalid-feedback">Imie nie jest poprawne.</div>
                                <div class="invalid-feedback empty">Imie jest wymagane.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Twój Email *"/>
                                <div class="invalid-feedback">Email nie jest poprawny.</div>
                                <div class="invalid-feedback empty">Email jest wymagany.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="telefon" type="tel" placeholder="Twój Telefon *"/>
                                <div class="invalid-feedback">Numer telefonu nie jest poprawny.</div>
                                <div class="invalid-feedback empty">Numer telefonu jest wymagany.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="wiadomosc" placeholder="Twoja Wiadomość *"></textarea>
                                <div class="invalid-feedback">Wiadomość jest za długa.</div>
                                <div class="invalid-feedback empty">Wiadomość jest wymagana.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Przesłanie formularza powiodło się!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Błąd wysyłania wiadomości!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Wyślij Wiadomość</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Jakub Kopeć 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/pollub_lublin" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/politechnikalubelska/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/school/politechnikalubelska/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="{{ url('/polityka-prywatnosci') }}" target="_blank">Polityka Prywatności</a>
                        <a class="link-dark text-decoration-none" href="{{ url('/warunki-korzystania') }}" target="_blank">Warunki Korzystania</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Oferta Modals-->
        <!-- Oferta item 1 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek Diesel MR. DADDY</h2>
                                    <p class="item-intro text-muted">Imponujący, charakterystyczny, masywny, elegancki, funkcjonalny, solidny i stylowy czasomierz o unikalnym designie.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/1.jpg') }}" alt="..." />
                                    <p>Zegarek Diesel Mr. Daddy to masywny czasomierz o unikalnym designie, łączący elementy militarno-industrialne ze sportowym akcentem. Posiada chronograf, datownik, alarm, czytelną tarczę z podwskaźnikami oraz jest wodoszczelny, co czyni go nie tylko stylowym dodatkiem, ale także funkcjonalnym narzędziem na nadgarstku.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            Diesel
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            MR. DADDY
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta item 2 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek Adriatica Multifunction</h2>
                                    <p class="item-intro text-muted">Stylowy, precyzyjny i funkcjonalny czasomierz o wysokiej jakości wykonania.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/2.jpg') }}" alt="..." />
                                    <p>Zegarek Adriatica Multifunction to elegancki i wszechstronny czasomierz, który poza precyzyjnym wskazywaniem czasu oferuje również dodatkowe funkcje takie jak mierzenie czasu w różnych strefach, daty i chronometraż. Jest to idealny wybór dla osób ceniących nie tylko estetykę, ale także praktyczność i funkcjonalność w jednym zegarku.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            Adriatica
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            Multifunction
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta item 3 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek Lorus Chronograph</h2>
                                    <p class="item-intro text-muted">Stylowy, precyzyjny, funkcjonalny i nowoczesny czasomierz, który zapewnia niezawodność, elegancję i doskonałą wydajność.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/3.jpg') }}" alt="..." />
                                    <p>Zegarek Lorus Chronograph to połączenie elegancji i wydajności, z doskonałym mechanizmem chronografu, który umożliwia precyzyjne mierzenie czasu, oraz nowoczesnym designem, który doskonale komponuje się z różnymi stylizacjami. Jest to niezawodny i stylowy czasomierz, który z pewnością przyciągnie uwagę swoim wyglądem i funkcjonalnością.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            Lorus
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            Chronograph
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta item 4 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek G-SHOCK Mudmaster Carbon</h2>
                                    <p class="item-intro text-muted">Niezwykle wytrzymały, innowacyjny i stylowy czasomierz, który doskonale radzi sobie w ekstremalnych warunkach, charakteryzujący się lekkością, niezawodnością i elegancją.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/4.jpg') }}" alt="..." />
                                    <p>ZEGAREK G-SHOCK Mudmaster Carbon to zaawansowane technologicznie, ultratrwałe urządzenie zegarmistrzowskie, idealne dla osób poszukujących niezawodnego partnera do wyzwań i przygód, zapewniającego nie tylko precyzyjny czas, ale także wyjątkowy styl i komfort noszenia. Ten zegarek doskonale łączy innowacyjne rozwiązania, takie jak wzmocniona konstrukcja węglowa, z niezawodnymi funkcjami chronografu, stopera, kompasu i alarmu, co czyni go nieodzownym narzędziem dla aktywnych osób ceniących doskonałą jakość.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            G-SHOCK
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            Mudmaster Carbon
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta item 5 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek Daniel Wellington Iconic Motion Silver</h2>
                                    <p class="item-intro text-muted">Elegancki, klasyczny, minimalistyczny, precyzyjny i wyrafinowany.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/5.jpg') }}" alt="..." />
                                    <p>Zegarek Daniel Wellington Iconic Motion Silver to doskonale wykonany czasomierz, łączący w sobie elegancję i nowoczesność, idealny dla osób ceniących sobie minimalizm oraz precyzję w stylowym wydaniu.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            Daniel Wellington
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            Iconic Motion Silver
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta item 6 modal popup-->
        <div class="oferta-modal modal fade" id="ofertaModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Oferta details-->
                                    <h2 class="text-uppercase">Zegarek Tommy Hilfiger Daniel</h2>
                                    <p class="item-intro text-muted">Elegancki, stylowy i nowoczesny czasomierz o wysokiej jakości wykonania.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/oferta/6.jpg') }}" alt="..." />
                                    <p>Zegarek Tommy Hilfiger Daniel to doskonale zaprojektowany czasomierz, który łączy w sobie elegancję z nowoczesnością, oferując wysoką jakość wykonania i niezawodność. Jego klasyczny wygląd i precyzyjny mechanizm sprawiają, że jest idealnym dodatkiem zarówno do formalnych, jak i casualowych stylizacji.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Marka:</strong>
                                            Tommy Hilfiger
                                        </li>
                                        <li>
                                            <strong>Model:</strong>
                                            Daniel
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('js/slider.js')}}"></script>
        <script src="{{asset('js/form-kontakt.js')}}"></script>
    </body>
</html>
