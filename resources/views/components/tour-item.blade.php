<div class="col mb-5">
    <div class="card h-100">
        <!-- Product image-->
        @if($tour->sales!=0)
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$tour->sales}}% Sale</div>
        @endif
        <img class="card-img-top" width="300px" height="300px" src="{{$tour->img}}" alt="{{$tour->title}}" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$tour->title}}</h5>
                <!-- Product price-->
                @if($tour->sales!=0)
                <span class="text-muted text-decoration-line-through">${{$tour->price}}</span>
                ${{$tour->price*(100-$tour->sales)/100}}
                @else
                    ${{$tour->price}}
                @endif
            </div>
        </div>
        <!-- Product actions-->
        
        @if(Auth::check()&&Auth::guard()->user()->role == "Admin")
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
            <div class="text-center"  style="display: inline-block"><a class="btn btn-outline-dark mt-auto" target="_blank" href="{{ url("/tour/{$tour->id}")}}">View</a></div>
            <div class="text-center "  style="display: inline-block"><a class="btn btn-outline-dark mt-auto" onClick = "return confirm('are you sure?')" href="{{ url('/tour/delete/'.$tour->id)}}">Delete</a></div>
        </div>
        @else
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
            <div class="text-center"  style="display: inline-block"><a class="btn btn-outline-dark mt-auto" target="_blank" href="{{ url("/tour/{$tour->id}")}}">View options</a></div>
        </div>
        @endif
    </div>
</div>