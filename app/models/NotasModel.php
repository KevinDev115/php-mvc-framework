<?php

class NotasModel extends DataBase
{
    public function all()
    {
        $sql = 'SELECT * FROM notas';

        try {
            $this->query($sql);
			$res = $this->getAll();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }
}
