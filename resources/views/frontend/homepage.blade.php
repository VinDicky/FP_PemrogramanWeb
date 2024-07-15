@extends('frontend.layout')
@section('content')

  <div class="rq-page-content">
    <div class="rq-content-block gray-bg">
      <span class="bg-large-text">sewain</span>
      <div class="container">
        <div class="row">
          <div class="col-md-11">
            <div class="rq-mission-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="mission-content">
                    <h1 class="rq-title">Misi Kami<span class="rq-dot">.</span><i class="rq-line"></i></h1>
                    <p class="mission-text">Kami berkomitmen untuk memberikan layanan rental mobil yang handal dan memuaskan. Dengan armada mobil berkualitas dan pelayanan yang profesional, kami memastikan setiap pelanggan mendapatkan pengalaman berkendara yang nyaman dan aman. Kami terus berinovasi dan meningkatkan layanan kami untuk memenuhi kebutuhan Anda, dengan tujuan akhir memberikan kepuasan maksimal dalam setiap perjalanan Anda.
                    </p>
                    <address>
                      <a href="#">Nama CEO</a>
                      <cite>- CEO Founder</cite>
                    </address>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mission-image">
                    <img src="{{ asset('img/carj.png') }}" alt="">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="rq-browse-section">
          <h1 class="rq-title">Mobil Unggulan Kami<span class="rq-dot">.</span></h1>
          <a href="#">Lihat Semua Mobil <i class="ion-ios-arrow-right"></i></a>
        </div>
      </div>
    </div> <!-- /.content block -->
    <div class="rq-content-block with-border-bottom vertical-line">
      <div class="rq-car-listing-tab">
        <ul class="nav nav-tabs parent-tab" role="tablist">
          <li role="presentation" class="active">
            <a href="#top-popular"  role="tab" data-toggle="tab">Terpopuler</a></li>
          <li role="presentation">
            <a href="#new-cars"  role="tab" data-toggle="tab">Mobil Baru</a></li>
          <li role="presentation">
            <a href="#sale-off"  role="tab" data-toggle="tab">Diskon</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="top-popular">
            <div class="child-tab-wrapper">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#car-one"  role="tab" data-toggle="tab">
                    <img src="img/asset/alphard.jpg" alt="">
                    <span class="tittle">Toyota Alphard</span>
                    <span class="car-des">7 Seater </span>
                    <span class="rent-price">Rp.3.200.00,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#car-two"  role="tab" data-toggle="tab">
                    <img src="img/asset/zenix.jpg" alt="">
                    <span class="tittle">Toyota Innova Zenix</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.650.000,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#car-three"  role="tab" data-toggle="tab">
                    <img src="img/asset/pajero.png" alt="">
                    <span class="tittle">Mitsubishi Pajero Sport</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.1.175.000,<b>/hari</b></span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="car-one">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/asset/logo-black.png" alt="">
                    </div>
                    <h3>Toyota Alphard</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg"></div>
                      <img src="img/asset/alphard.jpg" alt="">
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-two">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Toyota Fortuner VRZ</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg ford"></div>
                      <img src="img/tab-image/full-img2.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->

                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-three">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Toyota Innova Reborn</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-four">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Mitsubishi Pajero Sport</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-five">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Toyota Avanza</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
              </div>
            </div> <!-- /.child-tab-wrapper -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="new-cars">
            <div class="child-tab-wrapper">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation">
                  <a href="#car-two-new"  role="tab" data-toggle="tab">
                    <img src="img/asset/zenix.jpg" alt="">
                    <span class="tittle">Toyota Innova Zenix</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.650.000,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation" class="active">
                  <a href="#car-one-new"  role="tab" data-toggle="tab">
                   <img src="img/asset/alphard.jpg" alt="">
                    <span class="tittle">Toyota Alphard</span>
                    <span class="car-des">7 Seater </span>
                    <span class="rent-price">Rp.3.200.00,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#car-three-new"  role="tab" data-toggle="tab">
                    <img src="img/asset/pajero.png" alt="">
                    <span class="tittle">Mitsubishi Pajero Sport</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.1.175.000,<b>/hari</b></span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="car-one-new">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/asset/logo-black.png" alt="">
                    </div>
                    <h3>Pajero Sport</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg"></div>
                      <img src="img/asset/pajero.png" alt="">
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-two-new">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                  </div> <!-- /.rq-tab-car-details -->

                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-three-new">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Kia Rio White Car 2016</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-four-new">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Kia Rio White Car 2016</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-five-new">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Kia Rio White Car 2016</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
              </div>
            </div> <!-- /.child-tab-wrapper -->

          </div>

          <div role="tabpanel" class="tab-pane fade in" id="sale-off">
            <div class="child-tab-wrapper">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#car-one-sale"  role="tab" data-toggle="tab">
                   <img src="img/asset/alphard.jpg" alt="">
                    <span class="tittle">Toyota Alphard</span>
                    <span class="car-des">7 Seater </span>
                    <span class="rent-price">Rp.3.200.00,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#car-two-sale"  role="tab" data-toggle="tab">
                    <img src="img/asset/zenix.jpg" alt="">
                    <span class="tittle">Toyota Innova Zenix</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.650.000,<b>/hari</b></span>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#car-three-sale"  role="tab" data-toggle="tab">
                    <img src="img/asset/pajero.png" alt="">
                    <span class="tittle">Mitsubishi Pajero Sport</span>
                    <span class="car-des">7 Seater</span>
                    <span class="rent-price">Rp.1.175.000,<b>/hari</b></span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="car-one-sale">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/asset/logo-black.png" alt="">
                    </div>
                    <h3>Toyota Innova Reborn</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg"></div>
                      <img src="img/asset/reborn.jpg" alt="">
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-two-sale">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Ford Red Sport Car</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg ford"></div>
                      <img src="img/tab-image/full-img2.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->

                </div>
                <div role="tabpanel" class="tab-pane fade" id="car-three-sale">
                  <div class="rq-tab-car-details">
                    <div class="car-logo">
                      <img src="img/partner-logo/partner3.png" alt="">
                    </div>
                    <h3>Kia Rio White Car 2016</h3>
                    <div class="large-image-wrapper">
                      <div class="image-bg kia"></div>
                      <img src="img/tab-image/full-img3.png" alt="">
                    </div>
                    <div class="car-details-option">
                      <span><i class="ion-briefcase"></i>Bagasi luas</span>
                      <span><i class="ion-no-smoking"></i>Dilarang merokok</span>
                      <span><i class="ion-speedometer"></i>100km/jam</span>
                      <span>Starting at <span class="red-section">Rp.3.000.000,</span>/hari</span>
                    </div>
                  </div> <!-- /.rq-tab-car-details -->
                </div>
              </div>
            </div> <!-- /.child-tab-wrapper -->
          </div>
        </div> <!-- /.tab-content -->
      </div> <!-- /.rq-car-listing-tab -->
    </div> <!-- /.content block -->
        <div class="rq-testimonial-section">
          <div class="rq-testimonial-content">
            <h1 class="rq-title">Testinomi Pelanggan<span class="rq-dot">.</span></h1>
            <div class=" owl-carousel testimonial-wrapper">
              <div class="item">
                <p class="testimoinal-text">
                Pelayanan yang sangat baik<br>

                </p>
                <span class="author-name-title">
                  <img src="img/testimoianl1.png" alt="">
                  <a href="#">Ribka Budiman <i class="ion-ios-minus-empty"></i>
                    <span>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                    </span>
                  </a>
                </span>

              </div>
              <div class="item">
                <p class="testimoinal-text">
                Banyak pilihan mobil yang bisa disewa<br>

                </p>
                <span class="author-name-title">
                  <img src="img/testimoianl1.png" alt="">
                  <a href="#">Oline Manuel <i class="ion-ios-minus-empty"></i>
                    <span>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                    </span>
                  </a>
                </span>

              </div>
              <div class="item">
                <p class="testimoinal-text">
                Harga sewa yang terjangkau untuk sewa mobil di sini<br>

                </p>
                <span class="author-name-title">
                  <img src="img/testimoianl1.png" alt="">
                  <a href="#">Adeline Wijaya <i class="ion-ios-minus-empty"></i>
                    <span>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                    </span>
                  </a>
                </span>

              </div>
              <div class="item">
                <p class="testimoinal-text">
                Sangat merasa puas saat sewa mobil disini<br>

                </p>

                <span class="author-name-title">
                  <img src="img/testimoianl1.png" alt="">
                  <a href="#">Catherina Valencia <i class="ion-ios-minus-empty"></i>
                    <span>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                    </span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div> <!-- /.testimonial section -->

        <div class="rq-tips-tricks">
          <h1 class="rq-title">Tips &amp; Tricks<span class="rq-dot"></span></h1>
          <div class="row">
            <div class="col-md-4">
              <div class="rq-tips-single wow fadeInLeft" data-wow-duration="500ms">
                <div class="image-container">
                  <img src="img/asset/mencuci.jpg" alt="">
                </div>
                <div class="tips-content">
                  <span class="date">20 Maret 2024</span>
                  <h4><a href="#">Cara mencuci mobil dengan benar</a></h4>
                  <a class="rq-btn rq-btn-normal continue-button" href="#">Baca selengkapnya <i class="arrow_right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="rq-tips-single wow fadeInUp" data-wow-duration="500ms">
                <div class="image-container">
                  <img src="img/asset/wisata.jpg" alt="">
                </div>
                <div class="tips-content">
                  <span class="date">15 April 2024</span>
                  <h4><a href="#">7 Tempat Wisata di Jogja</a></h4>
                  <a class="rq-btn rq-btn-normal continue-button" href="#">Baca selengkapnya <i class="arrow_right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="rq-tips-single wow fadeInRight" data-wow-duration="500ms">
                <div class="image-container">
                  <img src="img/asset/impian.jpg" alt="">
                </div>
                <div class="tips-content">
                  <span class="date">29 Juni 2024</span>
                  <h4><a href="#">Mobil yang pas digunakan untuk berlibur</a></h4>
                  <a class="rq-btn rq-btn-normal continue-button" href="#">Baca selengkapnya<i class="arrow_right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /.content block -->
    <div class="rq-call-to-action">
      <div class="container">
        <h2>Ingin sewa melalui Whatapps <span>081-234-567-890</span></h2>
      </div>
    </div>
  </div> <!-- /.page-content -->

@endsection
