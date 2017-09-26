
<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url("/assets/img/home-bg.jpg") ?>')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Ci Blog</h1>
              <span class="subheading">Blog Bootstrap + Codeigniter</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Sobre
              </h2>
              <h3 class="post-subtitle">
                Subtitulo da Postagem
              </h3>
            </a>
            <p class="post-meta">Postado por
              <a href="#">Autor da Postagem</a>
              Data da postagem</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    <hr>

<?php $this->load->view('layout/footer')?>

