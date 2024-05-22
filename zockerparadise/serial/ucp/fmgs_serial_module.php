<?php

namespace zockerparadise\serial\ucp;

class fmgs_serial_module
{
    public function main()
    {
        $this->tpl_name = 'ucp_fmgs_serial';
        $this->page_title = $this->user->lang('UCP_FMGS_SERIAL');
    }
}
