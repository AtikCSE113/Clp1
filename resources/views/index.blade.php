@extends('layout')

@section('hero')
     <section id="hero" class="d-flex align-items-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Web Based Online Bus Ticket Booking Management System</h1>
                    <h2>One stop bus ticket booking platform for your travel!</h2>
                    <div class="d-lg-flex">
                        <div class="d-lg-flex mb-3">
                            <form action="/result" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Depart From</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            <input type="" id="deptdate" name="depart_from" class="form-control js-example-basic-single" placeholder="Depart from" required="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Arrive at</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="arriveat" name="arrive_at" placeholder="Arrive at" required="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Departure Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-calendar"></i></div>
                                            </div>
                                            <input type="text" name="travel_date"class="form-control" id="datepicker1" placeholder="Departure Date" required autocomplete="off">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-md-2">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Return Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-calendar"></i></div>
                                            </div>
                                            <input type="text" name="return_date"class="form-control" id="datepicker2" placeholder="Return Date" autocomplete="false">
                                        </div>
                                        <div class="row text-center">
                                            <p style="color: white;">(Optional)</p>
                                        </div>
                                    </div> --}}
                                    <div class="form-group col-md-2" >
                                        <div class="text-center"><input class="btnsubmit" type="submit" value="Search Buses"  name="submit" /> </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section><!-- End Hero -->
@endsection


@section('main')
   <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MORE FEATURES ON OUR PLATFORM</h2>

        </div>

        <div class="row content d-flex flex-row align-items-center">
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/locicon.png')}}" alt="">
            </div>
            <div >
                <h4>BUS LOCATION TRACKING</h4>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/staricon.png')}}" alt="">
            </div>
            <div >
                <h4>SERVICE REVIEW</h4>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/moneyicon.png')}}" alt="">
            </div>
            <div >
                <h4>FLEXIBLE PAYMENT OPTIONS</h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
@endsection
