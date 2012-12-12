<?php

interface IDAO{
	public function create($o);
	public function update($o);
	public function delete($o);
	public function findById($id);
	public function findAll();
}
?>