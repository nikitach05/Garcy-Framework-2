<?php /* Smarty version 3.1.27, created on 2016-02-01 00:55:53
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\pages\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2062956ae82e98c9837_53078560%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0b8f4df3a7aab39f8ba03b01597c6142bb4683' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\pages\\add.tpl',
      1 => 1454277353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062956ae82e98c9837_53078560',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae82e9b00df6_23160591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae82e9b00df6_23160591')) {
function content_56ae82e9b00df6_23160591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2062956ae82e98c9837_53078560';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<?php echo '<script'; ?>
 src="/public/libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
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
		<a href="/adminpanel/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ('../includes/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	    <div class="content">
			<h1>Новая страница</h1>
			<form id="dataFormAddPage">
				<input type="hidden" name="flag" value="addStaticPage">
				<input type="text" name="link">
				<textarea name="content"></textarea>
			</form>
			<button id="addStaticPage">Добавить</button>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>