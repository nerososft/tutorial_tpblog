<?php
namespace Home\Dto;
use Home\Dto\BaseDto;

class User extends BaseDto{
  var  $uid;
  var $username;
  var $signature;
  var $avatarurl;
  function __construct($uid,$username,$signature,$avatarurl){
    $this->uid = $uid;
    $this->username = $username;
    $this->signature =$signature;
    $this->avatarurl = $avatarurl;
  }
}
 ?>
