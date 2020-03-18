@include('layouts.partials._header')


<header class="fixed-top">
   <div id="navbarContainer">
        <div class="container-fluid">
            <nav class="boolean__navbar navbar navbar-expand-lg navbar-light bg-light">
                <a class="boolean__navbar__logo navbar-brand" href="https://www.boolean.careers">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers"></a>
                <button class="navbar-toggler boolean__navbar__button" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="boolean__navbar__items collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="boolean__navbar__item nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="boolean__navbar__item nav-item">
                            <a class="nav-link" href="#">Corso</a>
                        </li>
                        
                        <li class="boolean__navbar__item nav-item active">
                            <a class="nav-link" href="{{route('students')}}">Dopo il corso</a>
                        </li>
                        
                        <li class="boolean__navbar__item nav-item">
                            <a class="nav-link" href="#">Lezione Gratuita</a>
                        </li>
                        <li class="boolean__navbar__cta nav-item">
                            <a track="Click-IscrizioneForm" class="nav-link" href="#">Candidati ora</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<main class="margin-top-90">
    <div class="col-12">
        <div class="row">
            @yield('content')
        </div>
    </div>
</main>

<footer class="bg_blue">
    <div class="container">
        <div class="footer__head">
            <div class="footer__head__left">
                <img src="https://www.boolean.careers/images/common/logo-white.png" alt="Logo White">
                <div class="footer__head__left__numbers">
                  Sede Operativa<br>
                  Via Carducci 12 - 20123 Milano<br>
                  Tel: 02-36599712<br>
                </div>
            </div>
            <div class="footer__head__right">
                <ul>
                    <li><a href="https://www.boolean.careers/lezione-gratuita">Lezione gratuita</a></li>
                    
                    
                    <li><a href="https://www.boolean.careers/faq">Domande frequenti</a></li>
                    <li><a href="https://www.boolean.careers/aziende">Per le aziende</a></li>
                    <li><a href="https://www.boolean.careers/privacy-policy">Privacy policy</a></li>
                    <li><a href="https://www.boolean.careers/work-with-us">Lavora con noi</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom__icons">
                
                <a rel="nofollow" href="https://instagram.com/boolean.careers"><i class="fab fa-instagram"></i></a>
                <a rel="nofollow" href="https://www.facebook.com/boolean.careers"><i class="fab fa-facebook-f"></i></a>
                <a rel="nofollow" href="https://www.linkedin.com/school/boolean-careers/"><i class="fab fa-linkedin-in"></i></a>
                <a rel="nofollow" href="https://www.youtube.com/channel/UCN0mktfmWySUg3OmvHKrdcQ"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer__bottom__text">
                Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967
            </div>
        </div>
    </div>

    
</footer>


 @yield('script')
    

@include('layouts.partials._footer')
