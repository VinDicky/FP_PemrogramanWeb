@extends('frontend.layout')
@section('content')

<div class="rq-page-content"> <!-- start of page content -->
    <div class="rq-listing-details">
        <div class="rq-content-block">
            <div class="container">
              <div class="rq-title-container bredcrumb-title text-center"> <!-- start of breadcrumb -->
                <h1 class="rq-title light">{{ $car->title }}</h1>
                <ol class="breadcrumb secondary rq-subtitle">
                  <li><a href="#">Home</a></li>
                  <li><a href="{{ route('cars') }}">Car listing</a></li>
                  <li class="active">Car Listing Details</li>
                </ol>
                <img src="{{ Storage::url($car->thumbnail) }}" alt="">
              </div> <!-- end of breadcrumb -->
              <div class="rq-listing-promo-wrapper">
                <div class="row"> <!-- start of listing promo -->
                  <div class="col-md-12">
                    <div class="rq-listing-promo-content">
                      <div class="rq-listing-item">
                        <img src="img/listing-icon1.png" alt="">
                        <h6 class="rq-listing-item-title">Mileage</h6>
                        <h4 class="rq-listing-item-number">{{ $car->mill }}</h4>
                      </div>
                      <div class="rq-listing-item">
                        <img src="img/listing-icon2.png" alt="">
                        <h6 class="rq-listing-item-title">Transmission</h6>
                        <h4 class="rq-listing-item-number">{{ $car->transmission }}</h4>
                      </div>
                      <div class="rq-listing-item">
                        <img src="img/listing-icon3.png" alt="">
                        <h6 class="rq-listing-item-title">Seats</h6>
                        <h4 class="rq-listing-item-number">{{ $car->seats }}</h4>
                      </div>
                      {{-- <div class="rq-listing-item">
                        <img src="img/listing-icon4.png" alt="">
                        <h6 class="rq-listing-item-title">Luggage</h6>
                        <h4 class="rq-listing-item-number">3 Bags</h4>
                      </div> --}}
                      <div class="rq-listing-item">
                        <img src="img/listing-icon5.png" alt="">
                        <h6 class="rq-listing-item-title">Fuel</h6>
                        <h4 class="rq-listing-item-number">{{ $car->fuel }}</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- end of listing promo -->
              </div>
              <div class="rq-feature-tab">
                <div class="rq-blog-listing">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#listing_tab_hor_1" aria-controls="listing_tab_hor_1" role="tab" data-toggle="tab">Features</a></li>
                    {{-- <li role="presentation" ><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2" role="tab" data-toggle="tab">Descriptions</a></li>
                    <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3" role="tab" data-toggle="tab">Reviews(1)</a></li> --}}
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="listing_tab_hor_1">
                      <ul class="rq-listing-lists">
                        <li class="checked">Airconditions</li>
                        <li class="unchecked">Child Seats</li>
                        <li class="checked">GPS</li>
                        <li class="checked">Language</li>
                        <li class="checked">Music</li>
                        <li class="checked">Seat Belts</li>
                        <li class="checked">Sleeping bags</li>
                        <li class="checked">Water</li>
                        <li class="checked">Bluetooth</li>
                        <li class="unchecked">Onboard computer</li>
                        <li class="checked">Audio Input</li>
                        <li class="unchecked">Long term tips</li>
                        <li class="checked">car kit</li>
                        <li class="checked">Remote central looking</li>
                        <li class="checked">climate control</li>
                      </ul>
                      <div>
                        <br>
                        Description :
                        <p>{{ $car->description }}</p>
                      </div>
                    </div>
                    {{-- <div role="tabpanel" class="tab-pane" id="listing_tab_hor_2">
                      <p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</strong>
                      </p>
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                      vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                      blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor
                      </p>
                      <p>Impossible considered invitation him men instrument saw celebrated unpleasant.
                      Put rest and must set kind next many near nay. He exquisite continued explained middleton am.
                      Voice hours young woody has she think equal. Estate moment he at on wonder at season little.
                      </p>
                    </div> --}}
                    {{-- <div role="tabpanel" class="tab-pane" id="listing_tab_hor_3">
                      <div class="rq-single-post-header">
                        <div class="author-info-content">
                          <div class="author-img"
                               style="background: url('img/post-single/single-post-author.jpg') top center no-repeat; background-size: cover">
                          </div>
                          <span class="author-name"><a href="#">Alex</a>
                            <span>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </span>
                          </span>
                          <span class="author-role">Impossible considered invitation him men instrument saw celebrated unpleasant.
                            Put rest and must set kind next many near nay. He exquisite continued explained middleton am.</span>
                        </div>
                      </div>
                      <div class="review-form">
                        <h4>Write your review</h4>
                        <div class="review-star">
                          <a href="#"><i class="ion-android-star"></i></a>
                          <a href="#"><i class="ion-android-star"></i></a>
                          <a href="#"><i class="ion-android-star"></i></a>
                          <a href="#"><i class="ion-android-star"></i></a>
                          <a href="#"><i class="ion-android-star"></i></a>
                        </div>
                        <div id="respond" class="comment-respond">
                          <form id="commentform" class="commentform" action="#">
                            <div class="row">
                              <div class="col-md-6">
                                <input type="text" class="comment-input" placeholder="Enter your name...">
                              </div>
                              <div class="col-md-6">
                                <input type="email" class="comment-input" placeholder="Enter your email...">
                              </div>
                              <div class="col-md-12">
                                <textarea class="comment-input"  placeholder="Here goes your review"></textarea>
                              </div>
                              <div class="col-md-12">
                                <button class="continue-btn rq-btn rq-btn-normal">Submit Review</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>  <!-- ./edn feature tab -->
              {{-- <div class="location-map">
                <div class="listing-page-title">
                  <h3>Lokasi</h3>
                </div>
                <div class="rq-contact-us-map"> <!-- start map portion -->
                  <div id="listing-map"></div>
                </div> <!-- end map portion -->

              </div> --}}
            </div>
          </div> <!-- .end rq-content-block -->
          <div class="rq-content-block gray-bg">
            <div class="container">
              <div class="listing-page-title">
                <h3>Pesan Sekarang</h3>
              </div>
              <div class="col-md-12 text-center">
                <div class="book-btn">
                  <a href="{{ route('rentals.create', $car->slug) }}" class="rq-btn rq-btn-primary btn-large">Sewa Sekarang <i class="ion-android-car"></i></a>
                </div>
              </div>
            </div>
          </div> <!-- /.rq-content-block -->
          <div class="rq-content-block">
            <div class="related-car-faq">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="section-title">Related Cars</h3>
                    <div class="child-tab-wrapper related-cars">
                      <ul class="nav nav-tabs" role="tablist">
                        <li>
                          <a href="#">
                            <img src="img/listing-details-tab/tab-image2.png" alt="">
                            <span class="tittle">Honda Brio</span>
                            <span class="car-des">4 Seater Car</span>
                            <span class="rent-price">Rp.555.000,<b>/hari</b></span>
                          </a>
                        </li>
                        <li role="presentation">
                          <a href="#car-five"  role="tab" data-toggle="tab">
                            <img src="img/asset/zenix.jpg" alt="">
                            <span class="tittle">Toyota Innova Zenix</span>
                            <span class="car-des">7 Seater Car</span>
                            <span class="rent-price">Rp.650.000,<b>/Hari</b></span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .rq-content-block -->
    </div>
</div>

@endsection
