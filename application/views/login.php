<div class="modal hide fade" id="modal-login" style="display: none;">
    <div class="modal-header">
        <a class="close" href="#">×</a>
        <h3>Evil login form</h3>
    </div>
    <div class="modal-body">
        <?php echo form_open('loggin_evil'); ?>
        <fieldset>
            <div class="clearfix">
                <label for="xlInput">Evil Login</label>
                <div class="input">
                    <input type="text" name="email" id="" class="span4">
                </div>
            </div>
            <div class="clearfix">
                <label for="xlInput">Evil Password</label>
                <div class="input">
                    <input type="password" name="password" id="" class="span4">
                </div>
                <div class="input">
                    <?php echo form_checkbox('remember', '1', FALSE);?>
                    <span class="help-block">Remember my Evil</span>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <input class="btn primary" type="submit" value="Login to evil" />
        <!--        <a class="btn secondary" href="#">Forgot my evil</a>-->
        <?php echo form_close();?>
    </div>
</div>