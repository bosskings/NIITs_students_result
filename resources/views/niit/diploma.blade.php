<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diploma</title>
  <link rel="icon" href="/images/niit/niit-logo.png">
  <link rel="stylesheet" href="/assets/bootstrap-5.3.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="/css/niit/diploma.css">
  <link rel="stylesheet" href="/css/niit/nav-foot.css">
  <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/css/niit/mobile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


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
          <li><a href="{{ route('courses') }}">Courses</a></li>
          <li><a href="{{ route('diploma') }}" style="color: #f9b689;">Diploma</a></li>
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
              <li> <a href="{{ route('courses') }}">Courses</a></li>
              <li><a href="{{ route('diploma') }}" style="color: #f9b689;">Diploma</a></li>
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

  <section class="niit-body">
    <div class="content">
      <h1 class="heading">B.SC DIPLOMA</h1>
    </div>
  </section>

  <main>
    <section class="diploma-course">
      <div class="s-dev reveal">
        <h2>BSc in Software Development</h3>
          <h3>NIIT Port-Harcourt</h4>
            <div class="tags">
              <p><i class='bx bxs-graduation'></i>Bsc</p>
              <p><i class='bx bxs-time'></i>Full Time</p>
              <p><i class='bx bx-loader-alt'></i>2 years</p>
              <!-- <p><i class='bx bxs-buildings'></i>On Campus</p> -->
              <p><i class='bx bxs-chat'></i>English</p>
            </div>
            <p>Unlock your future with MMS Software Engineering—transformative 2-year diploma for immediate professional
              success. Dual-qualification options with your graduation degree. Blend core skills, grooming, and modern
              expertise to enhance your academic journey.</p>
            <button class="btn" onclick="showMore('drop1')">Read More</button>

            <section class="diploma-course drop1">
              <div class="s-devs">
                <h2 class="course-name">SOFTWARE DEVELOPMENT
          </h3>
          <p>MMS Software Engineering is a dynamic 2-year intensive diploma program meticulously crafted to prepare
            college students for a seamless transition into the professional realm, ensuring they graduate job-ready.
            Uniquely offering dual qualification alongside a graduation degree, MMS curates a holistic skill set,
            blending core domain expertise, professional refinement, and contemporary skills to complement each
            student's academic pursuits.</p>
          <p>This program prioritizes hands-on learning, bridging the gap between theory and practical application
            through industry-aligned projects. With specialized tracks available, graduates not only earn a recognized
            diploma but also gain a competitive edge in diverse career pathways, from software development to leadership
            roles, setting the stage for a successful professional journey in the tech industry.</p>
          <h3 class="course-content">Course Contents</h3>
          <div class="semester-container">
            <h5 class="semester">Semester 1</h3>
              <p>Logic building and effective problem solving.</p>
              <p>RDBMS Essentials & T-SQL Programming.</p>
              <p>Programming with python.</p>
          </div>
          <div class="semester-container">
            <h5 class="semester">Semester 2</h3>
              <p>Programming in java.</p>
              <p>Developing web applications using servlets & JSP.</p>
              <p>Automated Testing using JUNIT.</p>
          </div>
          <div class="semester-container">
            <h5 class="semester">Semester 3</h3>
              <p>Developing mobile apps on the Android platform</p>
              <p>Implementing JSF, hibernate, and Spring in Java EE Application.</p>
              <p>Intro to source control-GIT, Github.</p>
          </div>
          <div class="semester-container">
            <h5 class="semester">Semester 4</h3>
              <p>Responsive web design using HTML5 & Jquery.</p>
              <p>Representational state transfer(REST), AngularJ5 and REACT.</p>
              <p>Test driven development in java, JQuery UI Development.</p>
          </div>
          <div class="semester-container">
            <h5 class="semester">Semester 5</h3>
              <p>Deploying cloud app using Google app engine.</p>
              <p>Dev ops.</p>
              <p>Project -- 1 [Ecommerce Portal].</p>
              <p>Project -- 2 [Collaboration Platform].</p>
              <button class="btn" onclick="showLess('drop1')">Show Less</button>
          </div>
      </div>
    </section>

    </div>

    <div class="s-dev reveal">
      <h2>BSc in Infrastructure Management</h3>
        <h3>NIIT Port-Harcourt</h4>
          <div class="tags">
            <p><i class='bx bxs-graduation'></i>Bsc</p>
            <p><i class='bx bxs-time'></i>Full Time</p>
            <p><i class='bx bx-loader-alt'></i>2 years</p>
            <!-- <p><i class='bx bxs-buildings'></i>On Campus</p> -->
            <p><i class='bx bxs-chat'></i>English</p>
          </div>
          <p>Embark on the Master Mind Series – Infrastructure Management program for a strong foundation in networking,
            enterprise solutions, and security. Specialize in Linux or Microsoft with NIIT's unique opportunity.</p>
          <button class="btn" onclick="showMore('drop2')">Read More</button>

          <section class="diploma-course drop2" >
            <div class="s-devs">
              <h2 class="course-name">INFRASTRACTURE MANAGEMENT
                </h3>
                <p>The Master Mind Series – Infrastructure Management program is a comprehensive initiative designed to cover
                  networking fundamentals, enterprise network solutions management, security solutions management, and more.
                  This program ensures a strong foundation in these key areas, offering participants an opportunity to
                  specialize in either the Linux or Microsoft platform. NIIT's tailored approach allows learners to align their
                  education with specific interests, providing a well-rounded skill set for success in infrastructure
                  management. Join us for a transformative educational journey in this dynamic field.</p>
                <h3 class="course-content">Course Contents</h3>
                <div class="semester-container">
                  <h5 class="semester">Semester 1</h3>
                    <p>Working smart with Microsoft Office and the internet.</p>
                    <p>Installing, configuring ans troubleshooting a Windows PC.</p>
                    <p>RDBMS essentials T-SQL programming</p>
                </div>
                <div class="semester-container">
                  <h5 class="semester">Semester 2</h3>
                    <p>CompTIA network+ protocols and internetworking standards..</p>
                    <p>Enterprise business desktop deployment.</p>
                    <p>Installing and configuring Windows Server 2012.</p>
                </div>
                <div class="semester-container">
                  <h5 class="semester">Semester 3</h3>
                    <p>Administering Windows Server 2012.</p>
                    <p>Configuring advanced Windows Server 2012 services.</p>
                    <p>Microsoft SQL Server 2012: Database administration.</p>
                    <p>CompTIA security +.</p>
                </div>
                <div class="semester-container">
                  <h5 class="semester">Semester 4</h3>
                    <p>IT operations and infrastructure management.</p>
                    <p>Designing and implementing a server infrastructure.</p>
                    <p>Microsoft sharepoint 2013.</p>
                    <p>CompTIA security +.</p>
                </div>
                <div class="semester-container">
                  <h5 class="semester">Semester 5</h3>
                    <p>Security fundamentals and implementation.</p>
                    <p>Introduction to networking design and management.</p>
                    <p>Cloud essentials.</p>
                    <p>Advanced Security Practitioner.</p>
                    <button class="btn" onclick="showLess('drop2')">Show Less</button>
                </div>
            </div>
          </section>
    </div>
    </section>
  </main>

  <button id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


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
          <p> <a href=" {{ route('about') }}">About us</a></p>
          <p> <a href="{{ route('contact') }}">Contact Us</a></p>
        </div>

        <div>
          <h2>Executives</h2>
          <p> <a href="{{ route('about') }}#staff">Faculties</a> </p>
          <p> <a href="{{ route('about') }}#management"> Management</a></p>
          <p> <a href="{{ route('about') }}l#testimonials">Testimonials</a></p>
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

  <script src="/js/niit/scroll.js"></script>
  <script src="/js/niit/contact.js"></script>
  <script src="/js/niit/script.js"></script>
  
</body>

</html>