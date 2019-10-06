<?php

/**
 * 
 * Este modelo tiene todas las consultas SQL a la base de datos.
 */

class NotasModel extends DataBase
{
    public function all()
    {
        $sql = 'SELECT * FROM notas ORDER BY fecha_creacion DESC';

        try {
            $this->query($sql);
			$res = $this->getAll();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }

    public function create($data)
    {
        $sql = 'INSERT INTO notas (contenido, color) VALUES (?,?)';

        try {
            $this->query($sql);
            $this->bind(1,$data['contenido']);
            $this->bind(2,$data['color']);
			$res = $this->execute();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }

    public function update($data)
    {
        $sql = 'UPDATE notas SET contenido = ?, color = ? WHERE id = ?';

        try {
            $this->query($sql);
            $this->bind(1,$data['contenido']);
            $this->bind(2,$data['color']);
            $this->bind(3,$data['id']);
			$res = $this->execute();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM notas WHERE id = ?';

        try {
            $this->query($sql);
            $this->bind(1,$id);
			$res = $this->execute();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }

    public function find($id)
    {
        $sql = 'SELECT * FROM notas WHERE id = ?';

        try {
            $this->query($sql);
            $this->bind(1, $id);
			$res = $this->getOne();
			return $res;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }
}
