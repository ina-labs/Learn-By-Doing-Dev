@extends('layouts.detail-course')

@section('content')

<main>
  <div class="main-information">
  <section class="information">

    <div class="container">

      <div class="row">

        <div class="col-md-7 information-course-video">

          <iframe width="100%" height="415" src="https://www.youtube.com/embed/ubfxi21M1vQ" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
            
        </div>

        <div class="col-md-4 information-course-element">

          <div class="row">

            <div class="col-md-12 p-0 title-course">

              <a href="information-course.html" class="btn mb-3 ml-0 py-2 button-back-course">
                Kembali
              </a>

              <p>User Experience Design Essentials Adobe XD UI UX Design</p>

            </div>

            <div class="col-md-12 w-100 course-payment">

              <a href="#" class="btn course-content mt-2 text-left w-100 px-2 py-2">
                <div class="row">
                  <div class="col-3 d-flex align-items-center ">
                    <img src="frontend/images/ic_start_stop.png" alt="">
                  </div>
                  <div class="col-9 d-flex align-items-center">

                    <p>
                      User Experience Design Essentials Adobe XD UI UX Design

                    </p>
                  </div>
                </div>
              </a>
              
           


            </div>
          </div>
        </div>

      </div>


    </div>

  </section>
</div>
</main>

@endsection
