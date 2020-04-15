@extends('layouts.information-course')

@section('content')

<main class="main-information">
   
  <section class="information">

    <div class="container">

      <div class="row">

        <div class="col-md-7 information-course-text">

          <h3>About this course</h3>

          <p>Belajar membuat aplikasi web yang terintegrasi dengan API HERE Maps melalui studi kasus pembuatan aplikasi daftar lokasi tempat ngoding yang asyik.</p>

          <h5>Silabus - Materi yang akan dipelajari</h5>
          
          <table class="silabus-course">
              
               <tr>
                <td>01.&nbsp;</td>
                <td>Materi tentang pengenalan UI UX designer</td>
               </tr>

               <tr> 
                <td>02.&nbsp;</td>
                <td> <i class="fas fa-book"></i> Materi tentang pengenalan UI UX designer</td>
               </tr>  
          </table>         
        </div>
        <div class="col-md-4 information-course-instructor">
          <div class="row">
            <div class="col-md-12 course-payment">              
              <table class="mt-2 col-md-12 table-rate">
                <tr>
                  <th width="50%" class="text-left">Rating</th>
                  <th width="50%" class="text-left">Terdaftar</th>
                </tr>
                <tr>
                  <td>
                    <img src="{{ asset('frontend/images/ic_popular.png') }}" alt="">
                    <b>4.5 </b>dari 5
                  </td>
                  <td>
                    <img src="{{ asset('frontend/images/ic_people.png') }}" alt="">
                    <b>800</b> Orang
                  </td>
                </tr>
              </table>
              <hr>
              <table class="col-md-12 table-pay">
                <tr>
                  <td width="50%" class="status" >Status :</td>
                  <td width="50%" class="text-left">FREE</td>
                </tr>
              </table>
              <a href="course.html" class="btn mt-3 py-2 btn-block button-join-course">
                Join Course
              </a>
            </div>
            <div class="col-md-12 pt-3 mt-3 course-intructor">
              <h4>Instructor</h4>
              <!--  -->
              <div class="instructor-detail mt-4">
                <div class="row">
                  <div class="col-md-3 d-none d-md-block">
                    <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                  </div>
                  <div class="col-md-8 pl-3 d-flex align-items-center">
                    <div class="row">
                      <div class="col-md-12">
                        <b>Muhammad Iqbal Aulia Rafi</b>                   
                      </div>
                      <div class="col-md-12">
                        <p>Manager PT. Indonesia Comnets Plus</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="instructor-detail mt-4">
                <div class="row">
                  <div class="col-md-3 d-none d-md-block">
                    <img src="{{ asset('frontend/images/people.jpg') }}" alt="">
                  </div>
                  <div class="col-md-8 pl-3 d-flex align-items-center">
                    <div class="row">
                      <div class="col-md-12">
                        <b>Anak Agung Angga Wijaya</b>                   
                      </div>
                      <div class="col-md-12">
                        <p>Manager PT. Sinergi Informatika Semen Indonesia</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
            
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</main>

@endsection
