<!DOCTYPE html>
<html lang="en">
    <x-header/>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Page Header-->
        <header class="masthead"  style="background-image: url('{{URL::asset('assets/img/about-bg.jpg')}}')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Find Tour</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{url('/tours')}}" method="Get">
                                <!-- Email address input-->
                                @csrf
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Tour Title" name="title">
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="" name="key">
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Price" name="price">
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Description" name="key">
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Description" name="key">
                                </div>
                                <div class="row" style="padding-bottom: 10px;">
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Description" name="key">
                                </div>
                                    <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Description" name="key">
                                    <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Search</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <x-footer/>
        @includeIf('partials.scriptjs')
        
    </body>
</html>
