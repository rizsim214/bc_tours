    <div class="container mt-3">
        <h1 class="text-center my-4">Categories</h1>
        <div class="col-md-10 mx-auto">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create Subcategory
            </button>
           <h1>CREATE VIEW PAGE FOR CATEGORIES</h1>
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
                            <option selected>Choose Category</option>
                            <option value="Hotel & Restaurants">Hotel & Restaurants</option>
                            <option value="Beaches & Resorts">Beaches & Resorts</option>
                            <option value="Mountains & Caves">Mountains & Caves</option>
                        </select>
                        <div class="form-group my-2">
                            <label for="subcategory" class="my-2">Title</label>
                            <?= form_input($data = array(
                                'name' => 'subcat_name',
                                'placeholder' => "Melinda's Resort",
                                'class' => 'form-control ',
                                'id' => 'subcategory'
                            ));?>
                        </div>
                       
                        <div class="form-group my-2">
                            <label for="location" class="my-2">Location</label>
                            <?= form_input($data = array(
                                'name' => 'location',
                                'placeholder' => "Brgy.Sonco Borongan City",
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
                            <label for="description" class="my-2">Sub-Category</label>
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
                            <label for="image" class="my-2">Direction</label>
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