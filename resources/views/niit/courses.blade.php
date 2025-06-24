<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <link rel="icon" href="/images/niit/niit-logo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="/css/niit/nav-foot.css">
  <link rel="stylesheet" href="/css/niit/courses.css">
  <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/css/niit/mobile.css" />
  <link rel="stylesheet" href="/assets/bootstrap-5.3.2-dist/css/bootstrap.css">

    {{-- meta tags starts --}}

    <meta name="description" content="NIIT PH, niit portharcourt. niitph, niit is a tech institute in portharcourt ">

    <!-- Keywords (optional, low SEO weight) -->
    <meta name="keywords" content="NIIT, niit, niitph, niit-ph, niit.com, niit-ph.com, niit portharcourt, national institue of information technology, tech in port harcourt, technology, ">
  
    <!-- Author -->
    <meta name="author" content="NIIT ">
  
    <!-- Robots (indexing behavior) -->
    <meta name="robots" content="niitph.com">
  
    <!-- Canonical URL (avoids duplicate content issues) -->
    <link rel="canonical" href="https://niitph.com/">
  


</head>

<body>

  <div>
    <section class="sidebar1 box-shadow">
      <div class="menu-sec">
        <div></div>
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>

      <ul>
        <div>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('courses') }}" style="color: #f9b689;"> Courses</a></li>
          <li><a href="{{ route('diploma') }}">Diploma</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="{{ route('encore.login') }}">Account</a></li>
        </div>
      </ul>
    </section>
    <nav class="p-2 box-shadow">
      <div>
        <ul>
          <div class="nav1">
            <div class="burger-container">
              <div><i class="menu-bar bars fa-solid fa-bars"></i></div>
              <a href="{{ route('home') }}" class="NIIT">
                <h1 class="active">
                  <img src="/images/niit/niit-logo.png" height="70px" alt="">
                </h1>
              </a>
            </div>


            <div class="nav-sub">
              <li> <a href="{{ route('courses')}}" style="color: #f9b689;">Courses</a></li>
              <li><a href="{{ route('diploma') }}">Diploma</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('contact') }}">Contact us</a></li>
            </div>
            <div class="nav-sub">
              <li> <i class="fa-solid fa-user pe-2"></i><a href="{{ route('encore.login') }}">Account</a></li>
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

  <!-- michael -->

  <section class="courses-header">
    <div class="course-content">
      <div class="course-text">
        <h3>Our Courses</h3>
        <p>As technology, customer services and education models continue to evolve, customer education organizations
          need to find sustainable ways to improve customer adoption and grow education services revenue. At NIIT, we
          provide means and courses as our portfolio of customer education services helps technology companies elevate
          customer success and learner experience while improving margins and profitability even as technology continues
          to transform.</p>
        <a href="#book" class="butn">View All</a>
      </div>
      <div class="course-img">
        <img src="/images/niit/banner/1UGoec1ATpG1jJn0hyuluw.jpg" alt="">
      </div>
    </div>
  </section>



  <!-- Emmanuel -->


  <div class="hero">
    <div class="main reveal">
      <div class="feature" id="book">
        <h1>Featured Courses</h1>
        <p class="reck">Discover your perfect program in our courses</p>
      </div>
      <div class="but">
        <button class="but1">All Subjects</button>
      </div>
    </div>




    <div class="parent reveal col-md-3 col-sm-12" id="book">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/Java.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Java</div>
          <div class="textimage px-lg-5 px-sm-0">In the I.T INDUSTRY, the program covers concepts of Core Java programming
            setting a foundation for other editions of the programming language. It trains learners to design
            application software for both deskiop and server envirionments using Java. The programme can be taken up for
            School learners for curriculum support or by college learning of Engineering subjects for thorough
            understanding of Java skills or prparing for jobs and Java developer.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/marketing.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Managing Information System</div>
          <div class="textimage px-lg-5 px-sm-0">The Management Information Skills enables learners with complete hands-on
            skills for Microsoft Office and MIS functions, within the organization and how it needs to be projected to
            the senior management. Earning a Master of Science in Management Information Systems can put professionals
            on the right part to become CIO's, Information System Managers, IT directors and more.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/Mobile.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Mobile App Development on Android</div>
          <div class="textimage px-lg-5 px-sm-0">Program focuses on application level APLs and imparts skills to develop
            users and data-centric mobile app and utilities on the android platform. Skills in android app development,
            working with graphics, multi media, conectivity and location-based services. Learn to debug, deploy and test
            mobile application.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/PS.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">PhotoShop</div>
          <div class="textimage px-lg-5 px-sm-0">Grapic Design skills are a hot commodity for creative workers wnho enjoy
            using the right side of their brain. Sure, grapgic design jobs are stimmulating and fun, but they are also
            potentially lucrative. Top performers earn almost $37 per hour, according to the Monster data. In addition,
            graphic designers who climb their way to the position of art director- the person who is responsible for the
            visual style and images in the magazines, newspapers, product packaging, moviesand TV shows- make a median
            salary of more than $83,000 per year.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/Analytics.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Analytics</div>
          <div class="textimage px-lg-5 px-sm-0">Research shows that data cleaning and preperation accounts for around 80%
            of the work of data professionals. This makes it perhaps the key skill for anyone serious about getting a
            job in data. Commonly a data analyst will need to retieve data from one or more sources and prepare the data
            so it is ready for the numerical and categorical analysis. Data cleaning also involves handling missing and
            inconsistent data that may affect your analysis. </div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/BigData.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">BigData</div>
          <div class="textimage px-lg-5 px-sm-0">As more and more data is available to businesses, they require
            professionals with the skill to break it down: Demand for big data staff is continuing to grow by up to 29%
            per annum (Tech Target 2019). Throughout our online MBA with data analytics. You will gain an understanding
            of the entire life cycle of big data: <br> Capturing, organising, analysing, drawing conclusion and taking
            strategic actions to gain leverage or a competitive advantage... </div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/cisco.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Cisco</div>
          <div class="textimage px-lg-5 px-sm-0">Acheiving CCNA certification si the first step for preparing for a career
            in IT technologies. To earn CCNA certification, you pass one exam that covers a broad rangge of fundamentals
            for IT careers, based on the latest networking technologies, software development skills and job roles. CCNA
            gives you the foundation you need to take your career in any direction.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/DigMar.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Digital Marketing</div>
          <div class="textimage px-lg-5 px-sm-0">Digital marketing allows you to compete with your competitions by exposing
            you to wider audience on a much smaller advertising budget. Digital marketing actually allows smaller
            businesses the ability to hold a top-ranking position. When managed effectively. it gives businesses a
            laser-focused control over where and how they spend their money. When you have this kind of control and data
            to support decisions, you make smarter ones.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/ITIL.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">ITIL</div>
          <div class="textimage px-lg-5 px-sm-0">ITIL is a set of practices that imparts pratical and strategic ITSM
            guidiance. (The latest version is ITIL 4) ITIL is used as a guide to help groups improve the value of their
            services by focusing on co-creating business values and solving business issues, rather than just improving
            IT capabilities. Image result for ABOUT ITIL As a service management framework, the overall goal of ITIL is
            to improve service management and optimize values for your customers and your organization.</div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/DevposEng.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Microsoft Certified System Engineer</div>
          <div class="textimage px-lg-5 px-sm-0">Microsoft Certified System Certificatopn Program also known as MCSE is one
            among the popular certifications offered by Microsoft under the Microsoft Certifies Professional
            Certificaton. Microsoft Certified System Engineer program is a 2 - 5months certification level Information
            Technology course. While pursuing the course, candidates will be introduced to the following areas
            regaerdong Mircrosoft Windows operating system related desktop system, networking and Microsoft office
            served products. </div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/Networking.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Networking</div>
          <div class="textimage px-lg-5 px-sm-0">This is a course on how to install, upgrade, repair, configure, optimize,
            troubleshooting and perform preventive, maintainance on basic PC hardware and OS. Also, will help
            identifying and describing all the major networking technologies, systems, skills and tools used in mordern
            PC-based computer networks. </div>
        </div>

      </div>
    </div>

    <div class="parent reveal col-md-3 col-sm-12">
      <div class="child col-12">
        <div class="pics"><img src="/images/niit/Courses/Progman.jpeg" alt="" width="100%" height="100%"></div>
        <div class="prog-p">
          <div class="program">Project Management</div>
          <div class="textimage px-lg-5 px-sm-0">This program builds on your IT foundations to help you take your career to
            the next level. It's designed to teach you how to program with python and how to use python to automate
            common system administration tasks. You'll also learn to use Git and GitHub, troubleshoot, debug complex
            problems and aply automation at scale by using configuration management and the Cloud.</div>
        </div>

      </div>
    </div>




  </div>


  <!-- Kamsie -->
  <div class="col-10 m-auto py-5 reveal kam row">
    <div class="col-5 sect ">
      <img src="/images/niit/diploma.jpg" alt="vs code pic" srcset="" class="col-12">
    </div>
    <div class="col-md-6 txt col-sm-12">
      <h1>The excellent course place for you</h1>
      Revolutionary ICT learning through modern technology and quality service delivery. We aim at equipping a ddynamic
      society through ICT enhanced knowledge and ensuring enterpreneurship and self-reliance.
      <p>
      <div class="col-10 circ-d">
        <div class="circle"></div> Creative study patterns
      </div>
      </p>
      <p>
      <div class="col-10 circ-d">
        <div class="circle "></div> Quick crash courses
      </div>
      </p>
      <p>
      <div class="col-10 circ-d">
        <div class="circle "></div> Certificate awarded
      </div>
      </p>
      <p>
      <div class="col-10 circ-d">
        <div class="circle"></div> Provided with experimental examples
      </div>
      </p>

      <p>
      <div class="courses px-5">COURSES</div>
      </p>

    </div>
  </div>





  <!-- michael -->

  <div class="col-section reveal service">
    <div class="container2">
      <ul class="service-list">
        <li class="service-item">
          <div class="service-card">

            <div class="card-icon insta">
              <a href="#"> <i class="fab fa-instagram"></i></i></a>
            </div>

            <div class="ms-2">
              <h3 class="h4 card-title">Instagram</h3>

              <p class="card-text">
                Instagram.com/NIIT <span></span>
              </p>
            </div>

          </div>
        </li>

        <li class="service-item">
          <div class="service-card">

            <div class="card-icon face">
              <a href="#"> <i class="fab fa-facebook-f"></i></a>
            </div>

            <div class="ms-2">
              <h3 class="h4 card-title">Facebook</h3>

              <p class="card-text">
                Facebook.com/NIIT
              </p>
            </div>

          </div>
        </li>

        <li class="service-item">
          <div class="service-card">

            <div class="card-icon phone">
              <a href="#"><i class="fas fa-phone-alt"></i></a>
            </div>

            <div class="ms-2">
              <h3 class="h4 card-title">Call</h3>

              <p class="card-text">+234-915-311-0525</p>
            </div>

          </div>
        </li>

        <li class="service-item">
          <div class="service-card">

            <div class="card-icon link">
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="ms-2">
              <h3 class="h4 card-title">linkedin</h3>

              <p class="card-text">Linkedin.com/NIIT</p>
            </div>

          </div>
        </li>

      </ul>

    </div>
  </div>

  </section>

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
          <p>niitportharcourtinquires @gmail.com</p>
          <p>1 Kaduna Street, Port Harcourt, Nigeria</p>
        </div>

        <div>
          <h2>Company</h2>
          <p> <a href="{{ route('about') }}">About us</a></p>
          <p> <a href="{{ route('about') }}">Contact Us</a></p>
        </div>

        <div>
          <h2>Executives</h2>
          <p> <a href="{{ route('about') }}#staff">Faculties</a> </p>
          <p> <a href="{{ route('about') }}#management"> Management</a></p>
          <p><a href="{{ route('about') }}#testimonials">Testimonials</a></p>
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
<script src="/js/niit/contact.js"></script>
<script src="/assets/owlcarousel/docs_src/assets/vendors/jquery.min.js"></script>
<script src="/assets/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>