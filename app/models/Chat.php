<?php

namespace App\Models;

use Libraries\Model;

class Chat extends Model
{
    public function __construct()
    {
        $this->table_name = 'chats';
    }

    public function pluckChats($column, $condition): array
    {
        try {
            $this->initialize();
            $stmt = $this->db->prepare("SELECT * FROM " . $this->table_name . " WHERE $column = :condition");
            $stmt->bindValue(':condition', $condition);
            $stmt->execute();

            $chatsByKodeChat = [];

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $kodeChat = $row['kode_chat'];

                if (!isset($chatsByKodeChat[$kodeChat])) {
                    $chatsByKodeChat[$kodeChat] = $row;
                }
            }

            return $chatsByKodeChat;
        } catch (\Exception $e) {
            error_log("Error in chatsPluck: " . $e->getMessage());
            return []; 
        }
    }
}
