<!DOCTYPE html>
<html lang="en">
    <x-header />
    <body>
        <x-navbar />
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{url('/tours')}}" method="GET">
                        <!-- Email address input-->
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="search" name="key">
                            </div>
                            <div class="col-auto">
                                <input class="form-control form-control-lg" type="date" placeholder="Departure Date" name="time">
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Search</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($tours as $tour)
                        <x-tour-item :tour="$tour"/>
                    @endforeach
                </div>
            </div>
        </section>

        <div style="margin-left: 13%; margin-right: 13%; height:55px "  >
            <div style="margin-right: 0px; float:right; margin:10px; margin-right:30px" >
               {{$tours->links()}}
            </div>
         </div>
        <x-footer/>
        @includeIf('partials.scriptjs')
    </body>
</html>
