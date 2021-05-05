@extends('layouts.app')

@section('content')
    <form class="main-form" enctype="multipart/form-data" method="POST">
        @csrf
        <h4>Dane osobowe</h4>
        <hr>

        <div class="row">
            <div class="col-3">
                <input type="file" class="dropify" data-height="150" data-allowed-file-extensions="png jpg jpeg" />
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label>Imię*</label>
                    <input type="text" autocomplete="off" name="firstName" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nazwisko*</label>
                    <input type="text" autocomplete="off" name="lastName" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Adres e-mail*</label>
                    <input type="text" autocomplete="off" name="email" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numer telefonu</label>
                    <input type="text" autocomplete="off" name="meta.phoneNumber" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Adres</label>
            <input type="text" name="meta.streetName" autocomplete="off" class="form-control">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Kod pocztowy</label>
                    <input type="text" name="meta.postalCode" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Miasto / miejscowość</label>
                    <input type="text" name="meta.city" autocomplete="off" class="form-control">
                </div>
            </div>
        </div>

        <div id="additional-informations" class="slider">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Data urodzenia</label>
                        <input type="date" autocomplete="off" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Miejsce urodzenia</label>
                        <input type="text" name="meta.placeOfBirth" autocomplete="off" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Okręg</label>
                <input type="text" name="meta.county" autocomplete="off" class="form-control">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Prawo jazdy</label>
                        <select class="selectpicker form-control" multiple data-style="btn btn-light"
                                title="Wybierz kategorie">
                            <option value="A">A (motocykl)</option>
                            <option value="B">AM (motorower) </option>
                            <option value="B">B (samochód osobowy) </option>
                            <option value="B">BE (B + przyczepa) </option>
                            <option value="B">C (samochód ciężarowy) </option>
                            <option value="B">CE (C + przyczepa) </option>
                            <option value="B">C1 (lekka ciężarówka) </option>
                            <option value="B">C1E (C1 + przyczepa) </option>
                            <option value="B">D (autobus) </option>
                            <option value="B">DE (D + przyczepa) </option>
                            <option value="B">D1 (mały autobus / bus) </option>
                            <option value="B">D1E (D1 + przyczepa) </option>
                            <option value="B">T (traktor) </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Płeć</label>
                        <select class="custom-select" name="meta.gender">
                            <option value="0">Wybierz</option>
                            <option value="m">Mężczyzna</option>
                            <option value="f">Kobieta</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Narodowość</label>
                        <input type="text" autocomplete="off" name="meta.nationality" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Stan cywilny</label>
                        <input type="text" autocomplete="off" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="text" autocomplete="off" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Strona internetowa</label>
                        <input type="text" autocomplete="off" class="form-control">
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