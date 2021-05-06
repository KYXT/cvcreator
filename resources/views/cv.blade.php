<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

    <title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="" />
    <meta name="description" content="" />

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

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <div class="yui-u">

                            <div class="talent">
                                <h2>Web Design</h2>
                                <p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
                            </div>

                            <div class="talent">
                                <h2>Interface Design</h2>
                                <p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
                            </div>

                            <div class="talent">
                                <h2>Project Direction</h2>
                                <p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
                            </div>
                        </div>
                    </div><!--// .yui-gf -->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Technical</h2>
                        </div>
                        <div class="yui-u">
                            <ul class="talent">
                                <li>XHTML</li>
                                <li>CSS</li>
                                <li class="last">Javascript</li>
                            </ul>

                            <ul class="talent">
                                <li>Jquery</li>
                                <li>PHP</li>
                                <li class="last">CVS / Subversion</li>
                            </ul>

                            <ul class="talent">
                                <li>OS X</li>
                                <li>Windows XP/Vista</li>
                                <li class="last">Linux</li>
                            </ul>
                        </div>
                    </div><!--// .yui-gf-->

                    <div class="yui-gf">

                        <div class="yui-u first">
                            <h2>Experience</h2>
                        </div><!--// .yui-u -->

                        <div class="yui-u">

                            <div class="job">
                                <h2>Facebook</h2>
                                <h3>Senior Interface Designer</h3>
                                <h4>2005-2007</h4>
                                <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                            </div>

                            <div class="job">
                                <h2>Apple Inc.</h2>
                                <h3>Senior Interface Designer</h3>
                                <h4>2005-2007</h4>
                                <p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
                            </div>

                            <div class="job">
                                <h2>Microsoft</h2>
                                <h3>Principal and Creative Lead</h3>
                                <h4>2004-2005</h4>
                                <p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
                            </div>


                            <div class="job last">
                                <h2>International Business Machines (IBM)</h2>
                                <h3>Lead Web Designer</h3>
                                <h4>2001-2004</h4>
                                <p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
                            </div>

                        </div><!--// .yui-u -->
                    </div><!--// .yui-gf -->


                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2>Education</h2>
                        </div>
                        <div class="yui-u">
                            <h2>Indiana University - Bloomington, Indiana</h2>
                            <h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
                        </div>
                    </div><!--// .yui-gf -->


                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->

        <div id="ft">
            <p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
        </div><!--// footer -->

    </div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

