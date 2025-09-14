<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToTablePesan extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pesan', [
            'status' => [
                'type'       => "ENUM('duniaadvertising','bintarajayapersada')",
                'default'    => 'duniaadvertising',
                'null'       => false,
                'after'      => 'rating' // meletakkan setelah kolom rating
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pesan','status');
    }
}
