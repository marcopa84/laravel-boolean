@extends('layouts.layout')


@section('content')
    @foreach ($students as $student)
        @dd($student)
    @endforeach

   <div class="container">
        <div class="boolean__career__salary__head">
            <h2 class="max-title">I nostri ex studenti su LinkedIn</h2>
        </div>
        <div class="boolean__career__salary__body">
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src= alt="Alessandro Biagini">
                <h3> <span class="age">(25 anni)</span></h3>

                <span>  Assunto  da DISC SPA come web developer </span>
                                    <a target="_blank" href=><i class="fab fa-linkedin"></i></a>
                                <p> </p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/poggini.png" alt="Paola Poggini">
                <h3>Paola Poggini <span class="age">(24 anni)</span></h3>

                <span>  Assunta  da Prima Assicurazioni come junior software engineer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/paola-poggini-644169180/"><i class="fab fa-linkedin"></i></a>
                                <p> A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.</p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/masetti.png" alt="Loana Masetti">
                <h3>Loana Masetti <span class="age">(36 anni)</span></h3>

                <span>  Assunta  da The Zen Agency come web developer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/loana-masetti-b468ab166/"><i class="fab fa-linkedin"></i></a>
                                <p> Ha scoperto la passione per l'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.</p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/patruno.png" alt="Davide Patruno">
                <h3>Davide Patruno <span class="age">(29 anni)</span></h3>

                <span>  Assunto  da ArmadioVerde come web developer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/dpatruno-webdev/"><i class="fab fa-linkedin"></i></a>
                                <p> Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.</p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/castellani.png" alt="Tommaso Castellani">
                <h3>Tommaso Castellani <span class="age">(30 anni)</span></h3>

                <span>  Assunto  da Pearch Digital come data scientist </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/tommaso-castellani-a06aa4122/"><i class="fab fa-linkedin"></i></a>
                                <p> Un passato da giocatore professionista di poker e una laurea in ingegneria gestionale alle spalle. Tommaso ha tramutato la sua passione per i numeri in un lavoro diventando data scientist a Dublino.</p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/antidormi.png" alt="Nicholas Antidormi">
                <h3>Nicholas Antidormi <span class="age">(20 anni)</span></h3>

                <span>  Assunto  da Atoms Studio come web developer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/nicholas-antidormi-080407188/"><i class="fab fa-linkedin"></i></a>
                                <p> Intraprende gli studi universitari in matematica per le sue doti analitiche, ma abbandona il percorso per concentrarsi su uno più pratico e orientato alla richiesta del mercato del lavoro: la programmazione.</p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/ortenzi.png" alt="Daniela Ortenzi">
                <h3>Daniela Ortenzi <span class="age">(27 anni)</span></h3>

                <span>  Assunta  da RDS come web developer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/daniela-ortenzi/"><i class="fab fa-linkedin"></i></a>
                                <p> Laureata in psicologia alla Sapienza di Roma con una nascente carriere nella SEO, Daniela si iscrive al corso Boolean. Ora lavora come web developer presso RDS Radio Dimensione Suono. </p>
            </div>
                        <div class="boolean__career__student">
                <button class="open-card"><i class="fas fa-plus"></i></button>
                <img src="https://www.boolean.careers/images/students/quarticelli.png" alt="Simone Quarticelli">
                <h3>Simone Quarticelli <span class="age">(32 anni)</span></h3>

                <span>  Assunto  da VLC 2 come web developer </span>
                                    <a target="_blank" href="https://www.linkedin.com/in/simone-quarticelli-1090b7193/"><i class="fab fa-linkedin"></i></a>
                                <p> Per supportare la famiglia, Simone inizia a lavorare come operaio da giovanissimo. Fortemente motivato a cambiare vita, per 6 mesi non stacca mai lo sguardo dal traguardo, distinguendosi per tenacia e resilienza.</p>
            </div>
        </div>
    </div>
@endsection