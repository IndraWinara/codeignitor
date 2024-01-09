<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Indra Winara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>index.php/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>index.php/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="#">My Project</a>
                </li>                
            </ul>
            <div style="display: flex;">
                <div>
                    <?php $this->load->view('login/login_view') ?>
                </div>
            </div>
        </div>
    </div>
</nav>