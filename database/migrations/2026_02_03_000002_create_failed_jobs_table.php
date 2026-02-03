<?php

use Nano\Framework\Database;

return new class
{
    public function up(Database $db): void
    {
        $db->exec("
            CREATE TABLE IF NOT EXISTS failed_jobs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                connection TEXT NOT NULL DEFAULT 'database',
                queue TEXT NOT NULL DEFAULT 'default',
                payload TEXT NOT NULL,
                exception TEXT NOT NULL,
                failed_at INTEGER NOT NULL
            )
        ");

        $db->exec("CREATE INDEX IF NOT EXISTS idx_failed_jobs_queue ON failed_jobs(queue)");
        $db->exec("CREATE INDEX IF NOT EXISTS idx_failed_jobs_failed_at ON failed_jobs(failed_at)");
    }

    public function down(Database $db): void
    {
        $db->exec("DROP TABLE IF EXISTS failed_jobs");
    }
};
