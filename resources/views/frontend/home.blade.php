@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="py-5">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
            
          <h2>Produk</h2>
          <p>Check our the product</p>
        </header>
          <div class="row justify-content-center" style="text-align: center;">
          <div class="col-6 col-md-3" style="width: 18rem;">
            <div class="card h-100">
              <img src="assets/img/produk/produk-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><b>Album 5star SKZ</b></h5>
                <p class="card-text">Rp. 190.000</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Detail
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Album 5star SKZ</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="text-align: left;">
                        <ul class="list-unstyled">
                          <li class="list-item">
                            Kode : A01
                          </li>
                          <li class="list-item">
                            Kategori  : Album
                          </li>
                          <li class="list-item">
                            Stok : 15
                          </li>
                          <li class="list-item">
                            Harga : Rp. 190.000
                          </li>
                          <li class="list-item">
                            Deskripsi : 
                          </li>
                          <li class="list-item">
                          ✅ Sealed & Ready
                          </li>
                          <li class="list-item">
                          ✅ Include packing menggunakan box & No damage
                          </li>
                          <li class="list-item">
                          ✅ First press masih dapat POB JYPent
                          </li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" style="width: 18rem;">
            <div class="card h-100">
              <img src="assets/img/produk/produk-2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><b>WINDBREAKER SKZ </b></h5>
                <p class="card-text">Rp. 1.000.000</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Detail
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">WINDBREAKER SKZ </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <ul class="list-unstyled" style="text-align: left;">
                          <li class="list-item">
                            Kode : F01
                          </li>
                          <li class="list-item">
                            Kategori  : Fashion
                          </li>
                          <li class="list-item">
                            Stok : 20
                          </li>
                          <li class="list-item">
                            Harga : Rp. 1.000.000
                          </li>
                          <li class="list-item">
                            Deskripsi : 
                          </li>
                          <li class="list-item">
                          ✅ Sealed & Ready
                          </li>
                          <li class="list-item">
                          ✅ Include packing  & No damage
                          </li>
                          <li class="list-item">
                          ✅ ALL SIZE (M, L, XL)
                          </li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" style="width: 18rem;">
            <div class="card h-100">
              <img src="assets/img/produk/produk-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><b>Lightstick SKZ</b></h5>
                <p class="card-text">Rp. 700.000</p>
                <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Detail</button>
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Lightstick SKZ</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <ul class="list-unstyled" style="text-align: left;">
                          <li class="list-item">
                            Kode : L01
                          </li>
                          <li class="list-item">
                            Kategori  : Lightstick
                          </li>
                          <li class="list-item">
                            Stok : 10
                          </li>
                          <li class="list-item">
                            Harga : Rp. 700.000
                          </li>
                          <li class="list-item">
                            Deskripsi : 
                          </li>
                          <li class="list-item">
                          ✅ Sealed & Ready
                          </li>
                          <li class="list-item">
                          ✅ Include packing  & No damage
                          </li>
                          <li class="list-item">
                          ✅ Freebies
                          </li>
                        </ul> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" style="width: 18rem;">
            <div class="card h-100">
              <img src="assets/img/produk/produk-4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><b>SKZ Magazine Harper's Bazaar</b></h5>
                <p class="card-text">Rp. 450.000</p>
                <button class="btn btn-dark" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Detail</button>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">SKZ Magazine Harper's Bazaar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <ul class="list-unstyled" style="text-align: left;">
                          <li class="list-item">
                            Kode : M01
                          </li>
                          <li class="list-item">
                            Kategori  : Majalah
                          </li>
                          <li class="list-item">
                            Stok : 25
                          </li>
                          <li class="list-item">
                            Harga : Rp. 450.000
                          </li>
                          <li class="list-item">
                            Deskripsi : 
                          </li>
                          <li class="list-item">
                          ✅ Sealed & Ready
                          </li>
                          <li class="list-item">
                          ✅ Include packing  & No damage
                          </li>
                          <li class="list-item">
                          ✅ Freebies
                          </li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Portfolio Section -->
     <!-- ======= About Section ======= -->
     <section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        <h2>MyJShop - Tempat Terbaik Untuk Pecinta KPOP </h2>
        <p>
        MyJShop adalah ecommerce atau online shop yang menyediakan merchandise K-Pop dengan harga terjangkau. 
        Kami adalah salah satu ecommerce K-Pop shop terbesar di Indonesia dan bangga menjadi destinasi utama 
        bagi para penggemar K-Pop. Kami bekerja sama dengan produsen dan distributor resmi merchandise K-Pop 
        terkemuka untuk memastikan kualitas produk yang tinggi. Kami berkomitmen untuk memberikan harga yang kompetitif, menjaga keamanan data pelanggan, dan memberikan layanan 
        pelanggan yang baik. Terima kasih atas dukungan dan kepercayaan Anda, kami terus meningkatkan pelayanan dan menambah 
        koleksi merchandise terbaru. Bergabunglah dengan komunitas MyJShop dan temukan merchandise K-Pop favorit Anda di toko online kami.
        </p>
        <div class="text-center text-lg-start">
          <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Read More</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/about.png" class="img-fluid" alt="">
    </div>

  </div>
</div>

</section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chairunnisa Azzahra Putri</h4>
                <span>Authentikasi and Role</span>
                <p>
                    "Pekerjaan paling menyenangkan adalah hobi yang dibayar."
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sefviana Anggraeni</h4>
                <span>Front-End Developer</span>
                <p>
                    "Maybe it hurts more because I thought it would be easy."- Side Effect
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Putri Felicia Tiara Maharani</h4>
                <span>Back-End Developer</span>
                <p>"Trust inside fresh onside."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Kebon Sirih No. 29 <br>Jakarta Pusat</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+6 891011 121314<br>+6 89765 62836</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>myjshop@gmail.com<br>myjshop1@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection