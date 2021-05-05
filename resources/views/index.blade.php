@extends('layouts.app')

@section('content')
    <form class="main-form" enctype="multipart/form-data" method="POST">
        @csrf
        <h4>Dane osobowe</h4>
        <hr>

        <div class="row">
            <div class="col-3">
                <input type="file" class="dropify" data-height="150" data-allowed-file-extensions="png jpg jpeg" name="image">
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label>Imię*</label>
                    <input type="text" autocomplete="off" name="name" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nazwisko*</label>
                    <input type="text" autocomplete="off" name="surname" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Adres e-mail*</label>
                    <input type="email" autocomplete="off" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numer telefonu</label>
                    <input type="text" autocomplete="off" name="phone" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Adres</label>
            <input type="text" name="street" autocomplete="off" class="form-control">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Kod pocztowy</label>
                    <input type="text" name="code" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Miasto / miejscowość</label>
                    <input type="text" name="city" autocomplete="off" class="form-control">
                </div>
            </div>
        </div>

        <div id="additional-informations" class="slider">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Data urodzenia</label>
                        <input type="date" autocomplete="off" name="birth" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Miejsce urodzenia</label>
                        <input type="text" name="birthCity" autocomplete="off" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Okręg</label>
                <input type="text" name="county" autocomplete="off" class="form-control">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Prawo jazdy</label>
                        <select class="selectpicker form-control" multiple data-style="btn btn-light"
                                title="Wybierz kategorie" name="drive[]">
                            <option value="A (motocykl)">A (motocykl)</option>
                            <option value="AM (motorower)">AM (motorower) </option>
                            <option value="B (samochód osobowy)">B (samochód osobowy) </option>
                            <option value="BE (B + przyczepa)">BE (B + przyczepa) </option>
                            <option value="C (samochód ciężarowy)">C (samochód ciężarowy) </option>
                            <option value="CE (C + przyczepa)">CE (C + przyczepa) </option>
                            <option value="C1 (lekka ciężarówka)">C1 (lekka ciężarówka) </option>
                            <option value="C1E (C1 + przyczepa)">C1E (C1 + przyczepa) </option>
                            <option value="D (autobus)">D (autobus) </option>
                            <option value="DE (D + przyczepa)">DE (D + przyczepa) </option>
                            <option value="D1 (mały autobus / bus)">D1 (mały autobus / bus) </option>
                            <option value="D1E (D1 + przyczepa)">D1E (D1 + przyczepa) </option>
                            <option value="T (traktor)">T (traktor) </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Płeć</label>
                        <select class="selectpicker form-control" name="gender" title="Wybierz płeć">
                            <option value="Mężczyzna">Mężczyzna</option>
                            <option value="Kobieta">Kobieta</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Narodowość</label>
                        <input type="text" autocomplete="off" name="nationality" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Stan cywilny</label>
                        <input type="text" autocomplete="off" name="marital" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="text" autocomplete="off" name="linkedin" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Strona internetowa</label>
                        <input type="text" autocomplete="off" name="web" class="form-control">
                    </div>
                </div>
            </div>

        </div>

        <button class="btn btn-info btn-block mt-2" id="additionalInfoButton">Dodatkowe informacje &#x21d3;</button>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary mb-5 btn-lg">Kolejny krok &#x21d2;</button>
        </div>
    </form>
@endsection

@section('js')
    <script src="js/main.js"></script>
@endsection