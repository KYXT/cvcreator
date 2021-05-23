@extends('layouts.app')

@section('content')


<form class="main-form" method="POST">
    @csrf
    <div class="history-form col-md-12" id="work_experience">
        <div class="row align-items-center">
            <img src="/img/businessman.svg">
            <h4>Doświadczenie zawodowe</h4>
        </div>
        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejne doświadczenie zawodowe</button>
        </div>
    </div>

    <div class="history-form col-md-12" id="education">
        <div class="row align-items-center">
            <img src="/img/online-course.svg">
            <h4>Wykształcenie i kwalifikacje</h4>
        </div>
        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejne wykształcenie</button>
        </div>
    </div>

    <div class="history-form col-md-12" id="languages">
        <div class="row align-items-center">
            <img src="/img/languages.svg">
            <h4>Języki</h4>
        </div>
        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejny język</button>
        </div>
    </div>

    <div class="history-form col-md-12" id="skills">
        <div class="row align-items-center">
            <img src="/img/skills.svg">
            <h4>Umiejętności</h4>
        </div>
        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejną umiejętność</button>
        </div>
    </div>

    <div class="history-form col-md-12" id="hobbies">
        <div class="row align-items-center">
            <img src="/img/mental-health.svg">
            <h4>Hobby i zainteresowania</h4>
        </div>
        <div id="form-content" class="d-none">
            <button type="button" class="btn btn-info btn-block mt-4" id="new-position-add-button">&#x2b; Dodaj kolejne hobby</button>
        </div>
    </div>

    <div class="history-form col-md-12" id="hobbies">
        <div>
            <label for="cv1">Formularz 1</label>
            <input type="radio" id="cv1" name="cvtype" value="1" checked>
        </div>
        <div>
            <label for="cv2">Formularz 2</label>
            <input type="radio" id="cv2" name="cvtype" value="2">
        </div>
    </div>



    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary mb-5 btn-lg">Pobierz PDF</button>
    </div>
</form>

@endsection

@section('js')
    <script src="js/history.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
@endsection