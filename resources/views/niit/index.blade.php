<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Home Page</title>
  <link rel="icon" href="/images/niit/niit-logo.png">
  <link rel="stylesheet" href="/assets/bootstrap-5.3.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="/css/niit/index.css">
  <link rel="stylesheet" href="/css/niit/nav-foot.css">
  <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/css/niit/mobile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="/assets/owlcarousel/dist/assets/owl.carousel.css">
  <link rel="stylesheet" href="/assets/owlcarousel/dist/assets/owl.carousel.min.css">


</head>

<body class="bg-light">





  <div>
    <section class="sidebar1 box-shadow">
      <div class="menu-sec">
        <div></div>
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>

      <ul>
        <div>
          <li><a href="{{ route('home') }}" style="color: #f9b689;">Home</a></li>
          <li><a href="{{ route('courses') }}">Courses</a></li>
          <li><a href="{{ route('diploma') }}">Diploma</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="{{ route('login') }}">Account</a></li>
        </div>
      </ul>
    </section>
    <nav class="p-2 box-shadow">
      <div>
        <ul>
          <div class="nav1">
            <div class="burger-container">
              <div><i class="menu-bar bars fa-solid fa-bars"></i></div>
              <a href="index.html" class="NIIT">
                <h1 class="active">
                  <img src="/images/niit/niit-logo.png" height="70px" alt="">
                </h1>
              </a>
            </div>


            <div class="nav-sub">
              <li> <a href="{{ route('courses') }}">Courses</a></li>
              <li><a href="{{ route('diploma') }}">Diploma</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('contact') }}">Contact us</a></li>
            </div>
            <div class="nav-sub">
              <li> <i class="fa-solid fa-user pe-2"></i><a href="{{ route('login') }}">Account</a></li>
              <div class="search">
                <input type="text" placeholder="search...">
                <a href="" id="search">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </ul>
      </div>
    </nav>
  </div>

  <header class="owl-carousel header">
    <section class="slide-1 niit-text-img">
      <div class="content col-12 row">
        <div class="text text1 p-lg-5  col-6">
          <div class="context" style="width: 100%;">
            <div>
              <h1>FOSTERING EDUCTIONAL EXCELLENCE BY EMPOWERING MINDS</h1>
              <p>Discover the pinnacle of computer education excellence with our innovative programs. Immerse yourself
                in cutting-edge courses meticulously crafted to equip you with the skills demanded by today's dynamic in
                tech. Elevate your expertise and confidently navigate the ever-evolving digital realm with our unrivaled
                educational offerings.</p>
            </div>


          </div>

          <a href="Courses.html" class="butn">Check Courses</a>
          <a href="About us.html" class="btn2">Learn More</a>
        </div>

        <div class="image col-4">
        </div>
      </div>
    </section>
    <section class="slide-2 niit-text-img">
      <div class="content col-12 row">
        <div class="text text2 p-lg-5  col-6">
          <div class="context chc" style="width: 100%;">
            <div>
              <h1>BOOST PROGRAMMING LANGUAGE SKILLS WITH EFFICIENCY </h1>
              <p>Embracing coding cultivates an expansive career outlook, fostering adaptability amid the constant
                evolution of the digital sphere. It streamlines efficiency, bolsters functionality, fortifies security,
                and ensures compatibility, empowering developers to spearhead groundbreaking solutions that catalyze
                innovation across various industries</p>
            </div>
          </div>

          <a href="Courses.html" class="butn">Check Courses</a>
          <a href="About us.html" class="btn2">Learn More</a>
        </div>

        <div class="image col-4">
        </div>
      </div>
    </section>
    <section class="slide-3 niit-text-img">
      <div class="content col-12 row">
        <div class="text text3 p-lg-5  col-6">
          <div class="context chc" style="width: 100%;">
            <div>
              <h1>BAG YOUR DIPLOMA IN ANY COURSE THAT PIQUES YOUR INTEREST </h1>
              <p>Diploma degrees have fewer subjects than degree courses, enabling working students to pursue part-time
                studies. This flexibility accommodates their schedules, allowing for skill enhancement alongside
                professional responsibilities. Thus, working students can opt for part-time diploma courses, balancing
                education with work commitments effectively.</p>
            </div>
          </div>

          <a href="courses.html" class="butn">Check Courses</a>
          <a href="About us.html" class="btn2">Learn More</a>
        </div>

        <div class="image col-4">
        </div>
      </div>
    </section>
  </header>


  <!-- Emma -->
  <div id="container clear-fix ">

    <div class="vid px-4">
      <div class="pic reveal  text-muted">
        <div class="p-2">
          <h2 class="text-center py-3">
            Who We Are
          </h2>
          <center>
            <div class="col-12  vid-sm">
              <video width="100%" height="100%" controls>
                <source src="/images/niit/Welcome.mp4" type="video/mp4">
              </video>
            </div>
          </center>

          <p>
            <center>
              Our story began on a rainy, monsoon evening in Mumbai over endless cups of tea, way back in 1981. Two
              engineering graduates from the Indian Institute of Technology, New Delhi were envisioning the future of
              Information Technology training and founded a company that is now considered the crucible of Indian's IT
              revolution. By imparting Information Technology education to non-technical graduates, NIIT revolutionized
              the technology landscape in India, and now; globaly.
            </center>
          </p>
        </div>
        <div class="col-5 vid-lg">
          <video width="100%" height="100%" controls>
            <source src="/images/niit/Welcome.mp4" type="video/mp4">
          </video>
        </div>


      </div>
    </div>

    <div class="ender reveal">

      <h1 class="Ser  col-12">
        Our Features and Services
      </h1>
      <div class="row  ps-3 col-12 serv">

        <div class="p-3 reveal col-md-4 col-sm-6">
          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-2">
                <i class="fa fa-key" aria-hidden="true"></i>
              </h1>

              <div class="ps-3">
                Experience
              </div>
              <p>
                We have been present in Nigeria for over 20 years. During this period of time we have trained thousand
                of students across Nigeria and the world at large. Students are able to perform very well in whichever
                company the find themselves.
              </p>
            </div>
          </div>
        </div>


        <div class="p-3 reveal col-md-4 col-sm-6">

          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-3">
                <i class="fa fa-television" aria-hidden="true"></i>
              </h1>
              <div class="ps-3">
                Online classes
              </div>
              <p>
                The classes conducted online on NIIT digital are live sessions. Internet connectivity, web cam and mic
                enabled headphones ensures the communication is two way, where the learner can pose questions to the
                faculty and the faculty can address them in real time.
              </p>
            </div>

          </div>
        </div>

        <div class="p-3 reveal col-md-4 col-sm-6">

          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-3">
                <i class="fa fa-trophy" aria-hidden="true"></i>
              </h1>
              <div class="ps-3">
                Get Certificate
              </div>
              <p>
                This platform also provides placement assistance to all students. Students who complete the entire Game
                Development course online also acquire a certificate at the end of the course, Globally recognized
                certification.
              </p>
            </div>

          </div>
        </div>

        <div class="p-3 reveal col-md-4 col-sm-6">
          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-3">
                <i class="fa fa-user" aria-hidden="true"></i>
              </h1>
              <div class="ps-3">
                Expert Trainers
              </div>
              <p>
                With dedicated master trainers for competence management, we upskill and certify the trainers pool to
                ensure 100% trainer cross-skilling and utilization as well as a pedagogical relationship with their
                students.
              </p>
            </div>

          </div>
        </div>

        <div class="p-3 reveal col-md-4 col-sm-6">
          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-3">
                <i class="fa fa-certificate" aria-hidden="true"></i>
              </h1>
              <div class="ps-3">
                Great Result
              </div>
              <p>
                There's no one willing to learn that leaves NIIT the same way they came. And also, upon completion of a
                programme, the the individual is awarded a certificate.
              </p>
            </div>

          </div>
        </div>

        <div class="p-3 reveal col-md-4 col-sm-6">
          <div class="stor bg-light p-2">

            <div class="inner">
              <h1 class="ps-3">
                <i class="fas fa-money-bill-wave"></i>
              </h1>
              <div class="ps-3">
                Quality
              </div>
              <p>
                NIIT boasts of quality training and students learn in a very condusive environment; High quality
                services, customer satisfaction, reliability, innovation, professionalism define our firm.
              </p>
            </div>

          </div>
        </div>


      </div>


    </div>
  </div>

  <!-- Emmanuel -->

  <div class="parentcontainer ">

    <div class="reveal">
      <h1 class=" course">Our Courses</h1>
      <div class="list col-10 m-auto">
        <a class="col-sm-4 col-lg-2 lister" id="Top_R" onclick="Acordion('.Devs')"> Programming </a>
        <a class="col-sm-4 col-lg-2 lister" id="Devs" onclick="Acordion('.Top_R')"> Foundation-Courses</a>
        <a class="col-sm-4 col-lg-2 dat lister" onclick="Acordion('.Desi')"> Database</a>
        <a class="col-sm-4 col-lg-2 lister" id="Graph" onclick="Acordion('.Graph')"> Networking </a>
        <a class="col-sm-4 col-lg-2 lister" id="Prog" onclick="Acordion('.Prog')"> Mulit-media</a>
        <a class="col-sm-4 col-lg-2 lister" id="Mark" onclick="Acordion('.Mark')"> Other Programmes</a>

      </div>
    </div>



    <div class="reveal Detais px-3">

      <div class="Devs Roddy">

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Java.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  programming

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">JAVA</h2>
                  <span class="contentText">Dive into Java programming with our dynamic course. From basics to advanced
                    concepts, learn object-oriented programming, data structures, GUI development, and more. Gain
                    practical skills for developing robust applications and expand your career opportunities in the
                    ever-evolving tech industry. </span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Mobile.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  programming

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Mobile App Development</h2>
                  <span class="contentText">Program focuses on application level APLs and imparts skills to develop
                    users and data-centric mobile app and utilities on the android platform. Skills in android app
                    development, working with graphics, multi media, conectivity and location-based services. Learn to
                    debug, deploy and test mobile application.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>


        <div class="col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Phython.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Programming

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Python</h2>
                  <span class="contentText">A generic qualification in database technology can be a good foundtation for
                    a career, but less likely to appeal to employers than certification from one of the big suppliers.
                    Each stage in the progression from junior to advanced certification involves training and
                    examination fees that can total thousands of pounds. IBM's DB2 is the cheapest and simplest of the
                    market leaders.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>

      <div class="Top_R Roddy">
        <div class="col-sm-10  col-lg-6 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/marketing.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">


            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Foundation Courses

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Management Information System</h2>
                  <span class="contentText">The Management Information Skills enables learners with complete hands-on
                    skills for Microsoft Office and MIS functions, within the organization and how it needs to be
                    projected to the senior management. Earning a Master of Science in Management Information Systems
                    can put professionals on the right part to become CIO's, Information System Managers, IT directors
                    and more.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class=" col-sm-10 col-lg-6 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Office.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Foundation Courses

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">OFFICE</h2>
                  <span class="contentText">Office 2013 is a suite of eleven applications, though some editions do not
                    include all of them;
                    These are: Access, Excel, InfoPath, OneNote, Outlook, PowerPoint, Project, Lync, Publisher, Visio
                    and Word. All have been reworked with a Metro-style user interface. LEarning OFFICE 2013 will give
                    you a complete knlowedge of basic and advance Microsoft office.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="Desi Roddy">

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/BigData.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Database

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Big Data</h2>
                  <span class="contentText">As more and more data is available to businesses, they require professionals
                    with the skills to break it down: demand for big data staff is continuing to grow by up to 29% per
                    annum (TechTarget 2019). Throughout our Online MBA with Data Analytics, you’ll gain an understanding
                    of the entire life cycle of big data: capturing, organising, analysing, drawing conclusions and
                    taking strategic action to gain leverage or a competitive advantage..</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Analytics.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Database

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Data Analytics</h2>
                  <span class="contentText">Research shows that data cleaning and preparation accounts for around 80% of
                    the work of data professionals. This makes it perhaps the key skill for anyone serious about getting
                    a job in data.Commonly, a data analyst will need to retrieve data from one or more sources and
                    prepare the data so it is ready for numerical and categorical analysis. Data cleaning also involves
                    handling missing and inconsistent data that may affect your analysis.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>


        <div class="col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Oracle.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Database

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Oracle</h2>
                  <span class="contentText">A generic qualification in database technology can be a good foundation for
                    a career, but less likely to appeal to employers than certification from one of the big suppliers.
                    Each stage in the progression from junior to advanced certification involves training and
                    examination fees that can total thousands of pounds. IBM's DB2 certification is cheapest and
                    simplest of the market leaders.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>

      <div class="Graph Roddy">
        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/cisco.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Networking

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Cisco</h2>
                  <span class="contentText">Achieving CCNA certification is the first step in preparing for a career in
                    IT technologies. To earn CCNA certification, you pass one exam that covers a broad range of
                    fundamentals for IT careers, based on the latest networking technologies, software development
                    skills, and job roles. CCNA gives you the foundation you need to take your career in any
                    direction.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/DevposEng.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Networking

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Microsoft system engineering</h2>
                  <span class="contentText">Embark on a journey into Microsoft System Engineering through our
                    comprehensive course. Explore key concepts including network infrastructure, server administration,
                    Active Directory management, and cloud integration. Develop the skills needed to design, implement,
                    and maintain robust IT systems, empowering organizations to thrive in the digital era.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>


        <div class="col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Networking.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Networking

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Hardware and Networking</h2>
                  <span class="contentText">This is a course on how to install, upgrade, repair, configure, optimize,
                    troubleshooting, and perform preventive, maintainance on basic PC hardware and OS. Also will help
                    identifying and describing all the major networking technologies, systems, skills and tools used in
                    modern PC-based computer networks.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>

      <div class="Prog Roddy">
        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Web-Des.jpg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Mulit-media

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Web Design</h2>
                  <span class="contentText">
                    The web design course focuses on creating visually appealing and user-friendly websites. Students
                    learn HTML, CSS, and design principles to craft responsive and engaging interfaces. Topics include
                    typography, color theory, and UI/UX design concepts. With hands-on projects, students apply their
                    skills to create professional-grade websites. Graduates emerge with a strong understanding of web
                    design fundamentals, ready for careers as web designers in various industries.
                  </span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/WebDev.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Multi media

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Web Dev</h2>
                  <span class="contentText">The web development course equips students with front-end and back-end
                    skills to create dynamic websites and applications. Topics include HTML, CSS, JavaScript, and
                    server-side programming languages like PHP or MySql. Students learn database integration, version
                    control, and deployment strategies for real-world projects. Through hands-on experience and
                    projects, they build a portfolio demonstrating proficiency in web development. Graduates are
                    prepared for careers as web developers, equipped with essential skills for the digital age.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>


        <div class="col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/PS.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Multi media

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Graphic Design</h2>
                  <span class="contentText">The graphic design course covers fundamental principles and software skills
                    essential for creating impactful designs. Students learn typography, color theory, layout, and Adobe
                    software proficiency. Topics include branding, logo design, and UI design for diverse career paths.
                    Through projects and critiques, students refine skills and build portfolios. Upon completion,
                    students are equipped for careers in advertising, design studios, or freelancing with expertise in
                    visual communication and digital design tools.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>

      <div class="Mark Roddy">

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/Progman.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Other Courses

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Program Management</h2>
                  <span class="contentText">This program builds on your IT foundations to help you take your career to
                    the next level. It’s designed to teach you how to program with Python and how to use Python to
                    automate common system administration tasks. You'll also learn to use Git and GitHub, troubleshoot
                    and debug complex problems, and apply automation at scale by using configuration management and the
                    Cloud.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class=" col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/DigMar.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  Other Courses

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">Digital Marketing</h2>
                  <span class="contentText">LDigital marketing allows you to compete with your competition by exposing
                    you to a wider audience on a much smaller advertising budget. Digital marketing actually allows
                    smaller businesses the ability to hold a top-ranking position. When managed effectively, it gives
                    businesses laser-focused control over where and how they spend their money. When you have this kind
                    of control and the data to support decisions, you make smarter ones.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>

        </div>


        <div class="col-sm-10 col-lg-4 box">

          <div class="child">
            <div class="contentImg">
              <img src="/images/niit/Courses/ITIL.jpeg" alt="" width="100%" height="100%" style="border-radius: 8px;">

            </div>
            <div class="contentDetails">
              <div class="imgBtn">
                <button>
                  other Courses

                </button>
              </div>
              <div class="contentDesc">
                <section>
                  <h2 class="contentHeader">ITIL</h2>
                  <span class="contentText">Our ITIL tech course encompasses a comprehensive exploration of IT service
                    management principles, including service strategy, design, transition, operation, and continual
                    service improvement. Participants will delve into vital topics such as service desk management,
                    change management, incident response, and effective implementation of the ITIL framework for
                    optimized organizational performance.</span>
                </section>
                <div class="rating">
                  <span>****</span>
                </div>
                <div class="price">
                  <span></span>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>




      <div class="row SeeMore">
        <div class=" col-12 my-5 ">
          <button class=" m-auto butn text-light p-2 col-5 col-lg-2"><a href="Courses.html">See more</a></button>
        </div>
      </div>


    </div>

    <button id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


    <!-- kamsie -->
    <footer>
      <div class="col-12 foot col-md-12">
        <div class="center col-12">THE WEB DESIGNERS</div>

        <!-- profile name -->
        <div class="mainchild">

          <div class="imgft col-md-2i"><img src="/images/niit/people/emmaBriggs.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/michael.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/kamsie6.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/emmanuel.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/chita.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/favour1.JPG" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/bright.jpg" class="faves"></div>
          <div class="imgft col-md-2i"><img src="/images/niit/people/Divine.png" class="faves"></div>

        </div>

        <hr>


        <div class="parentDiv col-12">
          <div class="shr">
            <h2>Reach Us</h2>
            <p>(+234) 806 962 5113</p>
            <p>niitportharcourtinquires@gmail.com</p>
            <p>inquires@niit-ph.com</p>
            <p>1 Kaduna Street, Port Harcourt, Nigeria</p>
          </div>

          <div>
            <h2>Company</h2>
            <p> <a href="About us.html">About us</a></p>
            <p> <a href="Contact.html">Contact Us</a></p>
          </div>

          <div>
            <h2>Executives</h2>
            <p> <a href="About us.html#staff">Faculties</a> </p>
            <p> <a href="About us.html#management"> Management</a></p>
            <p><a href="About us.html#testimonials">Testimonials</a></p>
          </div>


          <div class="newsl">
            <h2>Join Our Newsletter</h2>
            <div>
              <input type="email" id="text">
              <button class="sub">Submitt</button>
            </div>
            <p>Will send you weekly updates for your better tool management.</p>
          </div>
        </div>



      </div>
    </footer>
</body>

<script src="/js/niit/scroll.js"></script>
<script src="/js/niit/script.js"></script>
<script src="/js/niit/contact.js"></script>
<script src="/assets/owlcarousel/docs_src/assets/vendors/jquery.min.js"></script>
<script src="/assets/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true
  });
</script>




</html>