<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-29 22:27:20
         compiled from "C:\OSPanel\domains\okay-test\design\okay_shop\html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145355b86f398d42891-75281866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93194bc31c11db9dfdc9eaa520d25f3ad5bafda' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay-test\\design\\okay_shop\\html\\page.tpl',
      1 => 1535567553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145355b86f398d42891-75281866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b86f398d92389_40145160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b86f398d92389_40145160')) {function content_5b86f398d92389_40145160($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    
    <h1 class="h1">
        <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
    </h1>
    
    
    <div class="block padding">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>
    
<?php }?>
<?php }} ?>
