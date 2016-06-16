<div class="control-group">
    <label class="control-label" for="my_payment_login">{__("addons.my_payment.login")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][login]" id="my_payment_login" value="{$processor_params.login}" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_password">{__("addons.my_payment.password")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="my_payment_password" value="{$processor_params.password}" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode">{__("test_live_mode")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" {if $processor_params.mode == "test"}selected="selected"{/if}>{__("test")}</option>
            <option value="live" {if $processor_params.mode == "live"}selected="selected"{/if}>{__("live")}</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="logging">{__("addons.my_payment.logging")}:</label>
    <div class="controls">
        <input type="checkbox" name="payment_data[processor_params][logging]" id="logging" value="Y" {if $processor_params.logging == 'Y'} checked="checked"{/if}/>
    </div>
</div>

