<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>{{ $firstPart['name'] ?? '' }} {{ $firstPart['surname'] ?? '' }}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <link rel="stylesheet" type="text/css" href="resume.css" media="all" />
</head>
<body>

<div id="doc2" class="yui-t7">
    <div id="inner">
        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1> {{ $firstPart['name'] ?? '' }} {{ $firstPart['surname'] ?? '' }}</h1>
                    <h2>{{ $firstPart['web'] ?? ' ' }}</h2>
                    @if (isset($firstPart['linkedin']))<h3><b>Linkedin:</b> {{ $firstPart['linkedin'] ?? ' ' }}</h3>@endif
                </div>

                <div class="yui-u">
                    @if (isset($firstPart['image']))<img width="250px" src="{{ public_path($firstPart['image']) }}" alt="cv image">@endif
                    <div class="contact-info text-right">
                        <h3><a href="mailto:{{ $firstPart['email'] ?? ' ' }}">{{ $firstPart['email'] ?? ' ' }}</a></h3>
                        @if (isset($firstPart['phone']))<h3> {{ $firstPart['phone'] ?? ' ' }}</h3>@endif
                        @if (isset($firstPart['birth']))<h3><b>Data urodzenia:</b> {{ $firstPart['birth'] ?? ' ' }}</h3>@endif
                        @if (isset($firstPart['gender']))<h3><b>Płeć:</b> {{ $firstPart['gender'] ?? ' ' }}</h3>@endif
                        @if (isset($firstPart['nationality']))<h3><b>Narodowość:</b> {{ $firstPart['nationality'] ?? ' ' }}</h3>@endif
                        @if (isset($firstPart['marital']))<h3><b>Stan cywilny:</b> {{ $firstPart['marital'] ?? ' ' }}</h3>@endif
                    </div>
                </div>
            </div>
        </div>

        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Adres</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                                {{ $firstPart['street'] ?? '' }}<br>
                                <b>Miasto / miejscowość:</b> {{ $firstPart['city'] ?? '' }}<br>
                                <b>Okręg:</b> {{ $firstPart['city'] ?? '' }}<br>
                                <b>Miejsce urodzenia:</b> {{ $firstPart['country'] ?? '' }}<br>
                                <b>Kod pocztowy:</b> {{ $firstPart['code'] ?? '' }}<br>
                            </p>
                        </div>
                    </div>

                    @if (isset($firstPart['drive']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Prawa jazdy</h2>
                            </div>
                            <div class="yui-u">
                                <p class="enlarge">
                                    @foreach($firstPart['drive'] as $driveItem)
                                        {{ $driveItem ?? '' }}<br>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    @endif

                    @if (isset($secondPart['workName']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Doświadczenie</h2>
                            </div>

                            <div class="yui-u">
                                <?php $i = -1; ?>
                                @foreach($secondPart['workName'] as $work)
                                    <?php $i++ ?>
                                    <div class="job">
                                        <h2>{{ $secondPart['workEmp'][$i] ?? '' }}</h2>
                                        <h3>{{ $work ?? '' }}</h3>
                                        <h3>Miasto: <b>{{ $secondPart['workCity'][$i] ?? ''  }}</b></h3>
                                        <h4><b>{{ $secondPart['workStart'][$i] ?? '' }}</b> — <b>{{ $secondPart['workEnd'][$i] ?? '' }}</b></h4>
                                        <p>{{ strip_tags($secondPart['workAbout'][$i]) ?? '' }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (isset($secondPart['eduDeg']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Wykształcenie i kwalifikacje</h2>
                            </div>

                            <div class="yui-u">
                                <?php $i = -1; ?>
                                @foreach($secondPart['eduDeg'] as $edu)
                                    <?php $i++ ?>
                                    <div class="job">
                                        <h2>{{ $secondPart['eduSchool'][$i] ?? '' }}</h2>
                                        <h3>{{ $edu ?? '' }}</h3>
                                        <h3>Miasto: <b>{{ $secondPart['eduCity'][$i] ?? ''  }}</b></h3>
                                        <h4><b>{{ $secondPart['eduStart'][$i] ?? '' }}</b> — <b>{{ $secondPart['eduEnd'][$i] ?? '' }}</b></h4>
                                        <p>{{ strip_tags($secondPart['eduAbout'][$i]) ?? '' }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (isset($secondPart['langName']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Języki</h2>
                            </div>
                            <div class="yui-u">
                                <?php $i = -1; ?>
                                @foreach($secondPart['langName'] as $lang)
                                    <?php $i++ ?>
                                    <div class="talent">
                                        <h2>{{ $lang ?? '' }}</h2>
                                        <p>{{ $secondPart['langDeg'][$i] ?? '' }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (isset($secondPart['skillName']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Umiejętności</h2>
                            </div>
                            <div class="yui-u">
                                <?php $i = -1; ?>
                                @foreach($secondPart['skillName'] as $work)
                                    <?php $i++ ?>
                                        <div class="talent">
                                            <h2>{{ $work ?? '' }}</h2>
                                            <p>{{ $secondPart['skillDeg'][$i] ?? '' }}</p>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (isset($secondPart['hobbyName']))
                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Hobby i zainteresowania</h2>
                            </div>
                            <div class="yui-u">
                                <?php $i = -1; ?>
                                @foreach($secondPart['hobbyName'] as $hobby)
                                    <?php $i++ ?>
                                    <div class="talent">
                                        <h2>{{ $hobby ?? '' }}</h2>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div id="ft">
            <p>{{ $firstPart['name'] ?? '' }} {{ $firstPart['surname'] ?? '' }} &mdash; <a href="mailto:{{ $firstPart['email'] ?? ' ' }}">{{ $firstPart['email'] ?? ' ' }}</a> @if (isset($firstPart['phone'])) &mdash;  {{ $firstPart['phone'] ?? ' ' }}@endif</p>
        </div>
    </div>
</div>
</body>
</html>

