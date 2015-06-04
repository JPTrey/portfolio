<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The Homepage of Jon Paul</title>
    <link href="{{asset('Content/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Content/style.css')}}" rel="stylesheet" />
    <script src="{{asset('Scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{asset('Scripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('Scripts/jquery.visible.min.js')}}"></script>
    <script src="{{asset('Scripts/parallax.js')}}"></script>
</head>
<body>

    <!--<br />-->
    <!--<section class="featured">
        <div class="content-wrapper">-->
    <!--<hgroup class="title"></hgroup>-->
    <!--/div-->
    <!--/section-->

    <div class="row" id="heading-row">
        <div id="hand-img">
            <h1 class="text-center">The Homepage of Jon Paul</h1>
            <h2 class="text-center">Web programmer specializing in PHP and C# development</h2>
        </div>
    </div>

    <!-- Websites -->

    <div class="row invert">
        <div id="web-app-div">

            <h1 class="text-center section">Web Applications</h1>
        </div>
    </div>

    <!--h1 class="position_index">Current position: </h1-->

    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <h2 class="text-center project-title">Gascious</h2>
            <h3 class="text-center project-tagline">For the gas-conscious.</h3>
            <p class="text-center project-info">
                Track gas prices and engine effiency with Gascious,
                the free gas log service that stores and analyses prices and mileage across vehicles, stations, and seasons.
            </p>
            <div class="well">
                <p class="project-tech">Built using:</p>
                <ul>
                    <li class="project-tech">ASP.NET MVC 5</li>
                    <li class="project-tech">SQL Server 2014</li>
                    <li class="project-tech">Azure Web Services</li>
                    <li class="project-tech">C#, JavaScript, HTML 5, CSS</li>
                    <li class="project-tech">Bootstrap 3</li>
                    <li class="project-tech">JSChart</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="container" id="gascious-img">

                <!--<img class="img img-responsive" src="/Images/gascious-pic.PNG" />-->
            </div>
        </div>
    </div>
    <br />
    <div class="row">
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a class="btn btn-primary btn-block" href="{{url('/gascious')}}">Visit this site</a>
        </div>
    </div>
    <hr />

    <!--h1 class="position_index">Current position: </h1-->

    <div class="invert">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h2 class="text-center project-title">Woody Jones Builders</h2>
                <h3 class="text-center project-tagline">A new home for a legendary home-builder.</h3>
                <div class="well-invert">
                    <p class="project-tech">Built using:</p>
                    <ul>
                        <li class="project-tech">PHP, JavaScript, HTML 5, CSS</li>
                        <li class="project-tech">Bootstrap 3</li>
                        <li class="project-tech">PHPMailer</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="container" id="wjb-img"></div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a class="btn btn-success btn-block" href="{{url('/jones')}}">Visit limited preview</a>
            </div>
        </div>
        <hr />
    </div>
    <br />

    <!--h1 class="position_index">Current position: </h1-->

    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <h2 class="text-center project-title">StartWatch</h2>
            <h3 class="text-center project-tagline">Ready...Set...Achieve!</h3>
            <p class="text-center project-info">Set goals and stick with them with StartWatch, the smart stopwatch that tracks progress over time.</p>
            <div class="well">
                <p class="project-tech">Built using:</p>
                <ul>
                    <li class="project-tech">ASP.NET MVC 5</li>
                    <li class="project-tech">SQL Server 2014</li>
                    <li class="project-tech">Azure Web Services</li>
                    <li class="project-tech">C#, jQuery, AJAX, HTML 5, CSS</li>
                    <li class="project-tech">Bootstrap 3</li>
                    <li class="project-tech">JSChart</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="container" id="startwatch-img"></div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a class="btn btn-primary btn-block" href="{{url('/StartWatch')}}">Visit this site</a>
        </div>
    </div>
    <hr />

    <!--h1 class="position_index">Current position: </h1-->

    <div class="invert">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h2 class="text-center project-title">(Less) Awkward Zombie</h2>
                <h3 class="text-center project-tagline">A mobile reading experience that won't eat your brains.</h3>
                <p class="text-center project-info">Enjoy Katie Tiedrich's long-running "Awkward Zombie" webcomic in this mobile-friendly front-end.</p>
                <div class="well-invert">
                    <p class="project-tech">Built using:</p>
                    <ul>
                        <li class="project-tech">CodeIngiter 2</li>
                        <li class="project-tech">MySQL (on SQL Server 2014)</li>
                        <li class="project-tech">Azure Web Services</li>
                        <li class="project-tech">PHP, HTML 5, CSS</li>
                        <li class="project-tech">Bootstrap 3</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="container" id="laz-img"></div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a class="btn btn-success btn-block" href="{{url('/zombie')}}">Visit limited preview</a>
            </div>
        </div>
        <hr />
    </div>
    <br />

    <!-- GitHub links -->

    <div class="row">
        <h1 class="text-center section">Code Respositories</h1>
    </div>

    <div class="invert">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h2 class="text-center project-title">Family Feud</h2>
                <h3 class="text-center project-tagline">"Survey says...edu-tainment!"</h3>
                <p class="text-center project-info">
                    Designed for use by the Skidmore College statistics department,
                    "Family Feud" is an intuitive toolset for building and running eductional versions of the popular gameshow, complete with dynamic windows and controllers,
                    sound effects, and questions that can be added, stored, and edited.
                </p>
                <div class="well-invert">
                    <p class="project-tech">Built using:</p>
                    <ul>
                        <li class="project-tech">Swing</li>
                        <li class="project-tech">Eclipse</li>
                        <li class="project-tech">Java</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="container" id="ffeud-img"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a class="btn btn-default btn-block" href="https://github.com/JPTrey/family_feud">Get the source</a>
            </div>
        </div>
        <br />
    </div>

    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <h2 class="text-center project-title">Mall Simulator</h2>
            <h3 class="text-center project-tagline">An easy-to-follow parallel programming example.</h3>
            <p class="text-center project-info">
                Designed in collaboration with Modupe Theko Lekena and Nicholas Cleeves,
                "Mall Simulator (2014)" is an open-source example of clear, modern, object-oriented
                parallel programming in Java.  By setting parameters, users can observe customer traffic patterns,
                optimal production and restocking times, and how one affects another.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
            <div class="well">
                <p class="project-tech">Built using:</p>
                <ul>
                    <li class="project-tech">Swing</li>
                    <li class="project-tech">Eclipse</li>
                    <li class="project-tech">Java</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <a class="btn btn-default btn-block" href="https://github.com/JPTrey/cs324-project3">Get the source</a>
        </div>
    </div>
    <br />

    <div class="invert">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h2 class="text-center project-title">Anagram Search Engine</h2>
                <h3 class="text-center project-tagline">Developed with Ethan Formicelli</h3>
                <p class="text-center project-info">
                    Served as co-developer and reporter for group project. Searches a sorted text dictionary
                    to match input strings to possible anagrams, using length and alphabetization as heuristics.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1">
                <div class="well-invert">

                <p class="project-tech">Built using:</p>
                <ul>
                    <li class="project-tech">C</li>
                    <li class="project-tech">GCC</li>
                </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a class="btn btn-default btn-block" href="https://github.com/JPTrey/anagram-search">Get the source</a>
            </div>
        </div>
        <br />
    </div>



    <!-- Contact links -->

    <div class="row">
        <h1 class="text-center section">More Info</h1>
    </div>

    <div class="row invert">
        <h1 class="text-center"><a class="weblink-invert" href="{{url('/files/Resume - Simonelli.pdf')}}">Resume</a></h1>
        <h1 class="text-center"><a class="weblink-invert" href="http://onezedone.tumblr.com">Tumblr</a></h1>
        <h1 class="text-center"><a class="weblink-invert" href="mailto:jonpaul.simonelli@gmail.com">Email</a></h1>
    </div>

    <div class="row"></div>



</body>
</html>

<!--<div class="row">
    <div class="js-background1 container">
        <h1>Woody Jones Builders</h1>
    </div>
</div>

<div class="row">

    <div class="js-background2 container">
        <h2>Second box</h2>
    </div>
</div>-->
