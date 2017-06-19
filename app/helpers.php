<?php

function uploadFile($name, $dir)
{
    if (isset($_FILES[$name])) {
        $errors = array();
        $allowed_ext = array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'odt', 'zip', '7z', 'txt');
        $file_name = $_FILES[$name]['name'];
        $ext = explode('.', strtolower($file_name));
        $file_ext = $ext[1];
        $file_size = $_FILES[$name]['size'];
        $file_tmp = $_FILES[$name]['tmp_name'];

        if (in_array($file_ext, $allowed_ext) === false) {
            $errors[] = "Tipo de arquivo não permitido.";
        }

        if ($file_size > 5242880) {
            $errors[] = "O arquivo não pode ser maior do que 5MB.";
        }

        if (empty($errors)) {
            //Upload file
            if (move_uploaded_file($file_tmp, $dir.$file_name)) {
                $result = "Upload realizado com sucesso.";
            } else {
                $result = "Ocorreram erros ao efetuar o upload do arquivo.";
            }
        } else {
            $result = implode('<br>', $errors);
        }

        return $result;
    }
}