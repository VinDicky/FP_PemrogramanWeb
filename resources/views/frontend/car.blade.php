@extends('frontend.layout')
@section('content')
{{-- <section style="padding-top: 110px;" >

    <div class="container">
      <h2 class="text-center">Tarif Sewa Kendaraan</h2>

      <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-4">
            <a style="text-decoration: none;
        color: inherit;" class="" href="{{ route('car.show', $car->slug) }}">
            <div class="pricing-table">
              <h3 class="header">{{ $car->title }}</h3>
              <img src="{{ Storage::url($car->thumbnail) }}" alt="" class="img-fluid">
              <ul>
                <li>Self Drive:
                  <br>${{ $car->price }}/day
                <li><a href="https://wa.me/08123456789" class="btn btn-primary">Hubungi Whatsapp</a></li>
                <li><a href="Form.php" class="btn btn-primary">Pesan lewat Website</a></li>
              </ul>
            </div>
          </a>
          </div>
        @endforeach


      </div>
    </div>

  </section> --}}
  <div class="inner-page-banner" style="background: url('img/asset/logo-black.png') top center no-repeat; background-size: cover;">
    <div class="rq-overlay"></div>
    <div class="container">
      <div class="rq-title-container bredcrumb-title text-center">
        <h2 class="rq-title">List mobil</h2>
        <ol class="breadcrumb rq-subtitle secondary">
          <li><a href="/">Home</a></li>
          <li class="active">List mobil</li>
        </ol>
      </div>
    </div>
  </div> <!-- /. inner pagebanner -->
  <div class="rq-page-content">
    <div class="rq-content-block gray-bg small-padding-top">
      <div class="container">
        <div class="listing-search-container">
          <h2>Pencarian<span class="dot">.</span></h2>
          <div class="rq-search-container with-border">
            <div class="rq-search-single">
              <div class="rq-search-content">
                <span class="rq-search-heading">Lokasi</span>
                <select name="categories" class="category-option">
                  <option value="0">Pilih lokasi</option>
                  <option value="AL">Sleman</option>
                  <option value="AK">Bantul</option>
                  <option value="AZ">Kulon Progo</option>
                  <option value="AR">Gunung Kidul</option>
                  <option value="CA">Yogyakarta</option>
                </select>
              </div>
            </div>
            <div class="rq-search-single">
              <div class="rq-search-content">
                <span class="rq-search-heading">Pick up</span>
                <input type="text" name="datefilter" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                <i class="ion-chevron-down datepicker-arrow"></i>
              </div>
            </div>
            <div class="rq-search-single">
              <div class="rq-search-content">
                <span class="rq-search-heading">Return</span>
                <input type="text" name="datefilter" class="rq-form-element" id="enddate" placeholder="Return date"/>
                <i class="ion-chevron-down datepicker-arrow"></i>
              </div>
            </div>
            <div class="rq-search-single">
              <div class="rq-search-content last-child">
                <span class="rq-search-heading">Driver</span>
                <select name="categories" class="category-option">
                  <option value="0">25 Years old</option>
                  <option value="1">30 Years old</option>
                  <option value="2">21 Years old</option>
                  <option value="3">22 Years old</option>
                  <option value="4">19 Years old</option>
                  <option value="5">25 Years old</option>
                </select>
              </div>
            </div>
            <div class="rq-search-single search-btn">
              <div class="rq-search-content">
                <button class="rq-btn rq-btn-primary fluid-btn">Cari <i class="arrow_right"></i></button>
              </div>
            </div>
          </div>

        </div> <!-- /.search-container -->
        <div class="rq-listing-top-bar-filter-option">
          <div class="filter-list">
            <h5>Filter by</h5>
            <div class="filter-single">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Brand <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="brand-one">
                      <label for="brand-one">Toyota</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="brand-two">
                      <label for="brand-two">Daihatsu</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="brand-three">
                      <label for="brand-three">Mitsubishi</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="brand-three">
                      <label for="brand-three">Mitsubishi</label>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="filter-single">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Class <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">

                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="class-a">
                      <label for="class-a">A class</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="class-b">
                      <label for="class-b">B class</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="class-c">
                      <label for="class-c">C class</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="class-d">
                      <label for="class-d">D class</label>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="filter-single">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Bahan Bakar <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="fule-one">
                      <label for="fule-one">50 liter</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="fuel-two">
                      <label for="fuel-two">100 liter</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="fuel-three">
                      <label for="fuel-three">120 liter</label>
                    </span>
                  </li>
                  <li>
                    <span class="rq-checkbox">
                      <input type="checkbox" id="fuel-four">
                      <label for="fuel-four">130 liter</label>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="filter-single">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Harga <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <div class="rq-pricing-slider">
                      <div id="slider-range"></div>
                      <p>
                      <label for="amount">range:</label>
                      <input type="text" id="amount">
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="rq-grid-list-view-option">
            <a  href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
            <a class="active" href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
          </div>
        </div>

        <div class="rq-car-listing-wrapper">
          <div class="rq-listing-choose rq-listing-list">
            <div class="row">
              @foreach ($cars as $car)
              <div class="col-md-4 col-sm-6">
                <div class="listing-single">
                  <div class="listing-img">
                    <img src="{{ Storage::url($car->thumbnail) }}" alt="">
                  </div>
                  <div class="listing-details">
                    <h5 class="car-brand">BMW</h5>
                    <h3 class="car-name"><a href="{{ route('car.show', $car->slug) }}">{{ $car->title }}</a></h3>
                    <ul class="rating-list">
                      <li><i class="ion-star"></i></li>
                      <li><i class="ion-star"></i></li>
                      <li><i class="ion-star"></i></li>
                      <li><i class="ion-star"></i></li>
                      <li><i class="ion-star"></i></li>
                    </ul>
                    <ul>
                      <li>Mill: <span>{{ $car->mill }}</span></li>
                      <li>Fuel: <span>{{ $car->fuel }}</span></li>
                      <li>Seats: <span>{{ $car->seats }}</span></li>
                      <li>Transmission: <span>{{ $car->transmission }}</span></li>
                    </ul>
                    <div class="listing-footer">
                      <span><a href="#">Details</a></span>
                      <span>
                        Starting at <span class="price">Rp.{{ $car->price }}</span> / day
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          <div class="rq-pagination">
            <nav>
              <ul class="rq-pagination-list">
                <li class="pagin-text">
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="arrow_left"></i> Prev</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="center-dot" href="#">...</a></li>
                <li><a href="#">12</a></li>
                <li class="pagin-text">
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">next <i class="arrow_right"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </div>  <!-- /.rq-content-block -->
  </div>

</div> <!-- end #main-wrapper -->
@endsection
