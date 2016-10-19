<?php
namespace Home\Dto\core;
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/17 0017
 * Time: 19:57
 */
class Result extends BaseDto
{
    var $state;
    var $resultcode;
    var $msg;
    var $data;

    /**
     * Result constructor.
     * @param $state
     * @param $resultcode
     * @param $msg
     * @param $data
     */
    public function __construct($state, $resultcode, $msg, $data)
    {
        $this->state = $state;
        $this->resultcode = $resultcode;
        $this->msg = $msg;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getResultcode()
    {
        return $this->resultcode;
    }

    /**
     * @param mixed $resultcode
     */
    public function setResultcode($resultcode)
    {
        $this->resultcode = $resultcode;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }



}