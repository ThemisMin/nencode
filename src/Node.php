<?php

    namespace ThemisMin\Nencode;


    class Node
    {
        /**
         * 保存node id
         * @var string
         */
        public $nid;
        /**
         * 保存IP地址
         * @var string
         */
        public $ip;
        /**
         * 保存端口号
         * @var integer
         */
        public $port;

        /**
         * 析构方法, 初始化模型
         * @param string $nid node id
         * @param string $ip IP地址
         * @param integer $port 端口号
         * @return void
         */
        public function __construct($nid, $ip, $port)
        {
            $this->nid = $nid;
            $this->ip = $ip;
            $this->port = $port;
        }

        /**
         * @return string
         */
        public function getNid()
        {
            return $this->nid;
        }

        /**
         * @param string $nid
         */
        public function setNid($nid)
        {
            $this->nid = $nid;
        }

        /**
         * @return string
         */
        public function getIp()
        {
            return $this->ip;
        }

        /**
         * @param string $ip
         */
        public function setIp($ip)
        {
            $this->ip = $ip;
        }

        /**
         * @return int
         */
        public function getPort()
        {
            return $this->port;
        }

        /**
         * @param int $port
         */
        public function setPort($port)
        {
            $this->port = $port;
        }

    }