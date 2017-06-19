<?php

abstract class Ata
{

    protected $area;
    protected $path;

    public function getArea()
    {
        return $this->area;
    }

    public function listar()
    {
        $iterator = new \DirectoryIterator($this->path);
        foreach ($iterator as $item) {
            if ($item->getFilename() != '.' && $item->getFilename() != '..') {
                $ata['nome'] = $item->getFileName();
                $ata['href'] = $this->path . $ata['nome'];
                $atas[] = $ata;
            }
        }

        return $atas;
    }

    public function salvar()
    {
        $result['msg'] = uploadFile('fileUpload', $this->path);
        $result['alert'] = $result['msg'] === 'Upload realizado com sucesso.' ? 'alert alert-success': 'alert alert-danger';
        return $result;
    }

}