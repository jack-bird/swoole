<?php
/**
 * Created by PhpStorm.
 * User: 18048
 * Date: 2017/9/7
 * Time: 12:06
 */

class Service
{
    private  $swoole;

    public function __construct()
    {
        $this->swoole = new Swoole\Server('127.0.0.1',9501);
    }

    private function setParam()
    {
        $this->swoole->set([
            'worker_num'=>1,
            'daemonize'=>false,
            'task_worker_num'=>8,
            'task_ipc_mode'=>3
        ]);
    }

    private function onOpen()
    {
        $this->swoole->on('open',function($server,$request){
           echo "server:{$request}";
        });
    }

    public function start()
    {
        $this->setParam();
        $this->onOpen();
        $this->swoole->start();
    }
}