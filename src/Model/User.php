<?php

declare(strict_types=1);

namespace App\Model;

use PDO;

class User extends Model
{
    public function create(array $user): void
    {
        $stm = $this->db()->prepare('
            INSERT INTO users (`name`,email,password,status,created_at)
            VALUE (?,?,?,?,?)
        ');

        $stm->execute([
            $user['name'],
            $user['email'],
            $user['password'],
            1,
            (new \DateTime())->format('Y-m-d H:i:s')
        ]);
    }

    public function update(int $id, array $user): void
    {
        $sql = '
            UPDATE users SET `name` = ?, email = ?, password = ?, status = ?, created_at = ?
            WHERE id = ?
        ';

        $user[] = $id;
        $stm = $this->db()->prepare($sql);
        $stm->execute($user);
    }
}