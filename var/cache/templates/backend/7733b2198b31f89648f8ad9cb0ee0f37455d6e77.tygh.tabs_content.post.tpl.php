<?php /* Smarty version Smarty-3.1.21, created on 2016-06-17 16:42:50
         compiled from "/var/www/html/cscart_ru_i/design/backend/templates/addons/reward_points/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15907004325763fe5ab40248-75711869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7733b2198b31f89648f8ad9cb0ee0f37455d6e77' => 
    array (
      0 => '/var/www/html/cscart_ru_i/design/backend/templates/addons/reward_points/hooks/categories/tabs_content.post.tpl',
      1 => 1466167672,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15907004325763fe5ab40248-75711869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_type' => 0,
    'category_data' => 0,
    'reward_usergroups' => 0,
    'm' => 0,
    'm_id' => 0,
    'reward_points' => 0,
    'point' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5763fe5abdd6e8_64814245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763fe5abdd6e8_64814245')) {function content_5763fe5abdd6e8_64814245($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('earned_points','override_g_points','usergroup','amount','amount_type','absolute','points_lower','percent'));
?>
<div class="hidden" id="content_reward_points">
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("earned_points"),'target'=>"#reward_points_categories_hook"), 0);?>

    <div id="reward_points_categories_hook" class="in collapse">
        <fieldset>
            <input type="hidden" name="category_data[is_op]" value="N">
            <label for="rp_is_op" class="checkbox">
                <input type="checkbox" name="category_data[is_op]" id="rp_is_op" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms([<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php }
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php } ?>], !this.checked);">
                <?php echo $_smarty_tpl->__("override_g_points");?>

            </label>
        <br>
        <table class="table table-middle">
        <thead class="cm-first-sibling">
        <tr>
            <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
            <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
            <th width="40%"><?php echo $_smarty_tpl->__("amount_type");?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["m_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["point"] = new Smarty_variable($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m_id']->value], null, 0);?>
            <tr>
                <td>
                    <input type="hidden" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td>
                    <input type="text" id="earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['point']->value['amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op']!="Y") {?>disabled="disabled"<?php }?>></td>
                <td>
                    <select id="points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount_type]" <?php if ($_smarty_tpl->tpl_vars['object_type']->value==@constant('CATEGORY_REWARD_POINTS')&&$_smarty_tpl->tpl_vars['category_data']->value['is_op']!='Y') {?>disabled="disabled"<?php }?> class="input-xlarge">
                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="A") {?>selected<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                        <option value="P" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="P") {?>selected<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                    </select></td>
        
            </tr>
        <?php } ?>
        </tbody>
        </table>
        </fieldset>
    </div>
</div><?php }} ?>
