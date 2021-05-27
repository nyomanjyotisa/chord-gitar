@extends('layouts.app')

@section('title')
  Kunci Gitar {{$lagu->judul}} - {{$lagu->artis->artis}} Chord Dasar Rumah Chord
@endsection

@section('metadesc')
  Kunci Gitar Lirik Lagu {{Str::limit($lagu->chord, 200)}}
@endsection

@section('content')
<main id="main">

    <!-- ======= Single Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-10 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">{{$lagu->artis->artis}} - {{$lagu->judul}}</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{$lagu->created_at->format('d M Y')}} &bullet; By <a href="#" class="text-white">{{$lagu->user->name}}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="site-section mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <button id="auto_scroll" class="btn btn-sm btn-secondary mt-3">Auto Scroll</button>
            <pre class="text-dark my-5">{{$lagu->chord}}</pre>
            @if(!empty($previous))
                <a class="btn btn-primary" href="/post/{{$previous->id}}">Previous</a>
            @endif
            @if(!empty($next))
                <a class="btn btn-primary" href="/post/{{$next->id}}">Next</a>
            @endif
            
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Dog <span>(12)</span></a></li>
                <li><a href="#">Dog Food <span>(22)</span></a></li>
                <li><a href="#">Vetenirarian <span>(37)</span></a></li>
                <li><a href="#">Events<span>(42)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="assets/img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Starts Publishing Your Apps</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->
  <script>
	  var my_time;
		var count = 0;
		setTimeout('pageScroll()', 1200);
		function pageScroll() {
      // If condition to set repeat 
			if (count < 2) {
				var objDiv = document.getElementsByTagName("body");
				objDiv.scrollTop = objDiv.scrollTop + 1;
				if (objDiv.scrollTop == (objDiv.scrollHeight - 61)) {
          setTimeout(function() {
						objDiv.scrollTop = 0;
						count++;
            }, 1200);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll()', 10);
        //set scrolling time end
			}
		}
  </script>
@endsection