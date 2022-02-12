<div class="container vh-100">
    <h2 class="text-center mt-5">VIEW MESSAGES</h2>
    <div class="col-md-8 mx-auto mt-5">
        <?php if($this->session->userdata('error')){ ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?= $this->session->userdata('error'); ?>
                </div>
                <?php $this->session->unset_userdata('error')?>
            <?php } ?>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact Info</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($messages){?>
                        <?php foreach($messages as $message){?>
                        <tr>
                            <td><?= $message->inquirer_name;?></td>
                            <td><?= $message->inquirer_contact;?></td>
                            <td><a href="<?= base_url('one_message');?>/<?=$message->id;?>" class="btn btn-outline-primary">view</a></td>
                            <td><a href="<?= base_url('delete_message');?>/<?=$message->id;?>" onclick="confirmation()" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php }?>
                    <?php }?>
                </tbody>
            </table>
    </div>
</div>
</div>