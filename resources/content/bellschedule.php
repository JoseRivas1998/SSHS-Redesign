<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Bell Schedule | Santa Susana High School</title>
    <style>
        .title {
            font-weight: bold;
            text-align: center;
        }

        .period {
            font-weight: bold;
            background-color: rgba(26, 179, 213, .25);
        }

        .time {
            text-align: right;
        }

        .sched {
            background-color: rgba(28, 208, 247, .25);
        }

        .sched > .column > .col-xs-6 {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .visible-xs {
            padding-top: 5px;
            padding-bottom: 5px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .bottomP > .dayName {
            font-weight: bold;
        }

        @media (min-width: 769px) {
            .bottomP > .dayName {
                text-align: right;
            }
        }

        @media (max-width: 768px) {
            .bottomP {
                text-align: center;
            }
        }
    </style>
</head>

<body>
<header>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/topnavbar.php";
    include($path);
    ?>
</header>

<section id="content-wrapper">
    <div class="container" id="content-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">Bell Schedule</div>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 title">Monday / Tuesday</div>
                                <div class="col-xs-12 col-sm-4 title">Wednesday / Thursday</div>
                                <div class="col-xs-12 col-sm-4 title">Friday</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row sched">
                                <div class="col-xs-12 col-sm-4 column">
                                    <div class="col-xs-12 title period visible-xs">Monday / Tuesday</div>
                                    <div class="col-xs-6 period">Period 1</div>
                                    <div class="col-xs-6 period time">6:55-7:55</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">7:55-8:00</div>
                                    <div class="col-xs-6 period">Period 2</div>
                                    <div class="col-xs-6 period time">8:00-9:00</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">9:00-9:05</div>
                                    <div class="col-xs-6 period">Period 3</div>
                                    <div class="col-xs-6 period time">9:05-10:05</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">10:05-10:10</div>
                                    <div class="col-xs-6 period">Period 4</div>
                                    <div class="col-xs-6 period time">10:10-11:10</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">11:10-11:15</div>
                                    <div class="col-xs-6 period">Period 5</div>
                                    <div class="col-xs-6 period time">11:15-12:15</div>
                                    <div class="col-xs-6 period">LUNCH</div>
                                    <div class="col-xs-6 period time">12:15-12:50</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">12:50-12:55</div>
                                    <div class="col-xs-6 period">Period 6</div>
                                    <div class="col-xs-6 period time">12:55-1:55</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">1:55-2:00</div>
                                    <div class="col-xs-6 period">Period 7</div>
                                    <div class="col-xs-6 period time">2:00-3:00</div>
                                    <div class="col-xs-6 period">Period 8</div>
                                    <div class="col-xs-6 period time">3:05-4:05</div>
                                    <div class="col-xs-6 period">Period 9</div>
                                    <div class="col-xs-6 period time">4:05-5:05</div>
                                </div>
                                <div class="col-xs-12 col-sm-4 column">
                                    <div class="col-xs-12 title period visible-xs">Wednesday / Thursday</div>
                                    <div class="col-xs-6 period">Period 1</div>
                                    <div class="col-xs-6 period time">6:55-7:55</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">7:55-8:00</div>
                                    <div class="col-xs-6 period">Period 2/3</div>
                                    <div class="col-xs-6 period time">8:00-9:51</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">9:51-10:01</div>
                                    <div class="col-xs-6 period">Period 4/5</div>
                                    <div class="col-xs-6 period time">10:01-11:52</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">11:52-11:57</div>
                                    <div class="col-xs-6 period">TAP</div>
                                    <div class="col-xs-6 period time">11:57-12:17</div>
                                    <div class="col-xs-6 period">LUNCH</div>
                                    <div class="col-xs-6 period time">12:17-12:52</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">12:52-12:57</div>
                                    <div class="col-xs-6 period">Period 6/7</div>
                                    <div class="col-xs-6 period time">12:57-2:48</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">2:48-3:05</div>
                                    <div class="col-xs-6 period">Period 8</div>
                                    <div class="col-xs-6 period time">2:55-3:55</div>
                                    <div class="col-xs-6 period">Period 9</div>
                                    <div class="col-xs-6 period time">3:55-4:55</div>
                                </div>
                                <div class="col-xs-12 col-sm-4 column">
                                    <div class="col-xs-12 title period visible-xs">Friday</div>
                                    <div class="col-xs-6 period">Period 1</div>
                                    <div class="col-xs-6 period time">6:55-7:55</div>
                                    <div class="col-xs-6 period">FMM</div>
                                    <div class="col-xs-6 period time">7:50-8:50</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">8:50-9:00</div>
                                    <div class="col-xs-6 period">Period 2</div>
                                    <div class="col-xs-6 period time">9:00-9:50</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">9:50-9:55</div>
                                    <div class="col-xs-6 period">Period 3</div>
                                    <div class="col-xs-6 period time">9:55-10:45</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">10:45-10:50</div>
                                    <div class="col-xs-6 period">Period 4</div>
                                    <div class="col-xs-6 period time">10:50-11:40</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">11:40-11:45</div>
                                    <div class="col-xs-6 period">Period 5</div>
                                    <div class="col-xs-6 period time">11:45-12:35</div>
                                    <div class="col-xs-6 period">LUNCH</div>
                                    <div class="col-xs-6 period time">12:35-1:10</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">1:10-1:15</div>
                                    <div class="col-xs-6 period">Period 6</div>
                                    <div class="col-xs-6 period time">1:15-2:05</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">2:05-2:10</div>
                                    <div class="col-xs-6 period">Period 7</div>
                                    <div class="col-xs-6 period time">2:00-3:00</div>
                                    <div class="col-xs-6 period">Period 8</div>
                                    <div class="col-xs-6 period time">3:05-4:05</div>
                                    <div class="col-xs-6 period">Period 9</div>
                                    <div class="col-xs-6 period time">4:05-5:05</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 title">Minimum Days</div>
                                <div class="col-xs-12 col-sm-6 title">Finals Weeks</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row sched">
                                <div class="col-xs-12 col-sm-6 column">
                                    <div class="title period visible-xs">Minumum Days</div>
                                    <div class="col-xs-6 period">Period 1</div>
                                    <div class="col-xs-6 period time">7:18-7:55</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">7:55-8:00</div>
                                    <div class="col-xs-6 period">Period 2</div>
                                    <div class="col-xs-6 period time">8:00-8:37</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">8:37-8:42</div>
                                    <div class="col-xs-6 period">Period 3</div>
                                    <div class="col-xs-6 period time">8:42-9:19</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">9:19-9:24</div>
                                    <div class="col-xs-6 period">Period 4</div>
                                    <div class="col-xs-6 period time">9:24-10:01</div>
                                    <div class="col-xs-6">Break</div>
                                    <div class="col-xs-6 time">10:01-10:24</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">10:24-10:29</div>
                                    <div class="col-xs-6 period">Period 5</div>
                                    <div class="col-xs-6 period time">10:29-11:06</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">11:06-11:11</div>
                                    <div class="col-xs-6 period">Period 6</div>
                                    <div class="col-xs-6 period time">11:11-11:48</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">11:48-11:53</div>
                                    <div class="col-xs-6 period">Period 7</div>
                                    <div class="col-xs-6 period time">11:53-12:30</div>
                                    <div class="col-xs-6">Passing</div>
                                    <div class="col-xs-6 time">12:30-12:35</div>
                                    <div class="col-xs-6 period">Period 8/9</div>
                                    <div class="col-xs-6 period time">12:35-1:12</div>
                                </div>
                                <div class="col-xs-12 col-sm-6 column">
                                    <div class="title period visible-xs">Finals Weeks</div>
                                    <div class="col-xs-6 period">Period 2/4/6</div>
                                    <div class="col-xs-6 period time">8:00-10:00</div>
                                    <div class="col-xs-6">Break</div>
                                    <div class="col-xs-6 time">10:00–10:25</div>
                                    <div class="col-xs-6 period">Period 3/5/7</div>
                                    <div class="col-xs-6 period time">10:30-12:30</div>
                                    <div class="col-xs-6">Lunch</div>
                                    <div class="col-xs-6 time">12:30–1:30</div>
                                    <div class="col-xs-6 period">Period 1/8/9</div>
                                    <div class="col-xs-6 period time">1:30-3:30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading title">2015-2016 School Year</div>
                        <div class="panel-body bottomP">
                            <div class="col-xs-12 col-sm-6 dayName">First Day of School</div>
                            <div class="col-xs-12 col-sm-6 date">August 17th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Back-To-School Night</div>
                            <div class="col-xs-12 col-sm-6 date">September 9th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Open House</div>
                            <div class="col-xs-12 col-sm-6 date">January 13th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Graduation</div>
                            <div class="col-xs-12 col-sm-6 date">June 2nd</div>
                            <div class="col-xs-12 col-sm-6 dayName">Last Day of School</div>
                            <div class="col-xs-12 col-sm-6 date">June 3rd</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading title">Student Non-Attendance Days and Holidays</div>
                        <div class="panel-body bottomP">
                            <div class="col-xs-12 col-sm-6 dayName">Labor Day</div>
                            <div class="col-xs-12 col-sm-6 date">Sept 7th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Rosh Hashanah</div>
                            <div class="col-xs-12 col-sm-6 date">Sept 14th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Yom Kippur</div>
                            <div class="col-xs-12 col-sm-6 date">Sept 23rd</div>
                            <div class="col-xs-12 col-sm-6 dayName">Veterans Day</div>
                            <div class="col-xs-12 col-sm-6 date">Nov 11th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Thanksgiving Break</div>
                            <div class="col-xs-12 col-sm-6 date">Nov 23rd - 27th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Winter Recess</div>
                            <div class="col-xs-12 col-sm-6 date">Dec 21st - Jan 4th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Martin Luther King, Jr. Day</div>
                            <div class="col-xs-12 col-sm-6 date">Jan 18th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Presidents' Day</div>
                            <div class="col-xs-12 col-sm-6 date">Feb 15th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Staff Development</div>
                            <div class="col-xs-12 col-sm-6 date">March 11th</div>
                            <div class="col-xs-12 col-sm-6 dayName">Spring Recess</div>
                            <div class="col-xs-12 col-sm-6 date">March 25th - April 1st</div>
                            <div class="col-xs-12 col-sm-6 dayName">Memorial Day</div>
                            <div class="col-xs-12 col-sm-6 date">May 30th</div>
                        </div>
                    </div>
                    <a href="SSHS-Bell-Schedule-2015-2016.pdf" target="_blank">Bell Schedule PDF file</a><br/>
                    <button class="btn btn-default" onclick="history.back(-1)"><i class="fa fa-arrow-left"></i> Back to
                        Previous Page
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
</body>

</html>
