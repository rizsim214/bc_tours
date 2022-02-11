<section id="contact" class="container-fluid">
    <div class="col-md-4 mx-auto mb-auto mt-5">
        <div class="mb-3">
            <h3 class="text-center mt-5">Inquiry</h3>
            <p class="text-muted text-center">How can we help you?</p>
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
                    'placeholder' => 'Send us a message...',
                    'class' => 'form-control',
                    'rows' => '5',
                    'cols' => '50'
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
