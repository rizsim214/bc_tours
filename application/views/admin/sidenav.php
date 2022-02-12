<div class="d-flex" >
    <div class="d-flex flex-column p-3 text-white bg-dark " style="width: 280px;">
        <a href="<?= base_url('dashboard');?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto ">
            <li class="nav-item">
                <a href="<?= base_url('dashboard');?>" class="nav-link text-light" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('categories');?>" class="nav-link text-light" aria-current="page">Categories</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('attractions');?>" class="nav-link text-light" aria-current="page">Attractions</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('messages');?>" class="nav-link text-light" aria-current="page">Messages</a>
            </li>
            <hr>
            <li class="nav-item ">
                <a href="<?= base_url('logout');?>" class="nav-link text-light" aria-current="page">Logout</a>
            </li>
            <hr>
        </ul>
    </div>
