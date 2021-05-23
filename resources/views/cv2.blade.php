
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>{{ $firstPart['name'] ?? '' }} {{ $firstPart['surname'] ?? '' }}</title>

    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 400px; float: left;}
        dd.clear { float: none; margin: 0; height: 15px; }
    </style>
</head>

<body>

<div id="page-wrap">


    @if (isset($firstPart['image']))<img width="200px" src="{{ public_path($firstPart['image']) }}" alt="Photo of Cthulu" id="pic" />@endif

    <div id="contact-info" class="vcard">
        <h1 class="fn">{{ $firstPart['name'] ?? '' }} {{ $firstPart['surname'] ?? '' }}</h1>

        <p>
            @if (isset($firstPart['email']))Email: <a class="email" href="{{ $firstPart['email'] ?? ' ' }}">{{ $firstPart['email'] ?? ' ' }}</a><br>@endif
            @if (isset($firstPart['phone']))Telefon: <span class="tel"> {{ $firstPart['phone'] ?? ' ' }}</span><br />@endif
            @if (isset($firstPart['birth']))Data urodzenia: <span> {{ $firstPart['birth'] ?? ' ' }}</span><br />@endif
            @if (isset($firstPart['gender']))Płeć: <span> {{ $firstPart['gender'] ?? ' ' }}</span><br />@endif
            @if (isset($firstPart['nationality']))Narodowość: <span> {{ $firstPart['nationality'] ?? ' ' }}</span><br />@endif
            @if (isset($firstPart['marital']))Stan cywilny: <span> {{ $firstPart['marital'] ?? ' ' }}</span><br />@endif
        </p>
    </div>

    <div id="objective">
        <p>
            Informacja o mnie:
        </p>
    </div>

    <div class="clear"></div>

    <dl>
        <dd class="clear"></dd>

        @if (isset($firstPart['street']) || isset($firstPart['city']) || isset($firstPart['street']) || isset($firstPart['country']) || isset($firstPart['code']))
            <dt>Adres</dt>
            <dd>
                @if (isset($firstPart['street']))<h2>{{ $firstPart['street'] ?? '' }}</h2>@endif
                <p>
                    @if (isset($firstPart['city']))<b>Miasto / miejscowość:</b> {{ $firstPart['city'] ?? '' }}<br>@endif
                    @if (isset($firstPart['country']))<b>Okręg:</b> {{ $firstPart['country'] ?? '' }}<br>@endif
                    @if (isset($firstPart['birthCity']))<b>Miejsce urodzenia:</b> {{ $firstPart['birthCity'] ?? '' }}<br>@endif
                    @if (isset($firstPart['code']))<b>Kod pocztowy:</b> {{ $firstPart['code'] ?? '' }}<br>@endif
                </p>
            </dd>
            <dd class="clear"></dd>
        @endif

        @if (isset($firstPart['drive']))
            <dt>Prawa jazdy</dt>
            <dd>
                <p>
                    @foreach($firstPart['drive'] as $driveItem)
                        {{ $driveItem ?? '' }}<br>
                    @endforeach
                </p>
            </dd>
            <dd class="clear"></dd>
        @endif

        @if (isset($secondPart['workName']))
            <dt>Doświadczenie</dt>
            <dd>
                <?php $i = -1; ?>
                @foreach($secondPart['workName'] as $work)
                    <?php $i++ ?>
                        <h2>{{ $secondPart['workEmp'][$i] ?? '' }} <span>{{ $work ?? '' }}</span></h2>
                        <ul>
                            <li>Miasto: <b>{{ $secondPart['workCity'][$i] ?? ''  }}</b></li>
                            <li><b>{{ $secondPart['workStart'][$i] ?? '' }}</b> — <b>{{ $secondPart['workEnd'][$i] ?? '' }}</b></li>
                            <li>{{ strip_tags($secondPart['workAbout'][$i]) ?? '' }}</li>
                        </ul>
                @endforeach
            </dd>
        @endif

        @if (isset($secondPart['eduDeg']))
            <dt>Wykształcenie i kwalifikacje</dt>
            <dd>
                <?php $i = -1; ?>
                @foreach($secondPart['eduDeg'] as $edu)
                    <?php $i++ ?>
                    <h2>{{ $secondPart['eduSchool'][$i] ?? '' }} <span>{{ $edu ?? '' }}</span></h2>
                    <ul>
                        <li>{{ $secondPart['eduCity'][$i] ?? ''  }}</b></li>
                        <li><b>{{ $secondPart['eduStart'][$i] ?? '' }}</b> — <b>{{ $secondPart['eduEnd'][$i] ?? '' }}</b></li>
                        <li>{{ strip_tags($secondPart['eduAbout'][$i]) ?? '' }}</li>
                    </ul>
                @endforeach
            </dd>
        @endif

        @if (isset($secondPart['skillName']))
            <dt>Umiejętności</dt>
            <dd>
                <?php $i = -1; ?>
                @foreach($secondPart['skillName'] as $work)
                    <?php $i++ ?>
                        <h2>{{ $work ?? '' }}</h2>
                        <p>{{ $secondPart['skillDeg'][$i] ?? '' }}</p>
                @endforeach
            </dd>
            <dd class="clear"></dd>
        @endif

        @if (isset($secondPart['hobbyName']))
        <dt>Hobby i zainteresowania</dt>
            <dd>
                <?php $i = -1; ?>
                    @foreach($secondPart['hobbyName'] as $hobby)
                    <?php $i++ ?>
                        <h2>{{ $hobby ?? '' }}</h2>
                    @endforeach
            </dd>
            <dd class="clear"></dd>
        @endif
    </dl>

    <div class="clear"></div>

</div>

</body>

</html>