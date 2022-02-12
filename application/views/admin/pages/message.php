<div class="container vh-100 ">
       <div class="col-md-6 mx-auto pt-5 ">
            <div class="px-4 pt-5 pb-5  border rounded">
            <h5 class="ms-auto"><a href="<?= base_url('messages');?>" class="text-decoration-none">Back</a></h4>
                <h3 class="text-secondary mt-3">Inquirer: <span class="text-dark ms-2 "><?= $message->inquirer_name;?></span></h3>
                <hr>
                <h4 class="text-secondary">Contact Info: <span class="text-dark ms-2"><?= $message->inquirer_contact?></span></h4>
                <hr>
                <div class="col-md-10 mx-auto">
                    <textarea cols="20" rows="4" class="form-control " disabled><?= $message->inquirer_message;?></textarea>
                </div>
                
            </div>
            
        </div>
    </div>
</div>