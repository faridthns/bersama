<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddARatingToPesan extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pesan', [
            'rating' => [
                'type'       => 'INT',
                'after'      => 'email' // opsional, biar posisinya setelah kolom email
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pesan', 'rating');
    }
}
