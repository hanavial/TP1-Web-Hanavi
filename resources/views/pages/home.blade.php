@extends('layouts.web')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="assets/images/carousel/nyetir1.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>KURSUS MENGEMUDI</h1>
            <p>Kursus mengemudi yang terjamin kualitasnya</p>
            <p><a class="btn btn-lg btn-primary" href="#">Daftar Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="assets/images/carousel/nyetir4.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>TRAINER PROFESSIONAL</h1>
            <p>Nyetir bekerja sama dengan Trainer professional yang terverifikasi</p>
            <p><a class="btn btn-lg btn-primary" href="#Trainer">Pelajari Lebih Lanjut</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="assets/images/carousel/nyetir3.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>HARGA JASA KURSUS TERJANGKAU</h1>
            <p>Jasa kursus yang kami tawarkan bisa didapatkan dengan harga terjangkau</p>
            <p><a class="btn btn-lg btn-primary" href="#Paket">Lihat Paket Jasa</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
</div>

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 id="Paket">Paket Jasa Kami</h2>
        <p class="text-muted">Kami menawarkan paket jasa pembelajaran menyetir mobil yang anda butuhkan dengan pelayanan terbaik dari kami</p>
    </div>
    <div class="card-columns">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Paket Manual</h5>
              <p class="card-text">Pembelajaran mobil manual selama <br> 7 x 1 Jam Latihan (7 Jam)</p>
              <a href="#" class="btn btn-outline-secondary">Lihat Detail</a>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header bg-primary text-light">Paket HOT</h5>
            <div class="card-body">
              <h5 class="card-title">Paket Mix (Manual + Matic)</h5>
              <p class="card-text">Pembelajaran mobil manual + matic selama 5 x 2 Jam Latihan (10 Jam)</p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
          <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Paket Mix B (Manual + Matic)</h5>
              <p class="card-text">Pembelajaran mobil manual + matic selama 6 x 2 Jam Latihan (12 Jam)</p>
              <a href="#" class="btn btn-outline-secondary">Lihat Detail</a>
            </div>
          </div>
    </div>
</div>

<div class="bg-dark">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="text-light" id="Jadwal">Jadwal Belajar</h2>
            <p class="text-light">Jadwal pada kursus kami bisa dilihat pada tabel ini</p>
        </div>
        <div class="card">
            <table class="table table-hover table-responsive-lg mb-0">
                <thead class="thead-inverse thead-dark">
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Trainer</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Senin</td>
                            <td>12.00</td>
                            <td>Santo Sujono</td>
                        </tr>
                        <tr>
                            <td scope="row">Selasa</td>
                            <td>15.00</td>
                            <td>Nita Andini</td>
                        </tr>
                        <tr>
                            <td scope="row">Rabu</td>
                            <td>14.00</td>
                            <td>Slamet Efendi</td>
                        </tr>
                        <tr>
                            <td scope="row">Kamis</td>
                            <td>12.00</td>
                            <td>Santo Sujono</td>
                        </tr>
                        <tr>
                            <td scope="row">Jumat</td>
                            <td>15.00</td>
                            <td>Nita Andini</td>
                        </tr>
                        <tr>
                            <td scope="row">Sabtu</td>
                            <td>14.00</td>
                            <td>Slamet Efendi</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 id="Trainer">Trainer dan Pengurus</h2>
        <p class="text-muted">Nama-nama Trainer dan Pengurus di kursus kami</p>
    </div>
    <div class="row mb-2">
        <div class="card-columns">
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Santo.png" alt="...">
                    <div class="my-3">
                        <h3 class="">Santo Sujono</h3>
                        <p class="card-text" style="font-size: 20px">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Nita.png" alt="...">
                    <div class="my-3">
                        <h3 class="card-title">Nita Andini</h3>
                        <p class="card-text" style="font-size: 20px">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Slamet.png" alt="...">
                    <div class="my-3">
                        <h3 class="card-title">Slamet Efendi</h3>
                        <p class="card-text" style="font-size: 20px">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-columns">
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Firman.png" alt="...">
                    <div class="my-3">
                        <h3 class="card-title">Firman Setyawan</h3>
                        <p class="card-text" style="font-size: 20px">Pengurus</p>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Reni.png" alt="...">
                    <div class="my-3">
                        <h3 class="card-title">Reni Agustina</h3>
                        <p class="card-text" style="font-size: 20px">Pengurus</p>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="assets/images/person/Andi.png" alt="...">
                    <div class="my-3">
                        <h3 class="card-title">Andi Makmur</h3>
                        <p class="card-text" style="font-size: 20px">Pengurus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 id="Kendaraan">Kendaraan Kami</h2>
            <p class="text-muted">Kami telah menyediakan kendaraan dan opsi transmisi yang dapat dipilih sesuai kebutuhan dalam kursus</p>
        </div>
        <div class="row mb-3">
            <div class="card-deck">
                <div class="card justify-content-center" style="margin-right: 0px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Avanza.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Toyota Avanza</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-primary">Manual</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">4 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card justify-content-center">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Jazz.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Honda Jazz</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-success">Matic</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">3 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="card-deck">
                <div class="card justify-content-center" style="margin-right: 0px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Innova.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Toyota Innova</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-success">Matic</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">2 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card justify-content-center">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Brio.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Honda Brio</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-primary">Manual</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">5 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card justify-content-center" style="margin-right: 0px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Ertiga.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Suzuki Ertiga</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-primary">Manual</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">3 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card justify-content-center">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="assets/images/car/Ayla.png" alt="..." style="max-width: 100%; max-height: 100">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h3>Daihatsu Ayla</h3>
                            <div class="row">
                                <div class="col-9">
                                    <h5><span class="badge badge-success">Matic</span></h5>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted">3 Unit</h5>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 id="Kontak">Hubungi Kami</h2>
        {{-- <p class="text-muted">Informasi tentang kontak perusahaan kursus kami yang bisa dihubungi dan lokasi kami</p> --}}
    </div>
    <div class="row pb-4">
        <div class="col-lg-8">
            <h4 class="mb-3">Kirim Pesan Pada Kami</h4>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="InputName">Nama</label>
                        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="InputEmail">Alamat Email</label>
                      <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="InputNumber">Nomor Telepon</label>
                        <input type="phone" class="form-control" id="InputNumber" aria-describedby="phoneHelp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="formControlTextarea">Pesan Anda</label>
                    <textarea class="form-control" id="formControlTextarea" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
        </div>
        <div class="col-lg-4">
            <h4 class="mb-3">Info Kontak</h4>
            <p class="text-muted">Kami berikan informasi tentang kontak perusahaan kursus kami yang bisa dihubungi dan juga lokasi kursus kami, Semoga Membantu.</p>
            <p class="text-primary"><i class="bi bi-geo-alt-fill text-primary mr-2"></i>Jl. Nasional 23 332-320, Bendo, Karangpandan, Kec. Pakisaji, Kabupaten Malang, Jawa Timur 65162</p>
            <p class="text-primary"><i class="bi bi-telephone-fill text-primary mr-2"></i>082233456789</p>
            <p class="text-primary"><i class="bi bi-envelope-fill text-primary mr-2"></i>nyetir@co.id</p>
            <p class="text-primary"><i class="bi bi-clock-fill text-primary mr-2"></i>Senin - Sabtu 10:00 - 18:00</p>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3950.284219002636!2d112.59608386866645!3d-8.072466817715418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1670065672315!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
