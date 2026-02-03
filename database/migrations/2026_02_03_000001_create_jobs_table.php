<?php

use Nano\Framework\Database;

return new class
{
    public function up(Database $db): void
    {
        $db->exec("
            CREATE TABLE IF NOT EXISTS jobs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                queue TEXT NOT NULL DEFAULT 'default',
                payload TEXT NOT NULL,
                attempts INTEGER NOT NULL DEFAULT 0,
                reserved_at INTEGER,
                available_at INTEGER NOT NULL,
                created_at INTEGER NOT NULL
            )
        ");

        $db->exec("CREATE INDEX IF NOT EXISTS idx_jobs_queue ON jobs(queue)");
        $db->exec("CREATE INDEX IF NOT EXISTS idx_jobs_reserved_at ON jobs(reserved_at)");
        $db->exec("CREATE INDEX IF NOT EXISTS idx_jobs_available_at ON jobs(available_at)");
    }

    public function down(Database $db): void
    {
        $db->exec("DROP TABLE IF EXISTS jobs");
    }
};
