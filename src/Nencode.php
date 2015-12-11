<?php

    namespace ThemisMin\Nencode;

    /**
     * nodes 编码
     * @package ThemisMin\Nencode
     */
    class Nencode
    {

        /**
         * 对nodes列表编码
         * @param  mixed $nodes 要编码的列表
         * @return string        编码后的数据
         */
        public static function encode($nodes)
        {
            // 判断当前nodes列表是否为空
            if (count($nodes) == 0)
                return $nodes;

            $n = '';

            // 循环对node进行编码
            foreach ($nodes as $node)
                $n .= pack('a20Nn', $node->nid, ip2long($node->ip), $node->port);

            return $n;
        }

        /**
         * 对nodes列表解码
         * @param  string $msg 要解码的数据
         * @return mixed      解码后的数据
         */
        public static function decode($msg)
        {
            // 先判断数据长度是否正确
            if ((strlen($msg) % 26) != 0)
                return array();

            $n = array();

            // 每次截取26字节进行解码
            foreach (str_split($msg, 26) as $s) {
                // 将截取到的字节进行字节序解码
                $r = unpack('a20nid/Nip/np', $s);
                $n[] = new Node($r['nid'], long2ip($r['ip']), $r['p']);
            }

            return $n;
        }

    }
