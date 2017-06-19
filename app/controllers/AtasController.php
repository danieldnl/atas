<?php


class AtasController
{

    public function nrc()
    {
        $this->listar(new AtaNRC());
    }

    public function feitos()
    {
        $this->listar(new AtaFeitos());
    }

    private function listar(Ata $ata)
    {
        $area = $ata->getArea();
        $atas = $ata->listar();

        return view('layout', compact('area', 'atas'));
    }

    private function salvar(Ata $ata)
    {
        $ata->salvar();
    }

}