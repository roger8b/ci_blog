
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
    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
        <?php foreach ($tab_postagem as $d) {
	?>
          <div class="post-preview">
            <a href="<?php echo base_url('postagem') ?>/<?php echo $d['pst_id'] ?>" name="post" value="<?php echo $d['pst_id'] ?>">
              <h2 class="post-title">
                <?php echo $d['pst_titulo'] ?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo $d['pst_conteudo'] ?>
              </h3>
            </a>
            <p class="post-meta">Postado por
              <a href="#"><?php $user = $this->Main_model->selec_dado('usuario', 'usr_id', $d['usuario_usr_id']);
	echo $user['usr_nome']?></a>
              <?php echo $d['pst_dt_postado'] ?></p>
          </div>
          <hr>
          <?php }?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>

    </div>
    <hr>



<?php $this->load->view('layout/footer')?>

