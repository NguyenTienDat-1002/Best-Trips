<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="{{URL::asset('css/main1.css')}}" rel="stylesheet" />
    <x-header />
</head>
    <body>
        <x-navbar />
        <!-- Header-->
        <header class=" py-5"  style='background: url("{{URL::asset('/img/Searchs_002.png')}}");'>
                <div class="s002" >
                    <form  action="{{url('/tours')}}">
                      <fieldset>
                        <legend>SEARCH TOUR</legend>
                      </fieldset>
                      <div class="inner-form">
                        <div class="input-field first-wrap">
                          <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                            </svg>
                          </div>
                          <input id="search" type="text" placeholder="What are you looking for?" name="key"/>
                        </div>
                        <div class="input-field second-wrap">
                          <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                            </svg>
                          </div>
                          <input class="datepicker" id="depart" type="text"  name="from" />
                        </div>
                        <div class="input-field third-wrap">
                          <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                            </svg>
                          </div>
                          <input class="datepicker" id="return" type="text"  name="to"/>
                        </div>
                        <div class="input-field fouth-wrap">
                          <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                          </div>
                          <select data-trigger=""  name="province">
                            <option selected value="">Location...</option>
                            @foreach ($provinces as $province)
                                <option value="{{$province->id}}">{{$province->province}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="input-field fifth-wrap">
                          <button class="btn-search" type="submit">SEARCH</button>
                        </div>
                      </div>
                    </form>
                  </div>
        </header>
        <!-- Section-->
        <section class=" bg- py-5">
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
        <script src="{{URL::asset('js/extention/choices.js')}}"></script>
    <script src="{{URL::asset('js/extention/flatpickr.js')}}"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
        @includeIf('partials.scriptjs')
    </body>
</html>
