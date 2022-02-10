<section class="container ">
    <div class="col-md-5 mx-auto">
        <h3 class="text-center mb-4">Admin Login</h3>
        <?= form_open('admin_login');?>
            <div class="form-group my-3">
                <?= form_input($data = array(
                    'type' => 'text',
                    'name' => 'username',
                    'placeholder' => 'Username',
                    'class' => 'form-control'
                ));?>
            </div>
            <div class="form-group my-3">
                <?= form_password($data = array(
                        'name' => 'userpassword',
                        'placeholder' => 'Password',
                        'class' => 'form-control'
                    ));?>
            </div>
           
            <?= form_submit($data = array(
                'type' => 'submit',
                'class' => 'btn btn-primary btn-block col-md-12',
                'value'=> 'Login'
            ));?>
            
        
        <?= form_close();?>
    </div>
</section>
