<!DOCTYPE html>
<html lang="en">
<head>
   <x-header/>

   {{-- <link rel="stylesheet" href="{{URL::asset('css/tourdetail.css')}}"> --}}
   
   <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
   <link rel="stylesheet" href="{{URL::asset('css/rating.css')}}">
    <style>
        .avatar {
                vertical-align: baseline;
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }
            .noHover{
                pointer-events: none !important;
            }
    </style>
</head>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Product section-->
        <section class="py-5" >
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
                <p class="lead"><h2>Overview</h2> 
                    <div class="textarea">{!!$overview!!}</div>
                </p>
            </div>

            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h2>Description</h2> 
                    <div class="textarea">{!!$description!!}</div>
                </p>
            </div>

            <div class="container px-4 px-lg-5 my-5">
                <p class="lead"><h2>Video</h2> 
                    <center>
                        <video controls class="tour_video">
                            <source src="{{$tour->video}}" type="video/{{pathinfo($tour->video, PATHINFO_EXTENSION);}}">
                            Your browser does not support the video tag.
                        </video>
                    </center>
                </p>
            </div>

            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">             
                    @if(Auth::check())
                        <div class="container px-4 px-lg-5 my-5">
                            <p><h3>Rate Tour</h3></p>
                        </div>
                        <div class="container px-4 px-lg-5 my-5">
                            <p>Dear Customer,<br>
                                Thank you for getting your car services at our workshop.
                                We would like to know how we performed. Please spare some moments to give us
                                your valuable feedback as it will help us in improving our service.
                            </p>
                            <div style="float: left; padding-top:0px">
                                <img src="{{URL::asset('/img/avatar/avatar.png')}}" alt="Avatar" class="avatar" >
                            </div>
                            <form  style="display: inline-block;line-height: 1.25rem" method="POST" action="{{route('comment',['tour_id'=>$tour->id])}}">
                                @csrf
                                <label>Rate:</label>
                                <span class="star-rating">
                                    <input type="radio" name="rating" value="1" ><i></i>
                                    <input type="radio" name="rating" value="2" ><i></i>
                                    <input type="radio" name="rating" value="3" ><i></i>
                                    <input type="radio" name="rating" value="4"><i></i>
                                    <input type="radio" name="rating" value="5"><i></i>
                                </span></br>
                                <label for="m_3189847521540640526commentText">Comment:</label><br/>
                                <textarea cols="75" name="content" rows="5" style="width: 100%; resize:none" ></textarea><br>
                                <div class="clear"></div> 
                                <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit">&nbsp;
                            </form>
                        </div>
                    @endif  
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <p><h3>Reviews</h3></p>
                @foreach ($comments as $comment )
                <div style="display: block; line-height: 1.25rem; " >
                    <div style="display:inline-block;">
                        <img src="{{URL::asset('/img/avatar/avatar.png')}}" alt="Avatar" class="avatar" >
                    </div>
                    <div style="display: inline-block;vertical-align: super !important">
                    @if($comment->rate!=0)
                    <span class="star-rating"> 
                            @for ( $i= 1; $i<=5 ; $i++)
                                @if ($i==$comment->rate)
                                    <input type="radio" disabled checked value="{{$i}}" class="noHover"><i></i>
                                @else
                                    <input type="radio" disabled value="{{$i}}" class="noHover"><i></i>
                                @endif
                                
                            @endfor                       
                    </span> -
                    @endif
                    <span> {{date('h:i d/m/Y',strtotime($comment->time))}} </span></br>
                    <div >
                        <div style="display: inline-block;" >{{$comment->user->username}} : </div>
                        <div  style="display: inline-block;">{{$comment->content}}</div><br>
                    </div>
                    </div>
                </div></br>
                @endforeach
                <div style="margin-left: 13%; margin-right: 13%; height:55px "  >
                    <div style="margin-right: 0px; float:right; margin:10px; margin-right:30px" >
                       {{$comments->links()}}
                    </div>
                 </div>
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
        <script>
            function rating(){
                var count = 0;
                ratings = document.getElementsByName("star")
                for (let index = 0; index < ratings.length; index++) {
                    const element = ratings[index];
                    
                    if(element.checked == false){    
                        count++;
                    }
                }
                return count
            }
            
            
            function commenting(){
                console.log(document.querySelector('input[name="star"]:checked').value)
                document.getElementById("rating").value = document.querySelector('input[name="star"]:checked').value
            }       
        </script>
    </body>
</html>
