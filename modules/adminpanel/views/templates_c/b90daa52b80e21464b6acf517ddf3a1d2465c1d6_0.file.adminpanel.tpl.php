<?php /* Smarty version 3.1.27, created on 2016-01-20 00:13:44
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\adminpanel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8021569ea70842e893_59797642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90daa52b80e21464b6acf517ddf3a1d2465c1d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\adminpanel.tpl',
      1 => 1453235875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8021569ea70842e893_59797642',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569ea7085d2b28_41889172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569ea7085d2b28_41889172')) {
function content_569ea7085d2b28_41889172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8021569ea70842e893_59797642';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<?php echo '<script'; ?>
 src="/public//libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/public/libs/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/adminpanel/adminpanel.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="hero">
	<div class="panel">
		<a href="/adminpanel/index/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	  <nav>
	      <ul class="nav">
	        <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'indexAction') {?> class="click" <?php }?>><a href="/adminpanel/">Главная</a></li>
	        <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'blogAction') {?> class="click" <?php }?>><a href="/adminpanel/index/blog/">Блог</a></li>
	      </ul>
	    </nav>
	  
	    <div class="content">
		    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'indexAction') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('includes/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'blogAction') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('includes/blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'settingsAction') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('includes/settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php } else { ?>
			<h1>Страница не найдена.</h1>
			<?php }?>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>