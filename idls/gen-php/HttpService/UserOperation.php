<?php
namespace HttpService;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class UserOperation {
  const REGISTER = 1;
  const LOGIN = 2;
  const LOGOUT = 3;
  const MODIFY = 4;
  static public $__names = array(
    1 => 'REGISTER',
    2 => 'LOGIN',
    3 => 'LOGOUT',
    4 => 'MODIFY',
  );
}

