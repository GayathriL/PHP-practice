<?php

require __DIR__. '/vendor/autoload.php';

if($_GET['action'] == 'home')
{
	$homeobj=new Compassite\controller\Home();
	$homeobj->getHome();
}

if($_GET['action']=='login'){
$viewObj=new Compassite\controller\AdminController();
$viewObj->getMyView();
}

if($_GET['action']=='view'){
$view=new Compassite\controller\adminviewpagecontroller();
$view->adminviewpage();
}

if($_GET['action']=='list'){
$list=new Compassite\controller\Listusers();
$list->listusers();
}

if($_GET['action'] == 'loginasuser')
{
	$login=new Compassite\controller\UserController();
	$login->usercontroller();
}

if($_GET['action'] == 'loginuser')
{
	$loginuser=new Compassite\controller\Loginuser();
	$loginuser->loginuser();
}

if($_GET['action'] == 'userprofile')
{
	$profilechange=new Compassite\controller\UserProfileChangeController();
	$profilechange->userprofilechange();
}

if($_GET['action'] == 'edit')
{
	$useredit=new Compassite\controller\EditUserController();
	$useredit->edituser();
}

if($_GET['action'] == 'delete')
{
	$userdelete=new Compassite\controller\DeleteUserController();
	$userdelete->deleteuser();
}

if($_GET['action'] == 'enable')
{
	$disable=new Compassite\controller\EnableDisablecontroller();
	$disable->enabledisable();
}

if($_GET['action'] == 'action')
{
	$act=new Compassite\controller\ActionController();
	$act->action();
}

