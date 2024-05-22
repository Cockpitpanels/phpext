<?php

namespace zockerparadise\serial\ucp\controller;

class fmgs_serial_controller
{
    protected $db;
    protected $template;
    protected $user;

    public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user)
    {
        $this->db = $db;
        $this->template = $template;
        $this->user = $user;
    }

    public function handle()
    {
        $user_id = $this->user->data['user_id'];

        if ($this->request->is_set_post('get_serial'))
        {
            $sql = 'SELECT serial_key FROM ' . SERIALS_TABLE . ' WHERE user_id = 0 LIMIT 1';
            $result = $this->db->sql_query($sql);
            $serial = $this->db->sql_fetchrow($result);

            if ($serial)
            {
                $sql = 'UPDATE ' . SERIALS_TABLE . ' SET user_id = ' . (int) $user_id . ' WHERE serial_id = ' . (int) $serial['serial_id'];
                $this->db->sql_query($sql);

                trigger_error($this->user->lang('SERIAL_ASSIGNED'));
            }
            else
            {
                trigger_error($this->user->lang('NO_SERIAL_AVAILABLE'));
            }
        }

        return $this->helper->render('ucp_fmgs_serial.html', 'FMGS_SERIAL');
    }
}
