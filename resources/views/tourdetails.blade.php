<!DOCTYPE html>
<html lang="en">
    <x-header/>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$tour->img}}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-{{$tour->id}}</div>
                        <h1 class="display-5 fw-bolder">{{$tour->title}}</h1>
                        <div class="fs-5 mb-5">
                            @if($tour->sales!=0)
                                <span class="text-decoration-line-through">{{$tour->price}}</span>
                                <span>${{$tour->price*(100-$tour->sales)/100}}</span>
                            @else
                            <span>${{$tour->price}}</span>
                            @endif
                        </div>
                        <p class="lead">Duration: {{$tour->duration}}</p>
                        <p class="lead">Departure point: {{$tour->departure_point}}</p>
                        <p class="lead">Departure time: {{$tour->departure_time}}</p>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Booking
                            </button>
                            @if(Auth::check()&&Auth::guard()->user()->role=="Admin")
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-left: 10px">
                                <i class="bi-cart-fill me-1"></i>
                                Edit
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Overview:</h1> 
                    {{$overview}}
                </p>
            </div>
        </section>
        
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                @if($tours)
                <h2 class="fw-bolder mb-4">Other tours:</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($tours as $i=>$value )
                        <x-tour-item :tour="$value"/>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
        
        <!-- Footer-->
        <x-footer/>
        @includeIf('partials.scriptjs')
    </body>
</html>
