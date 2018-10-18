<?php
define('ADMINHOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homeadmin');

define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'SkinsController#Home',
      'home' =>'SkinsController#Home',
      'homeadmin'=> 'AdminController#Home',
      'addProducto'=> 'AdminController#InsertarProducto',
      'addCategoria' =>'AdminController#InsertarCategoria',
      'borrar'=> 'AdminController#BorrarProducto',
      'borrarCategoria' => 'AdminController#BorrarCategoria',
      'modificarProducto' => 'AdminController#HomeModificarProducto',
      'modificarCategoria' => 'AdminController#ModificarCategoria',
      'updateProducto'=> 'AdminController#ModificarProducto',
      'login' => 'LoginController#login',
      'verificarLogin'=> 'LoginController#verificarLogin',
      'logout'=> 'LoginController#logout',
      'singup' => 'RegisterController#singup',
      'agregar' => 'UsuarioController#agregar',
      'buscarCategoria' => 'SkinsController#BuscarCategoria',
      'vermas'=>'AdminController#VerMas'
    ];

}

 ?>
