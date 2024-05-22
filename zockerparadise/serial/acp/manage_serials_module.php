<?php

namespace zockerparadise\serial\acp;

class manage_serials_module
{
    public function main()
    {
        $this->tpl_name = 'acp_manage_serials';
        $this->page_title = $this->user->lang('ACP_MANAGE_SERIALS');
    }
}
