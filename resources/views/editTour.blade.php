<!DOCTYPE html>
<html lang="en">
<head>
    @includeIf('partials.W3CSS')
</head>
    <body>
        <!-- Navigation-->
        <x-navbar/>
        <!-- Page Header-->
        <header class="masthead"  style="background-image: url('{{URL::asset('assets/img/about-bg.jpg')}}')">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <div class="post w3-container ">
                                    <div class="w3-container w3-teal">
                                        <center><h2>Update Tour</h2></center>
                                    </div>
                                 
                                    <form class="w3-container w3-card-4 w3-light-grey"  enctype="multipart/form-data" action="{{route('updateTour',['id'=>$tour->id])}}" method="post" > 
                                        {{ csrf_field() }}

                                        <div class="w3-row-padding">
                                            <p class="w3-third">
                                            <label class="w3-text-grey" for="title">Title</label>
                                              <input class="w3-input w3-border" type="text" id="title" name="title" value={{$tour->title}} required>
                                            </p>
                                            <p class="w3-third">      
                                               <label class="w3-text-grey" for="price">Price</label>
                                                    <input class="w3-input w3-border" type="text" id="price" name="price" value="{{$tour->price}}">
                                            </p>

                                            <p class="w3-third">      
                                                <label class="w3-text-grey" for="sale">Sale</label>
                                                    <input class="w3-input w3-border" type="text" id="sale" name="sale" value="{{$tour->sales}}">
                                             </p>

                                        </div>

                                        <div class="w3-row-padding">
                                            <p class="w3-third">      
                                                <label class="w3-text-grey" for="departure">Departure point</label>
                                                {{-- <input class="w3-input w3-border" type="text" required id="departure" value="{{$tour->departure_point}}" name="departure"> --}}
                                                <select name="departure" id="departure"  class="w3-input w3-border">
                                                    
                                                    @foreach ($provinces as $province )
                                                        @if($tour->departure_point==$province->id)
                                                            <option value="{{$province->id}}" selected>{{$province->province}}</option>
                                                        @else
                                                            <option value="{{$province->id}}">{{$province->province}}</option>
                                                        @endif
                                                    @endforeach
                                            </select>
                                            </p>
                                
                                            <p class="w3-third">      
                                                <label class="w3-text-grey" for="time">time</label>
                                                <input class="w3-input w3-border" type="date" id="time" name="time" value="{{$tour->departure_date}}">
                                            </p>
                                            <p class="w3-third">      
                                                <label class="w3-text-grey" for="duration">Duration</label>
                                                <input class="w3-input w3-border" id="duration" name="duration" type="text" value="{{$tour->duration}}" required>
                                            </p>
                                        </div>
                                
                                        <div class="w3-row-padding">
                                            <p class="w3-half">
                                                <label class="w3-text-grey" for="img">Tour image</label>
                                                <input class="w3-input w3-border" type="file" id="img" name="img">
                                            </p>
                                            <p class="w3-half">
                                                <label class="w3-text-grey" for="video">Tour video</label>
                                                <input class="w3-input w3-border" type="file" id="video" name="video">
                                            </p>
                                        </div>
                                        
                                        <div class="w3-row-padding">
                                            <p id="iternaries">
                                            <label class="w3-text-grey" for="address">Iternary</label>
                                              <input class="w3-input w3-border" type="text" id="iternary" name="iternaries[]" >
                                            </p>
                                            <div style="
                                            --b:4px; /* the thickness */
                                            width:40px; /* the size */
                                            aspect-ratio:1/1;
                                            border:10px solid #000; /* the outer space */
                                            background:
                                              conic-gradient(from 90deg at var(--b) var(--b),#000 90deg,#fff 0) 
                                              calc(100% + var(--b)/2) calc(100% + var(--b)/2)/
                                              calc(50%  + var(--b))   calc(50%  + var(--b));
                                            display:inline-block;" onclick="add_Iternary()">
                                            </div>
                                        </div>
                                
                                        <div class="w3-row-padding">
                                            <p id="highlight">      
                                                <label class="w3-text-grey" >High light</label>
                                                <input class="w3-input w3-border" type="file"  name="hightlight[]"/>
                                                <div style="
                                            --b:4px; /* the thickness */
                                            width:40px; /* the size */
                                            aspect-ratio:1/1;
                                            border:10px solid #000; /* the outer space */
                                            background:
                                              conic-gradient(from 90deg at var(--b) var(--b),#000 90deg,#fff 0) 
                                              calc(100% + var(--b)/2) calc(100% + var(--b)/2)/
                                              calc(50%  + var(--b))   calc(50%  + var(--b));
                                            display:inline-block;" onclick="add_Highlight()">
                                            </div>
                                            </p>
                                        </div>

                                        <div class="w3-row-padding">
                                            <p>      
                                                <label class="w3-text-grey" for="requirement">Overview</label>
                                                <textarea class="w3-input w3-border" id="requirement" rows="6" name="overview" value="{{$overview}}" style="resize:none" ></textarea>
                                            </p>
                                        </div>
                                        <div class="w3-row-padding">
                                            <p>      
                                                <label class="w3-text-grey" for="description">Description</label>
                                                <textarea class="w3-input w3-border" id="description" rows="6" name="description" value="{{$description}}" style="resize:none" ></textarea>
                                            </p>
                                        </div>
                                    @php
                                    if($errors->any())
                                            echo '<center><p style="color:red">'.$errors->first().'</p></center>';
                                    @endphp
                                    @if(session('notification'))
                                        <center><p style="color:green">{{ session('notification')}}</p></center>
                                    @endif
                                      <center><p><input type="submit" class="w3-btn w3-padding w3-teal" style="width:120px" name="submit" value="Create"></p></center>
                                </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <x-footer/>
        <!-- Footer-->
        @includeIf('partials.scriptjs')
        
    </body>
</html>