<?php


class UploadController
{
    private static $result = "";

    public static function nrc()
    {
        $ata = new AtaNRC();
        self::$result = self::salvar($ata);
        self::listar($ata);
    }

    public static function feitos()
    {
        $ata = new AtaFeitos();
        self::$result = self::salvar($ata);
        self::listar($ata);
    }

    private static function salvar(Ata $ata)
    {
        return $ata->salvar();
    }

    private static function listar(Ata $ata)
    {
        $area = $ata->getArea();
        $atas = $ata->listar();
        $result = self::$result;

        return view('layout', compact('area', 'atas', 'result'));
    }

}