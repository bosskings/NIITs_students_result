<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/assets/bootstrap-5.3.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="icon" href="/images/niit/niit-logo.png">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="/css/niit/nav-foot.css">
  <link rel="stylesheet" href="/css/niit/contact.css" />
  <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/css/niit/mobile.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <title>contact</title>
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
          <li><a href="{{ route('courses') }}"> Courses</a></li>
          <li><a href="{{ route('diploma') }}">Diploma</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('contact') }}" style="color: #f9b689;">Contact Us</a></li>
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
              <li> <a href="{{ route('courses')}}">Courses</a></li>
              <li><a href="{{ route('diploma') }}">Diploma</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('contact') }}" style="color: #f9b689;">Contact us</a></li>
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

  <section class="i-mgmtbg">
    <div class="content">
      <h1 class="heading">Contact Us</h1>
    </div>
  </section>

  <!-- Mid section -->
  <section class="container-lg  mt-5 contact-sec">
    <div class="p-3">
      <div class="text-center">
        <p>Any questions or remarks? just write us a message!</p>
      </div>
    </div>

    <div class="contact row  justify-content-center col-12" id="topper">
      <div class="reveal left-side col-lg-5 col-sm-12" id="leftside">
        <div class=" col-lg-10 col-sm-12 contact-info">
          <div>
            <div class="contact-left-head">
              <h4 class="">Contact Information</h4>
              <p>Say something to start a live chat!</p>
            </div>

            <div class="contact-sub">
              <i class="fa-solid fa-phone-volume pe-2"></i>
              <p>+234-915-311-0525</p>
              <p>+2340-806-962-5113</p>
            </div>

            <div class="contact-sub">
              <i class="fa-solid fa-envelope pe-2"></i>
              <p>niitportharcourtenquiries@gmail.com</p>
            </div>

            <div class="contact-sub">
              <i class="fa-solid fa-location-dot pe-2"></i>
              <p>No1 Kaduna street, Dline, Portharcourt </p>
            </div>
            <div class="contact-socials">
              <!--<i class="fa-brands fa-twitter p-2"></i>
              <i class="fa-brands fa-instagram p-2"></i>
              <i class="fa-brands fa-discord p-2"></i>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-1 ">

      </div>

      <div class="col-lg-6  reveal col-sm-12">
        <form>
          <div class="form_container row">
            <div class="p-3 col-lg-5 col-sm-11">
              <label for="">First Name</label><br />
              <input class="col-12 p-3 rounded contact-input" type="text" placeholder="Name"  />
            </div>

            <div class="p-3 col-lg-5 col-sm-11">
              <label for="">Last Name</label><br />
              <input class="col-12 p-3 rounded contact-input" type="text" placeholder="Last name"  />
            </div>

            <div class="p-3 col-lg-5 col-sm-11">
              <label for="">Email</label><br />
              <input class="col-12 p-3 rounded contact-input" type="email" placeholder="Email"  />
            </div>

            <div class="p-3 col-lg-5 col-sm-11">
              <label for="">Phone Number</label><br />
              <input class="col-12 p-3 rounded contact-input" type="number" placeholder="Phone number" />
            </div>

            <!-- radio buttons -->
            <p>Select subject?</p>
            <div class="contact-radio">

              <div class="radios">
                <input type="radio" name="checked" class="radio-input " /> General Inquiry

              </div>

              <div class="radios">
                <input type="radio" name="checked" class="radio-input " /> General Inquiry


              </div>

              <div class="radios">
                <input type="radio" name="checked" class="radio-input " /> General Inquiry


              </div>

              <!-- <div class="radios"> 
                                <input type="radio" name="checked" class="radio-input" />  General Inquiry
                              </div> -->
            </div>

          </div>

          <div>
            <p>Message</p>
            <input type="text" placeholder="Write your message." class="message">
          </div>

          <div class="btn-div">
            <button class="send-button mt-3">Send Message</button>
          </div>

        </form>
      </div>

    </div>

    </div>
  </section>
  <!-- map -->
  <div class=" reveal pt-5 " id="map-img">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.827602929304!2d6.998372474351779!3d4.799633240793281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce9916e52ea1%3A0xb2fcd0d9cd360047!2sNIIT%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1701685653950!5m2!1sen!2sng"
      class="cols-12 col-md-12 col-sm-12" width="100%" height="100%" style="border:0; " allowfullscreen=""
      loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
          <p>niitportharcourtinquires @gmail.com</p>
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

  <!-- footer-->
  <!-- Remove the container if you want to extend the Footer to full width. -->


  <!-- End of .container -->


</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="/js/niit/scroll.js"></script>
<script src="/js/niit/contact.js"></script>
<script src="/js/niit/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</html>