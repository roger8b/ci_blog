
<?php $this->load->view('layout/header')?>
<link href="<?php echo base_url('/assets/css/contact.css') ?>" rel="stylesheet">
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
  <div class="form-box">
  <h1>Contato</h1>
  <form>
    <div class="form-group">
      <label for="name">Nome</label>
      <input class="form-control" id="name" type="text" name="Nome">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email" type="email" name="Email">
    </div>
    <div class="form-group">
      <label for="message">Mensagem</label>
      <textarea class="form-control" id="message" name="Mensagem"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Enviar" />
    </div>
  </form>
</div>
    <hr>

<?php $this->load->view('layout/footer')?>

