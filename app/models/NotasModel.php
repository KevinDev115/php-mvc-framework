<?php

class NotasModel extends DataBase
{
    public function tets()
    {
        $sql = 'SELECT * FROM nota';

        try {
            $this->query($sql);
			$res = $this->getAll();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }
}
