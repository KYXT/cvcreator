@extends('layouts.app')

@section('content')
    <form class="history-form" id="work_experience">

        <div class="row align-items-center">
            <img src="/img/businessman.svg">
            <h4>Doświadczenie zawodowe</h4>
        </div>

        <div id="form-content" class="d-none">

            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj
                kolejne doświadczenie
                zawodowe</button>

        </div>

    </form>

    <form class="history-form" id="education">

        <div class="row align-items-center">
            <img src="/img/online-course.svg">
            <h4>Wykształcenie i kwalifikacje</h4>
        </div>

        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejne wykształcenie</button>
        </div>

    </form>

    <form class="history-form" id="languages">

        <div class="row align-items-center">
            <img src="/img/languages.svg">
            <h4>Języki</h4>
        </div>

        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejny język</button>
        </div>

    </form>

    <form class="history-form" id="skills">

        <div class="row align-items-center">
            <img src="/img/skills.svg">
            <h4>Umiejętności</h4>
        </div>

        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejną umiejętność</button>
        </div>

    </form>

    <form class="history-form" id="hobbies">

        <div class="row align-items-center">
            <img src="/img/mental-health.svg">
            <h4>Hobby i zainteresowania</h4>
        </div>

        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejne hobby</button>
        </div>
    </form>

    </div>

    </form>
@endsection

@section('js')
    <script src="js/history.js"></script>
@endsection