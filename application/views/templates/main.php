<?php $this->load->view('templates/head'); ?>

<body>
<p class="fixed-action-btn"><a class="waves-effect waves-light btn btn-floating"><i class="material-icons">home</i></a></p>

<?php $this->load->view($mainContent, $data, FALSE); ?>

</body>

<?php $this->load->view('templates/footer'); ?>