<section id="contact" class="container-fluid">
    <div class="col-md-4 mx-auto mb-auto mt-5">
        <div class="my-5">
            <h3 class="text-center mt-5">Contact Us</h3>
            <p class="text-muted text-center">How can we be of service?</p>
        </div>
        <?= form_open();?>
        
            <div class="form-group my-3">
                <?= form_input($data = array(
                    'type' => 'text',
                    'name' => 'fullname',
                    'placeholder' => 'Fullname',
                    'class' => 'form-control'
                ));?>
            </div>
            <div class="form-group my-3">
                <?= form_input($data = array(
                        'type' => 'text',
                        'name' => 'contact',
                        'placeholder' => 'Contact Info',
                        'class' => 'form-control'
                    ));?>
            </div>
            <div class="form-group my-3">
            <?= form_textarea($data = array(
                    'name' => 'message',
                    'value' => 'Send us a message...',
                    'class' => 'form-control'
                    
                ));?>
            </div>
            <?= form_submit($data = array(
                'type' => 'submit',
                'class' => 'btn btn-primary btn-block col-md-12',
                'value'=> 'Send Message'
            ));?>
            
        
        <?= form_close();?>
    </div>
</section>
