
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">CRUD</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbars"
                aria-controls="navbars"
                aria-expanded="false"
                aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbars">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('agendas.index')}}">Agenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">{{__("agenda.about")}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#config" aria-controls="config">{{__("agenda.btn_config")}}</a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="config" aria-labelledby="configLabel">
                    <div class="offcanvas-header">
                        <h5 id="configLabel">{{__("agenda.label_config")}}</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form id="formConfig" method="POST" action="{{route('config')}}">
                            @csrf
                            <div class="row">
                                <p class="fs-6 fw-bold">{{__("agenda.select_locale")}}</p>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="locale" value="en" id="locale_en" checked>
                                        <label class="form-check-label" for="locale_en">
                                            <img src="{{asset("img/flags/en.png")}}" class="rounded w-100" id="img_locale" alt="English"/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="locale" value="pt" id="locale_pt">
                                        <label class="form-check-label" for="locale_pt">
                                            <img src="{{asset("img/flags/pt.png")}}" class="rounded w-100" id="img_locale" alt="Português"/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-success" type="submit">{{__("save")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <form id="formSearch" method="GET" action="{{route('agendas.search')}}">
            @csrf
            <div class="input-group">
                <input id="search" name="search" class="form-control" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-outline-info" type="submit">{{__("agenda.search")}}</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</nav>

