<?php

namespace zockerparadise\serial\acp\info;

class acp_manage_serials_info
{
    public function module()
    {
        return [
            'filename' => '\zockerparadise\serial\acp\controller\manage_serials_controller',
            'title'    => 'ACP_MANAGE_SERIALS',
            'modes'    => [
                'manage_serials' => [
                    'title' => 'ACP_MANAGE_SERIALS',
                    'auth'  => 'acl_a_board',
                    'cat'   => ['ACP_CAT_DOT_MODS'],
                ],
            ],
        ];
    }
}
