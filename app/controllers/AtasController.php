<?php


class AtasController
{

    public static function nrc()
    {
        self::listar(new AtaNRC());
    }

    public static function feitos()
    {
        self::listar(new AtaFeitos());
    }

    private static function listar(Ata $ata)
    {
        $area = $ata->getArea();
        $atas = $ata->listar();

        return view('layout', compact('area', 'atas'));
    }

}