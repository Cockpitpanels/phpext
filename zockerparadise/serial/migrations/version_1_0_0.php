<?php

namespace zockerparadise\serial\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
    public function effectively_installed()
    {
        return isset($this->config['serials_installed']) && $this->config['serials_installed'];
    }

    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\v31x\v311rc1'];
    }

    public function update_schema()
    {
        return [
            'add_tables' => [
                $this->table_prefix . 'serials' => [
                    'COLUMNS' => [
                        'serial_id' => ['UINT', null, 'auto_increment'],
                        'user_id' => ['UINT', 0],
                        'serial_key' => ['VCHAR:255', ''],
                    ],
                    'PRIMARY_KEY' => 'serial_id',
                ],
            ],
        ];
    }

    public function revert_schema()
    {
        return [
            'drop_tables' => [
                $this->table_prefix . 'serials',
            ],
        ];
    }

    public function update_data()
    {
        return [
            ['config.add', ['serials_installed', 1]],
        ];
    }
}
