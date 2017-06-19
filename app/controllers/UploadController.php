<?php


class UploadController
{
    private $result = "";

    public function nrc()
    {
        $ata = new AtaNRC();
        $this->result = $this->salvar($ata);
        $this->listar($ata);
    }

    public function feitos()
    {
        $ata = new AtaFeitos();
        $this->result = $this->salvar($ata);
        $this->listar($ata);
    }

    private function salvar(Ata $ata)
    {
        return $ata->salvar();
    }

    private function listar(Ata $ata)
    {
        $area = $ata->getArea();
        $atas = $ata->listar();
        $result = $this->result;

        return view('layout', compact('area', 'atas', 'result'));
    }

}