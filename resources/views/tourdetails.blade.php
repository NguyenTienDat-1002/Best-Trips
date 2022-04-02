<!DOCTYPE html>
<html lang="en">
<head>
   <x-header/>
   <link rel="stylesheet" href="{{URL::asset('css/tourdetail.css')}}">
</head>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="tourimage card-img-top mb-5 mb-md-0" src="{{$tour->img}}" alt="..." />
                </div>
                    <div class="tourdetail-container col-md-6">
                        <!-- <div class="small mb-1">SKU: BST-{{$tour->id}}</div> -->
                        <p class="small mb-1">SKU: BST-{{$tour->id}}</p>
                        <h1 class="display-5 fw-bolder mb-3">{{$tour->title}}</h1>
                        <div class="fs-5 mb-1">
                            @if($tour->sales!=0)
                                <span class="text-decoration-line-through">{{$tour->price}}</span>
                                <span>${{$tour->price*(100-$tour->sales)/100}}</span>
                            @else
                            <span>${{$tour->price}}</span>
                            @endif
                        </div>
                        <p class="lead">Duration: {{$tour->duration}}</p>
                        <p class="lead">Departure point: {{$tour->province->province}}</p>
                        <p class="lead">Departure time: {{date('d/m/Y',strtotime($tour->departure_date))}}</p>
                        <div class="d-flex">

                        @if(Auth::check()&&Auth::guard()->user()->role=="Admin")
                            <a class="Delete_btn btn btn-outline-dark flex-shrink-0" type="button" href="{{URL::asset(route('deleteTour',['id'=>$tour->id]))}}">
                                <i class="bi-cart-fill me-1"></i>
                                Delete
                            </a>
                            
                            <a class="Edit_btn btn btn-outline-dark flex-shrink-0" type="button" href="{{route('editTour',['id'=>$tour->id])}}"style="margin-left: 10px">
                                <i class="bi-cart-fill me-1"></i>
                                Edit
                            </a>
                        @else
                            <a class="Book_btn btn btn-outline-dark flex-shrink-0" type="button" href="{{URL::asset(route('tour.book',['id'=>$tour->id]))}}">
                                <i class="bi-cart-fill me-1"></i>
                                Booking
                            </a>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Description</h1> 
                    <div class="textarea">{!!$description!!}</div>
                </p>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Video</h1> 
                    <center><video controls class="tour_video">
                        <source src="{{$tour->video}}" type="video/{{pathinfo($tour->video, PATHINFO_EXTENSION);}}">
                      Your browser does not support the video tag.
                    </video></center>
                </p>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h1>Overview</h1> 
                    <div class="textarea">{!!$overview!!}</div>
                </p>
            </div>
        </section>
        
          
                
            
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                @if($Prices->count())
                <h2 class="fw-bolder mb-4">Other tours</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($Prices as $i=>$value )
                        <x-tour-item :tour="$value"/>
                    @endforeach
                </div>
                @endif
            </div>
        </section>
        
        <!-- Footer-->
        @includeIf('partials.scriptjs')
    </body>
</html>
