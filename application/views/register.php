<div class="modal hide fade" id="modal-register" style="display: none;">
    <div class="modal-header">
        <a class="close" href="#">×</a>
        <h3>Evil register form</h3>
    </div>
    <div class="modal-body">
        <?php echo form_open('create_evil'); ?>
            <fieldset>
                <div class="clearfix">
                    <label for="xlInput">Evil Username</label>
                    <div class="input">
                        <input type="text" name="username" value="<?php echo set_value('username'); ?>" id="" class="span4">
                        <span class="help-block">It will be your login</span>
                    </div>
                </div>
                <div class="clearfix">
                    <label for="xlInput">Evil Email</label>
                    <div class="input">
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" id="" class="span4">
                    </div>
                </div>
                <div class="clearfix">
                    <label for="xlInput">Evil Password</label>
                    <div class="input">
                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" id="" class="span4">
                    </div>
                </div>
                <div class="clearfix">
                    <label for="xlInput">Confirm Password</label>
                    <div class="input">
                        <input type="password" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>" id="" class="span4">
                    </div>
                </div>
            </fieldset>
    </div>
    <div class="modal-footer">
        <input class="btn primary" type="submit" value="Register to evil" />
<!--        <a class="btn primary" href="#">Register to evil</a>-->
<!--        <a class="btn secondary" href="#">I`m not evil</a>-->
    </div>
    </form>
</div>
