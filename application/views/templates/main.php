<?php $this->load->view('templates/head'); ?>

<body>
<p class="fixed-action-btn logout-btn"><a href="<?= base_url("/home/logout") ?>" class="waves-effect waves-light btn btn-floating"><i class="material-icons">power_settings_new</i></a></p>
<p class="fixed-action-btn"><a href="<?= base_url() ?>" class="waves-effect waves-light btn btn-floating"><i class="material-icons">home</i></a></p>

<?php $this->load->view($mainContent, $data, FALSE); ?>

</body>

<?php $this->load->view('templates/footer'); ?>