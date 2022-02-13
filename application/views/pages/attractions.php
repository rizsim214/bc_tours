<section id="attractions" class="container-fluid">
    <div class="mt-5 pt-5">
        <h1 class="text-center">Attractions</h1>
        <ul class="nav justify-content-center mb-2">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url('home');?>">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('hr_filter_home');?>">Hotels & Restaurants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('br_filter_home');?>">Beaches & Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('mc_filter_home');?>">Mountains & Caves</a>
            </li>
        </ul>
    </div>
    <span class="mx-auto text-center">
        <?= $this->pagination->create_links();?>
    </span>

    <div class="row px-5 mx-3 pb-4">
    <?php if($categories){?>
        <?php foreach($categories as $category){?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="<?= base_url();?>assets/images/uploads/<?= $category->image;?>" class="img-fluid" alt="<?= $category->sub_category_name;?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $category->sub_category_name;?></h5>
                        <small class="text-muted"><?= $category->category_name;?></small>
                        <hr>
                        <p class="card-text"><?= $category->sub_cat_description;?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= base_url('one_category_home/'.$category->id).'';?>" class="btn btn-primary d-block">Read More</a>
                    </div>
                </div>
            </div>
        <?php }?>  
    <?php }else{ ?> 
        <h1 class="fst-italic text-center pt-5">Nothing To Show</h1>
    <?php } ?>   
    </div>
</section>