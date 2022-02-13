<div class="container" id="container">
    <?php if($category){?>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center text-center">
                    <img src="<?= base_url();?>assets/images/uploads/<?= $category->image;?>" alt="<?= $category->sub_category_name;?>" class="img-fluid " >  
                </div>
            </div>
            <div class="col-md-6">
                <p class="h4 text-secondary my-3">Category Name: <span class="text-dark"><?= $category->category_name;?></span></p>
                <p class="h5 text-secondary my-3">Name: <span class="text-dark"><?= $category->sub_category_name;?></span> </p>
                <p class=" text-secondary my-3">About: <span class="text-dark text-justify"><?= $category->sub_cat_description;?></span></p>
                <p class="h5 text-secondary my-3">Location: <span class="text-dark"><?= $category->sub_cat_location;?></span> </p>
                <p class="h5 text-secondary my-3">Direction: <span class="text-dark"><?= $category->sub_cat_directions;?></span> </p>
                <p class=" text-secondary my-3">Package Deals: <span class="text-dark text-justify"><?= $category->sub_cat_package_deals?></span></p> 
                <div class="col-md-6 mx-auto">
                    <a href="<?= base_url();?>" class="btn btn-primary d-block">Back</a>
                </div>
            </div>
        </div>
    <?php }else{?>
        <h1 class="m-5 font-italic"> Nothing To Show</h1>    
    <?php }?>
</div>
        
