<div class="container  vh-100">

    <?php if($category){?>
        <div class="row mt-5 p-5">
                <?php if($this->session->userdata('error')){ ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?= $this->session->userdata('error'); ?>
                </div>
            <?php }else  if($this->session->userdata('success')){?>
                <div class="alert alert-success text-center" role="alert">
                    <?= $this->session->userdata('success'); ?>
                </div>
            <?php }?>
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
                <div class="row col-md-10 mx-auto">
                    <button type="button" class="btn btn-warning btn-block col-md-5 mx-1" data-bs-toggle="modal" data-bs-target="#exampleUpdateModal">
                        Update
                    </button>
                    <a href="<?= base_url('delete');?>/<?= $category->id;?>" class="btn btn-danger col-md-5 mx-1" onclick="confirmation()">Delete</a>
                </div>
            </div>

        </div>
    <?php }else{?>
    <h1 class="m-5 font-italic"> Nothing To Show</h1>    
    <?php }?>
</div>
        
<!-- Modal -->
<div class="modal fade" id="exampleUpdateModal" tabindex="-1" aria-labelledby="exampleUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subcategory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('update/'.$category->id);?>
                    <div class="form-group col-md-10 mx-auto">
                        <label for="category" class="my-2">Categories</label>
                        <select name="category" id="category" class="form-select form-select-md">
                            <option value="<?= $category->category_name;?>"><?= $category->category_name;?></option>
                            <option value="Hotel & Restaurants">Hotel & Restaurants</option>
                            <option value="Beaches & Resorts">Beaches & Resorts</option>
                            <option value="Mountains & Caves">Mountains & Caves</option>
                        </select>
                        <div class="form-group my-2">
                            <label for="subcategory" class="my-2">Name</label>
                            <?= form_input($data = array(
                                'name' => 'subcat_name',
                                'value' => $category->sub_category_name,
                                'placeholder' => "Example Resort",
                                'class' => 'form-control ',
                                'id' => 'subcategory'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="location" class="my-2">Location</label>
                            <?= form_input($data = array(
                                'name' => 'location',
                                'value' => $category->sub_cat_location,
                                'placeholder' => "location",
                                'class' => 'form-control ',
                                'id' => 'location'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="direction" class="my-2">Direction</label>
                            <?= form_input($data = array(
                                'name' => 'direction',
                                'value' => $category->sub_cat_directions,
                                'placeholder' => "How to get there?",
                                'class' => 'form-control ',
                                'id' => 'direction'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="description" class="my-2">Description</label>
                            <?= form_textarea($data = array(
                                'name' => 'description',
                                'value' => $category->sub_cat_description,
                                'placeholder' => 'Description of the establishment',
                                'class' => 'form-control ',
                                'id' => 'description',
                                'rows' => '2',
                                'cols'=> '50'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="package_deals" class="my-2">Package Deals</label>
                            <?= form_textarea($data = array(
                                'name' => 'package_deals',
                                'value' => $category->sub_cat_package_deals,
                                'placeholder' => 'Write N/A if not applicable',
                                'class' => 'form-control ',
                                'id' => 'package_deals',
                                'rows' => '3',
                                'cols'=> '50'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="image" class="my-2">Image</label>
                            <?= form_upload($data = array(
                                'name' => 'image',
                                'class' => 'form-control ',
                                'id' => 'image'
                            ));?>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>
            <?= form_close();?>
        </div>
    </div>
</div>
</div>