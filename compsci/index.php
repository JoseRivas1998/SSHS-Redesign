<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Santa Susana High School</title>
    <style>
      .img-responsive {
          margin: 0 auto;
      }
      .acadSec {
          text-align: center;
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
            <div class="col-xs-12 col-sm-3 side-nav">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Computer Science</div>
                </div>
                <div class="panel-body">
                  <div class="list-group">
                    <a href="#classroommgmtplan" class="list-group-item">Classroom Management Plan</a>
                    <a href="#webmaster" class="list-group-item">Webmaster CTE</a>
                    <a href="#apcompsci" class="list-group-item">AP Computer Science</a>
                    <a href="#ecs" class="list-group-item">Exploring Computer Science</a>
                    <a href="#simclub" class="list-group-item">Simulations and Game Development Club</a>
                    <a href="#cert" class="list-group-item">Certification Requirements</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-9">

              <div class="section-title">Academy of Computer Programming</div>
              <div class="section-title">Academy of Internet Development</div>

              <div class="list-group" id="classroommgmtplan">
                  <a href="docs/CourseDescriptionsCompSci2015.pdf" target="_blank" class="list-group-item">Classroom Management Plan - Download, sign, and return by 8/20/15</a>
              </div>

              <img src="images/WebmasterTitleIcon.png" alt="Webmaster CTE" class="img-responsive" id="webmaster">

              <h3>What the class is:</h3>
              <ul>
                  <li>This class is designed to provide the necessary skills and training for an entry-level
                      position in the field of Web Programming &amp; Design.
                  </li>
                  <li>The class focuses on web page planning, design, layout and construction and setup and
                      maintenance of a web site. HTML5, JavaScript, WebGL and various web page and image creation
                      tools are also covered.
                  </li>
                  <li>Students maintain the school website</li>
              </ul>
              <h3>What the class teaches:</h3>
              <ul>
                  <li>What elements used to create web pages</li>
                  <li>Linking web pages together into a website</li>
                  <li>Navigation between web pages</li>
                  <li>Creating images for websites</li>
                  <li>Adding forms and other interactive
                      elements to a web page
                  </li>
                  <li>Creating a wire frame of the initial</li>
                  ideas and designs of a website
                  <li>Testing and incrementally improving
                      a website
                  </li>
              </ul>
              <h3>Benefits of taking the class:</h3>
              <ul>
                  <li>To learn a job skill of developing
                      Websites and Web Applications
                  </li>
                  <li>To advance your career goals</li>
                  <li>To create a personal portfolio to
                      show to colleges or potential employers
                  </li>
                  <li>To prepare for advanced career training
                      at colleges
                  </li>
                  <li>To develop the skills to create
                      online games, personal information
                      or hobby websites, or starting their own online business
                  </li>
              </ul>

              <img src="images/APCompSciTitleImage.png" alt="AP Computer Science" class="img-responsive" id="apcompsci">

              <h3>What the class is:</h3>
              <ul>
                  <li>AP Computer Science A is equivalent to a first-semester, college level course in computer
                      science. The course introduces students to computer science using a
                      College Board approve MOOC (Massive Open Online Course)
                  </li>
                  <li>This includes fundamental topics that like problem solving, design strategies and
                      methodologies, organization of data (data structures), approaches to processing data
                      (algorithms), analysis of potential solutions, and the ethical and social implications of
                      computing
                  </li>
                  <li>The course emphasizes both object-oriented and imperative problem solving and design using
                      Java language. These techniques represent proven approaches for developing solutions that
                      can scale up from small, simple problems to large, complex problems
                  </li>
              </ul>
              <h3>What the class teaches:</h3>
              <ul>
                  <li>Design, implement, and analyze solutions to problems selecting and using common algorithms
                  </li>
                  <li>Use data structures to solve new problems, (e.g. primitive data types, Strings, Classes,
                      Lists, Arrays)
                  </li>
                  <li>Write solutions in an object-oriented paradigm</li>
                  <li>Write, run, test, and debug solutions in the Java programming language, library classes, and
                      interfaces
                  </li>
              </ul>
              <h3>Benefits of taking the class:</h3>

              <p>
                  Students can use such software application development skills to start their own online
                  business, understand and communicate with technically minded co-workers, improve corporations'
                  own business software, create games, analyze big data, control robots, etc. using concepts of
                  logic, data, input, output, and storage to solve abstract and real world challenges.
              </p>

              <img src="images/ExcCompSciTitleImage.png" alt="Exploring Computer Science" class="img-responsive" id="ecs">

              <h3>What the class is:</h3>
              <ul>
                  <li>Exploring Computer Science is a part of a national effort to increase the youth's
                      understanding of computer science concepts for more advanced courses and for careers and/or
                      personal digital skills
                  </li>
                  <li>Students utilize a variety of tools/platforms, and culminate with final projects</li>
                  <li>Ethical and social issues in computing, and careers in computing, are explored</li>
              </ul>
              <h3>What the class teaches:</h3>
              <ul>
                  <li><strong>Human Computer Interaction</strong> - input, output, memory, storage, processing,
                      software, and the operating system
                  </li>
                  <li><strong>Problem Solving</strong> - algorithmic problem-solving, including the problem
                      statement and exploration, examination of sample instances, design, program coding, testing,
                      and verification
                  </li>
                  <li><strong>Web Design</strong> - develop by expanding knowledge of programming and web page
                      design and documentation for users and equipment
                  </li>
                  <li><strong>Programming</strong> - basic issues associated with program design and development.
                      Students design algorithms and programming solutions logic, functions, parameters, objects
                      and classes, structured programming and event-driven programming
                  </li>
                  <li><strong>Computing and Data Analysis</strong> - managing and interpreting data, translate,
                      process and visualize data to find patterns and test hypotheses.
                  </li>
                  <li><strong>Robotics</strong> - apply previously learned topics to robotics and work in small
                      groups to build and program a Lego robot to perform a required task using sensors and
                      manipulators.
                  </li>
              </ul>

              <img src="images/SimClubTitleIcon.png" alt="Simulations and Game Development Club" class="img-responsive" id="simclub">

              <ul>
                <li>High School is about making the invisible domains of our world visible and usable, such as
                    literature, human nature, science, physics, mathematical relationships, foreign culture,
                    law, psychology, career, health, or economics
                </li>
                <li>Computer systems and the visual, broadcast, and performing arts bring these to life and to
                    our attention
                </li>
                <li>Soon simulations and serious games, like the computer generated visuals in documentaries do,
                    illustrate the invisible for a deeper, immersive understanding of our world around us
                    including its systems made up of many levels of subsystems
                </li>
                <li>Students will use professional game development tools to describe subjects they’re learning
                    about as well as depict and play in worlds they imagine
                </li>
                <li>Students will participate in exhibiting their acquired skills and achievements in <strong>SkillsUSA</strong>
                    and <strong>Entrepreneurial</strong> regional contests
                </li>
                <li>
                    Students will learn the programming, artistic and design aspects to game development.
                </li>
                <li>
                    Students will learn about the various paths and careers in the Video Game Industry.
                </li>
                <li>
                    Students will learn about creating video games independently to sell on their own.
                </li>
                <li>
                    The programming focused club can be found <a href="http://sshsgamedev.tinycountrygames.com/" target="_blank">here/</a>.
                </li>
            </ul>

            <div class="row">
              <div class="col-xs-12">
                <div class="section-title" id="cert">Certification Requirements</div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">Academy of Computer Programming</div>
                  </div>
                  <div class="panel-body">
                    <div class="col-xs-6 acadSec">
                      Suggested Course of Study
                      <a href="docs/Academy-of-Computer-Programming-14-15-2019.pdf"><img src="images/Academy-of-Computer-Programming-14-15-2019-icon.png" alt="Comp Sci Course of Study" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-6 acadSec">
                      Certification Requierments
                      <a href="docs/Certification-Computer-Programming-2019.pdf"><img src="images/Certification-Computer-Programming-Icon.png" alt="Comp Sci Certification Requirements" class="img-responsive"></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">Academy of Internet Development</div>
                  </div>
                  <div class="panel-body">
                    <div class="col-xs-6 acadSec">
                      Suggested Course of Study
                      <a href="docs/Academy-of-Internet-Dev-Course-of-Study-14-15-2019.pdf"><img src="images/Academy-of-Internet-Dev-Course-of-Study-14-15-2019-icon.png" alt="Internet Course of Study" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-6 acadSec">
                      Certification Requierments
                      <a href="docs/Certification-Internet-Development-2-19.pdf"><img src="images/Certification-Internet-Development-icon.png" alt="Internet Certification Requirements" class="img-responsive"></a>
                    </div>
                  </div>
                </div>
              </div>

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
