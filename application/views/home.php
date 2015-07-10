
<p><h4>Home page</h4><br />

</p>
<p>
    <?php
        if(isset($message)){
            echo $message;
        }
    ?>
</p>
<p>
    <a href="<?php echo base_url('/callback_test') ?>">Callback test</a>
</p>