<section id="intro" class="">
    <div class="container-lg">
        <div class="row g-4 justify-content-center align-items-center">
            <h1 class="">
                <div class="container">
                    <div class="display-5 ">{{$title}}</div>
                    @foreach($subtitles as $subtitle)
                        <div class="display-6 text-muted">{{$subtitle}}</div>
                    @endforeach
                </div>


            </h1>
           <div class="col-md-5 text-center text-md-start">

                <h4><span class="text-secondary fw-bold flex">Public concerné / Prérequis</span></h4>
                <p class="lead my-4 text-muted text-start">{{$public}}</p>
                <p class="lead my-4 text-muted text-start">{{$prerequis??'Pas de prérequis exigés.'}}</p>
                <a href="{{$docpath}}" class="btn btn-secondary btn-lg" target = "_blank" title="Télécharger le document en pdf pour cette formation">Imprimer ce document</a>

            </div>

            <div class="col-md-5 text-center d-none d-md-block">
                <span class="tt" data-bs-placement="bottom" title="Couverture d'enregistrement CDAFAL68">
                <img src="{{$imgpath?? '/images/register.png'}}" class="img-fluid" alt="ebook"></span>
            </div>

        </div>
        <div class="alert alert-info d-flex align-items-center my-5" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="currentColor"><path d="M485.157-715.539q-27.003 0-45.811-19.112-18.808-19.113-18.808-45.346 0-27.003 18.728-45.811 18.729-18.808 45.731-18.808 26.234 0 45.426 18.728 19.192 18.729 19.192 45.731 0 26.234-19.112 45.426-19.113 19.192-45.346 19.192ZM700.615-98.461v-185.924q0-9.23-5.384-14.615-5.385-5.385-14.616-5.385h-194q-23.546 0-40.85-17.303-17.304-17.304-17.304-40.081v-241.616q0-23.546 16.385-40.08Q461.231-660 485.566-660q12.174 0 25.65 7.077 13.476 7.077 33.938 30.769 49.692 57.462 93.538 85.462 43.847 28 99 35.384v30.77q-57.923-6.154-104.23-32.693-46.308-26.538-100.154-82.384V-348h139.923q24.315 0 41.235 16.919 16.919 16.919 16.919 40.466v192.154h-30.77Zm-298.461 0q-75.308 0-127.577-52.27Q222.308-203 222.308-278.308q0-68 47.576-119.346Q317.461-449 393.077-456.462v31.001Q332.154-422 292.731-379.038q-39.423 42.961-39.423 100.73 0 63.385 42.73 106.231 42.731 42.846 106.116 42.846 57.769 0 100.846-39.423Q546.077-208.077 549.308-269h31q-5.693 74.615-57.923 122.577-52.231 47.962-120.231 47.962Z"/></svg>
            <div class="">
                Notre association étudiera l'adaptation des moyens de la prestation de formation pour les personnes en situation de handicap.
            </div>
        </div>
    </div>
</section>
