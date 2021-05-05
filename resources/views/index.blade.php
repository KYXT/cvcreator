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
                    <input type="text" autocomplete="off" name="name" value="{{ $data['name'] ?? '' }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nazwisko*</label>
                    <input type="text" autocomplete="off" name="surname" value="{{ $data['surname'] ?? '' }}" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Adres e-mail*</label>
                    <input type="email" autocomplete="off" name="email" value="{{ $data['email'] ?? '' }}" class="form-control" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numer telefonu</label>
                    <input type="text" autocomplete="off" name="phone" value="{{ $data['phone'] ?? '' }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Adres</label>
            <input type="text" name="street" autocomplete="off" value="{{ $data['street'] ?? '' }}" class="form-control">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Kod pocztowy</label>
                    <input type="text" name="code" autocomplete="off" value="{{ $data['code'] ?? '' }}" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Miasto / miejscowość</label>
                    <input type="text" name="city" autocomplete="off" value="{{ $data['city'] ?? '' }}" class="form-control">
                </div>
            </div>
        </div>

        <div id="additional-informations" class="slider">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Data urodzenia</label>
                        <input type="date" autocomplete="off" name="birth" value="{{ $data['birth'] ?? '' }}" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Miejsce urodzenia</label>
                        <input type="text" name="birthCity" autocomplete="off" value="{{ $data['birthCity'] ?? '' }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Okręg</label>
                <input type="text" name="county" autocomplete="off" value="{{ $data['country'] ?? '' }}" class="form-control">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Prawo jazdy</label>
                        <select class="selectpicker form-control" multiple data-style="btn btn-light"
                                title="Wybierz kategorie" name="drive[]">
                            <option value="A (motocykl)" @if (isset($data['drive'])) {{ in_array('A (motocykl)', $data['drive']) ? 'selected' : '' }} @endif>A (motocykl)</option>
                            <option value="AM (motorower)" @if (isset($data['drive'])) {{ in_array('AM (motorower)', $data['drive']) ? 'selected' : '' }} @endif>AM (motorower) </option>
                            <option value="B (samochód osobowy)" @if (isset($data['drive'])) {{ in_array('B (samochód osobowy)', $data['drive']) ? 'selected' : '' }} @endif>B (samochód osobowy) </option>
                            <option value="BE (B + przyczepa)" @if (isset($data['drive'])) {{ in_array('BE (B + przyczepa)', $data['drive']) ? 'selected' : '' }} @endif>BE (B + przyczepa) </option>
                            <option value="C (samochód ciężarowy)" @if (isset($data['drive'])) {{ in_array('C (samochód ciężarowy)', $data['drive']) ? 'selected' : '' }} @endif>C (samochód ciężarowy) </option>
                            <option value="CE (C + przyczepa)" @if (isset($data['drive'])) {{ in_array('CE (C + przyczepa)', $data['drive']) ? 'selected' : '' }} @endif>CE (C + przyczepa) </option>
                            <option value="C1 (lekka ciężarówka)" @if (isset($data['drive'])) {{ in_array('C1 (lekka ciężarówka)', $data['drive']) ? 'selected' : '' }} @endif>C1 (lekka ciężarówka) </option>
                            <option value="C1E (C1 + przyczepa)" @if (isset($data['drive'])) {{ in_array('C1E (C1 + przyczepa)', $data['drive']) ? 'selected' : '' }} @endif>C1E (C1 + przyczepa) </option>
                            <option value="D (autobus)" @if (isset($data['drive'])) {{ in_array('D (autobus)', $data['drive']) ? 'selected' : '' }} @endif>D (autobus) </option>
                            <option value="DE (D + przyczepa)" @if (isset($data['drive'])) {{ in_array('DE (D + przyczepa)', $data['drive']) ? 'selected' : '' }} @endif>DE (D + przyczepa) </option>
                            <option value="D1 (mały autobus / bus)" @if (isset($data['drive'])) {{ in_array('D1 (mały autobus / bus)', $data['drive']) ? 'selected' : '' }} @endif>D1 (mały autobus / bus) </option>
                            <option value="D1E (D1 + przyczepa)" @if (isset($data['drive'])) {{ in_array('D1E (D1 + przyczepa)', $data['drive']) ? 'selected' : '' }} @endif>D1E (D1 + przyczepa) </option>
                            <option value="T (traktor)" @if (isset($data['drive'])) {{ in_array('T (traktor)', $data['drive']) ? 'selected' : '' }} @endif>T (traktor) </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Płeć</label>
                        <select class="selectpicker form-control" name="gender" title="Wybierz płeć">
                            <option value="Mężczyzna" @if (isset($data['gender'])) {{ $data['gender'] == 'Mężczyzna' ? 'selected' : '' }} @endif>Mężczyzna</option>
                            <option value="Kobieta" @if (isset($data['gender'])) {{ $data['gender'] == 'Kobieta' ? 'selected' : '' }} @endif>Kobieta</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Narodowość</label>
                        <input type="text" autocomplete="off" name="nationality" value="{{ $data['nationality'] ?? '' }}" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Stan cywilny</label>
                        <input type="text" autocomplete="off" name="marital" value="{{ $data['marital'] ?? '' }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="text" autocomplete="off" name="linkedin" value="{{ $data['linkedin'] ?? '' }}" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Strona internetowa</label>
                        <input type="text" autocomplete="off" name="web" value="{{ $data['web'] ?? '' }}" class="form-control">
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