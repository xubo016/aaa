<?php
namespace app\admin\controller;
use think\Controller;
class Error extends Controller
{
  /**
   * 空控制器
   */
  public function index(){
    $this->redirect('index/index');
  }
}
?>