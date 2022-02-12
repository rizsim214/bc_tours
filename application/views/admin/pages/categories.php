    <div class="container mt-3 ">
        <h1 class="text-center my-2">Categories</h1>
        <div class="col-md-11 mx-auto">
            <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary col-md-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Option
                </button>
                <div class="col-md-12 mb-2">
                    <ul class="nav justify-content-center mb-2">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('categories');?>">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotels & Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beaches & Resorts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mountains & Caves</a>
                        </li>
                    </ul>
                </div>
            </div>
           <div class="row pb-3">
            <?php if($categories) {?>
                <?php foreach($categories as $category) {?>
                    <div class="col-md-3 mb-3 ">
                        <div class="card">
                            <div class="card-header m-0 p-0">
                                <img src="<?= base_url();?>assets/images/uploads/<?= $category->image;?>" class="img-fluid p-2" alt="Attractions">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $category->sub_category_name;?></h5>
                                <small class="text-muted"><?= $category->category_name;?></small>
                                <hr>
                                <p class="card-text"><?= $category->sub_cat_description;?></p>
                            </div>
                            <div class="card-footer text-center">
                            <a href="<?= base_url('one_category/'.$category->id).'';?>" class="btn btn-outline-primary d-block">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else {?>
                <h4 class="font-italic">Nothing To Show</h4>
            <?php }?>
            </div>
           
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subcategory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('add_category');?>
                    <div class="form-group col-md-10 mx-auto">
                        <label for="category" class="my-2">Categories</label>
                        <select name="category" id="category" class="form-select form-select-md">
                            <option>Choose Category</option>
                            <option value="Hotel & Restaurants">Hotel & Restaurants</option>
                            <option value="Beaches & Resorts">Beaches & Resorts</option>
                            <option value="Mountains & Caves">Mountains & Caves</option>
                        </select>
                        <div class="form-group my-2">
                            <label for="subcategory" class="my-2">Name</label>
                            <?= form_input($data = array(
                                'name' => 'subcat_name',
                                'placeholder' => "Example Resort",
                                'class' => 'form-control ',
                                'id' => 'subcategory'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="location" class="my-2">Location</label>
                            <?= form_input($data = array(
                                'name' => 'location',
                                'placeholder' => "location",
                                'class' => 'form-control ',
                                'id' => 'location'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="direction" class="my-2">Direction</label>
                            <?= form_input($data = array(
                                'name' => 'direction',
                                'placeholder' => "How to get there?",
                                'class' => 'form-control ',
                                'id' => 'direction'
                            ));?>
                        </div>
                        <div class="form-group my-2">
                            <label for="description" class="my-2">Description</label>
                            <?= form_textarea($data = array(
                                'name' => 'description',
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
                                'placeholder' => "How to get there?",
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