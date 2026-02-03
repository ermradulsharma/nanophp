<?php

use Nano\Framework\Database;

class CreatePersonalAccessTokensTable
{
    public function up()
    {
        $db = new Database();
        
        $sql = "CREATE TABLE IF NOT EXISTS personal_access_tokens (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            tokenable_type VARCHAR(255) NOT NULL,
            tokenable_id INTEGER NOT NULL,
            name VARCHAR(255) NOT NULL,
            token VARCHAR(64) NOT NULL UNIQUE,
            abilities TEXT,
            last_used_at DATETIME,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        
        $db->exec($sql);
        
        // Add index for token lookups
        $db->exec("CREATE INDEX IF NOT EXISTS pat_token_index ON personal_access_tokens(token)");
        $db->exec("CREATE INDEX IF NOT EXISTS pat_tokenable_index ON personal_access_tokens(tokenable_type, tokenable_id)");
    }

    public function down()
    {
        $db = new Database();
        $db->exec("DROP TABLE IF EXISTS personal_access_tokens");
    }
}