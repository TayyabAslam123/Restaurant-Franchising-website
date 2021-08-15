@extends('user.master')
@section('main')

     <!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>News</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
                        <span>News</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
     <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                @foreach(getnews() as $var)
                    <div class="blog__item__list">
                        <div class="blog__item">
                            <ul>
                                <li>{{date_frmt($var->created_at)}}</li>

                            </ul>
                            <h2>{{$var->title}}</h2>
                            <img src="{{Storage::url('public/news/'.$var->image)}}" alt="" width="300px" height="300px">
                            <div class="blog__item__text">
                                <p>{{$var->description}} </p>

                            </div>
                        </div>



                    </div>
                @endforeach
                <?php $temp = getnews(); ?>
                {{$temp->links()}}

                </div>

            </div>
        </div>
    </section>
      <!-- Call To Action Section Begin -->
      <section class="callto spad set-bg" data-setbg="img/call-bg.jpg">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="col-lg-10 text-center">
                  <div class="callto__text">
                     <span>Why choose us?</span>
                     <h2>Our ability to bring outstanding results to our customers.</h2>
                     <a href="{{url('/contact-us')}}" class="primary-btn">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call To Action Section End -->
            @endsection
