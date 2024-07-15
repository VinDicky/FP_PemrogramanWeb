@extends('frontend.layout')
@section('content')
<section style="padding-top: 110px;" class="company-info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('img/logo-black.png') }}" alt="Company Logo" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <div class="company-details">
            <h2>PT. Sewa In Kendaraan, TBK</h2>
            <p>Jl. Samping Gunung No. 48, Sinduharjo, Ngaglik, Sleman, Yogyakarta, Indonesia</p>
            <p>Telp: +62 8123456789 Fax: +62 8123456789</p>
            <p>Email: sewain.co.id</p>
            <p>Solution Center: 1500-4848</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-info">
    <div class="container">
      <h2>Hubungi Kami</h2>
      <p>Silahkan hubungi kami kapanpun jika Anda memiliki pertanyaan atau saran mengenai perusahaan dan layanan kami.</p>
      <div class="row">
        <div class="col-md-6">
          <p><a href="https://wa.me/081911500369" class="btn btn-success btn-sm">Whatsapp </a></p>
        </div>
      </div>
    </div>
  </section>
@endsection