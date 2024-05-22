<?php

namespace zockerparadise\serial\ucp\info;

class ucp_fmgs_serial_info
{
    public function module()
    {
        return [
            'filename' => '\zockerparadise\serial\ucp\controller\fmgs_serial_controller',
            'title'    => 'UCP_FMGS_SERIAL',
            'modes'    => [
                'fmgs_serial' => [
                    'title' => 'UCP_FMGS_SERIAL',
                    'auth'  => 'ext_zockerparadise/serial',
                    'cat'   => ['UCP_PROFILE'],
                ],
            ],
        ];
    }
}
