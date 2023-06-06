<div class="page-section bg-light">
  <div class="container">
    
    <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="row">
          @foreach($doctors as $doctor)          
          <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
              <div class="header">
                <img src="../assets/img/doctors/doctor_1.jpg" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{$doctor->name}}</p>
                <span class="text-sm text-grey">{{$doctor->speciality}}</span>
              </div>
            </div>
          </div>
          @endforeach

        </div>


      </div>    
    </div>
  </div>
</div> 