<!DOCTYPE html>
<html lang="en">
    <x-header/>
    <body >
        <!-- Navigation-->
        <x-navbar/>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg'); margin:0px; " >
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Register</h1>
                            <!-- Signup form-->
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field()}}
                                <div class="row" style="padding-bottom: 10px;">
                                    <div class="col" style="padding-left: 0px">
                                        <input class="form-control form-control-lg" id="emailAddress" type="text" name="firstname" placeholder="Firstname">
                                    </div>
                                    <div class="col" style="padding-right: 0px">
                                        <input class="form-control form-control-lg" id="emailAddress" type="text" name="lastname" placeholder="Lastname">
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom: 10px">
                                        <input class="form-control form-control-lg" id="emailAddress" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="row" style="padding-bottom: 10px">
                                    <input class="form-control form-control-lg" id="emailAddress" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @includeIf('partials.scriptjs')
        
    </body>
</html>
