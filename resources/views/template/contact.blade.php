 @extends('layouts.lol')
 @section('content')
 <!-- Signup-->
        <section class="signup-section" id="hub">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white fw-bolder"></i>
                        <h2 class="text-white mb-5 fw-bolder">Ketik Emailmu Untuk Mendapatkan Info Lainnya!!!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN" action="/contact" method="post">
                            @csrf
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" name="email" id="emailAddress" type="email" placeholder="Masukan Email..." aria-label="Masukan Email..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">Kirim Sekarang!!!</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<br>
<center>
            <div class="card w-50 md-5">
                <div class="card-body">
                    <h5 class="card-title">EMAIL :</h5>
                    @foreach ($items as $item)
                    <p class="card-text">{{ $item->email}}</p>
                    @endforeach
                </div>
            </div>
</center>
        </section>
@endsection