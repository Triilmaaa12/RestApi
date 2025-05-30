<div class="jumbotron" id="home" style="background-color: rgba(128, 0, 0, 0.8);">
  <div class="container text-center">
    <img src="<?= base_url(); ?>assets/img/profil(1).jpg" class="rounded-circle img-thumbnail" style="width: 150px; height: 150px; object-fit: cover; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
    <h1 class="display-5" style="color: #fff;">Tri Ilma Ramadani</h1>
    <h3 class="lead" style="color: #fff;">Collage student | Protokoler | Selebgram</h3>
  </div>
</div>

    <!-- Portfolio -->
<section class="about" id="about">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2 style="font-size: 1.2rem;">About Me</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto4.jpg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 style="color: #fff; font-size: 0.9rem;">Lahir di Kec. Pangkalan Koto Baru, 50 Kota, 05 November 2003</h5>
            <p class="card-text" style="color: #fff; font-size: 0.8rem;">Tepatnya di Tanjung Pauh, Rimbo Data.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto3.jpeg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 style="color: #fff; font-size: 0.9rem;">SD Negeri 02 Tanjung Pauh</h5>
            <p class="card-text" style="color: #fff; font-size: 0.8rem;">Kec. Pangkalan Koto Baru</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto2.jpg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 style="color: #fff; font-size: 0.9rem;">Saya Sekolah Menengah Pertama di MTsN 1 Payakumbuh</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto1.jpg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 style="color: #fff; font-size: 0.9rem;">Saya Sekolah Menengah Atas di SMA N 2 Pangkalan Koto Baru</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto6.jpg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <h5 style="color: #fff; font-size: 0.9rem;">Universitas Islam Negeri Imam Bonjol Padang</h5>
            <p class="card-text" style="color: #fff; font-size: 0.8rem;">Fakultas Sains dan Teknologi</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow hover-card" style="background-color: rgba(128, 0, 0, 0.8); border-radius: 10px;">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/foto5.jpg" alt="Card image cap" style="height: 150px; object-fit: cover;">
          <div class="card-body">
            <p class="card-text" style="color: #fff; font-size: 0.8rem;">Aku biasa dipanggil Ilma, aku memiliki banyak pengalaman dalam menghandle berbagai acara, baik formal maupun non-formal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.hover-card:hover {
  transform: scale(1.05);
  transition: transform 0.2s;
}
</style>
    <!-- Contact -->
<section class="contact bg-light" id="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="background-color: rgba(128, 0, 0, 0.8); color: #fff; text-align: center;">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        
        <ul class="list-group mb-4">
          <li class="list-group-item"><h3>Location</h3></li>
          <li class="list-group-item">My Boarding House</li>
          <li class="list-group-item">Jl. Ekora Perumahan Taman Anugrah Blok C No. 8, Padang</li>
          <li class="list-group-item">West Sumatera, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn" style="background-color: rgba(128, 0, 0, 0.8); color: #fff;">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>