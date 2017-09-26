
<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>
<?php $this->load->model('Main_model')?>


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
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <h2 class="section-heading"><?php echo $pst['pst_titulo'] ?></h2>

            <a href="#">
              <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
            </a>

            <p><?php echo $pst['pst_conteudo'] ?></p>

            <p class="post-meta">Postado por
            <a href="#"><?php $user = $this->Main_model->selec_dado('usuario', 'usr_id', $pst['usuario_usr_id']);
echo $user['usr_nome']?></a>
            <?php echo $pst['pst_dt_postado'] ?></p>

          </div>
        </div>
      </div>
    </article>
    <hr>



<?php $this->load->view('layout/footer')?>

