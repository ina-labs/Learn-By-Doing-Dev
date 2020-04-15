@extends('layouts.app')

@section('content')
<main>

    <div class="container">
      <section class="benefit-access row">
        <div class="col-4 benefit d-inline">
          <img src="{{ asset('frontend/images/ic_note.png') }}" alt="">
          100k online course
        </div>
        <div class="col-4 benefit">
          <img src="{{ asset('frontend/images/ic_instructor.png') }}" alt="">
          Instruction expert
        </div>
        <div class="col-4 benefit">
          <img src="{{ asset('frontend/images/ic_lifetime.png') }}" alt="">
          Lifetime access
        </div>
      </section>
    </div>

    <div class="container">
      <section class="choice row mt-5">
        <div class="col-md-6 choice-content">
          <h2>Get a choice of your course</h2>
        </div>
        <div class="col-md-6 choice-content d-inline ml-auto">

          <a href="" class="btn button-course py-2">
            See All Course
          </a>
        </div>

      </section>
    </div>


    <div class="container">
      <section class="card-course row">
        <div class="col-md-4 p-3">
          <div class="card">
            <img src="{{ asset('frontend/images/course-1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="information-course.html">
                <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
              </a>
              <div class="information-course text-center mt-4">
                <div class="row">
                  <div class="col-3 ">
                    <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                    800
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                    600
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                    200
                  </div>
                  <div class="col-3">
                    <div class="instructor-image">
                      <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card">
            <img src="{{ asset('frontend/images/course-2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="#">
                <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
              </a>
              <div class="information-course text-center mt-4">
                <div class="row">
                  <div class="col-3 ">
                    <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                    800
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                    600
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                    200
                  </div>
                  <div class="col-3">
                    <div class="instructor-image">
                      <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card">
            <img src="{{ asset('frontend/images/course-3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="#">
                <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
              </a>
              <div class="information-course text-center mt-4">
                <div class="row">
                  <div class="col-3 ">
                    <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                    800
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                    600
                  </div>
                  <div class="col-3">
                    <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                    200
                  </div>
                  <div class="col-3">
                    <div class="instructor-image">
                      <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>

    <section class="popular-course">

      <div class="container">
        <section class="choice-popular row mt-5">
          <div class="col-md-6 choice-content">
            <h2>Students are choosing</h2>
          </div>
          <div class="col-md-6 choice-content d-inline ml-auto">

            <a href="" class="btn button-course py-2">
              See All Popular Course
            </a>
          </div>

        </section>
      </div>


      <div class="container">
        <section class="card-course-popular row">
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-1.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#">
                  <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>
                <div class="information-course text-center mt-4">
                  <div class="row">
                    <div class="col-3 ">
                      <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                      800
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                      600
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                      200
                    </div>
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-2.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#">
                  <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>
                <div class="information-course text-center mt-4">
                  <div class="row">
                    <div class="col-3 ">
                      <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                      800
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                      600
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                      200
                    </div>
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-3.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#">
                  <h5 class="card-title">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>

                <div class="information-course text-center mt-4">
                  <div class="row">
                    <div class="col-3 ">
                      <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                      800
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_view.png') }}" alt="">
                      600
                    </div>
                    <div class="col-3">
                      <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                      200
                    </div>
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </section>
      </div>

    </section>

    <section class="helping-people">
      <div class="container">
        <div class="helping">
          <div class="row">
            <div class="col-md-6 helping-type d-flex align-items-center text-left">
              <div class="row">
                <div class="col-md-12">
                  <h2>Helping people grow <br>their careers every day !</h2>
                </div>
                <div class="col-md-12 mt-2">
                  <p>
                      Our training materials are easy to edit and <br> customize.
                      We provide them to you in Word and Powerpoint formats so you can make whatever
                      changes you like using Microsoft Office.
                  </p>
                  <a href="" class=" mt-2 btn button-helping-start py-2 px-4">
                    Start Learning
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 helping-image d-none d-md-block">
              <img src="{{ asset('frontend/images/working.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-blog">

      <div class="container">
        <section class="choice-blog row mt-5">
          <div class="col-md-6 choice-content-blog">
            <h2>Read Our Latest Blog</h2>
          </div>
          <div class="col-md-6 choice-content-blog d-inline ml-auto">

            <a href="" class="btn button-blog py-2">
              Explore More Blog
            </a>
          </div>

        </section>
      </div>


      <div class="container">
        <section class="card-blog-popular row">
          
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-1.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="information-blog mt-1 pb-2">
                  <div class="row">
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                      Muhammad Iqbal Aulia Rafi'
                    </div>
                    
                  </div>
                </div>
                

                <a href="#">
                  <h5 class="card-title mt-1">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>
                

              </div>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-2.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="information-blog mt-1 pb-2">
                  <div class="row">
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                      Muhammad Iqbal Aulia Rafi'
                    </div>
                    
                  </div>
                </div>
                

                <a href="#">
                  <h5 class="card-title mt-1">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>
                

              </div>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="card">
              <img src="{{ asset('frontend/images/course-3.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="information-blog mt-1 pb-2">
                  <div class="row">
                    <div class="col-3">
                      <div class="instructor-image">
                        <img src="{{ asset('frontend/images/people.jpg') }}" alt="">

                      </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                      Muhammad Iqbal Aulia Rafi'
                    </div>
                    
                  </div>
                </div>
                

                <a href="#">
                  <h5 class="card-title mt-1">User Experience Design Essentials Adobe XD UI UX Design</h5>
                </a>
                

              </div>
            </div>
          </div>
          
         

        </section>
      </div>

    </section>

    <section class="testimonial-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>What <b>our customers</b> are saying</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner">
                <div class="item carousel-item active">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="media">
                        <div class="media-left d-flex mr-3">
                          <a href="#">
                            <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="testimonial">
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius
                              quam luctus dui. Mauris magna metus nec.</p>
                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="media">
                        <div class="media-left d-flex mr-3">
                          <a href="#">
                            <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="testimonial">
                            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit
                              tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item carousel-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="media">
                        <div class="media-left d-flex mr-3">
                          <a href="#">
                            <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="testimonial">
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius
                              quam luctus dui. Mauris magna metus nec.</p>
                            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="media">
                        <div class="media-left d-flex mr-3">
                          <a href="#">
                            <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="testimonial">
                            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit
                              tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>
                            <p class="overview"><b>Mary Saveley</b>, Web Designer</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item carousel-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="media">
                        <div class="media-left d-flex mr-3">
                          <a href="#">
                            <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="testimonial">
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius
                              quam luctus dui. Mauris magna metus nec.</p>
                            <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                          <div class="media-left d-flex mr-3">
                            <a href="#">
                              <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                            </a>
                          </div>
                          <div class="media-body">
                            <div class="testimonial">
                              <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius
                                quam luctus dui. Mauris magna metus nec.</p>
                              <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instructor-joined">
      <div class="container">
        <div class="content-instructor">
          <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
              <h2>Do you want to be an <br> instructor?</h2>
              <a href="" class="mt-2 btn px-4 py-2 btn-join-instructor">
                Join With Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
