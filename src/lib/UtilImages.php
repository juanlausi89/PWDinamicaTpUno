<?php
namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\lib;

class UtilImages {

    public static function storeFile($file): string {
        $target_dir = "public/archivos/";
        
        // Obtener extensión del archivo
        $extarr = explode('.', $file["name"]);
        $filename = $extarr[sizeof($extarr) - 2];
        $ext = strtolower(end($extarr));

        // Tipos de archivos permitidos
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf','txt'];
        if (!in_array($ext, $allowed_extensions)) {
            // Extensión no permitida
            return "";
        }

        // Generar nombre de archivo único
        $hash = md5(uniqid($filename, true)) . '.' . $ext;
        $target_file = $target_dir . $hash;

        // Verificar tamaño del archivo (ejemplo: máximo 10MB)
        if ($file["size"] > 2 * 1024 * 1024) { // 2MB
            // Archivo demasiado grande
            return "";
        }

        // Verificar si el archivo es una imagen
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
            $check = getimagesize($file["tmp_name"]);
            if ($check === false) {
                // El archivo no es una imagen válida
                return "";
            }
        }

        // Intentar mover el archivo cargado
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $hash;
        } else {
            // Error al mover el archivo
            return "";
        }
    }

    public static function readFileContent($filename): string {
        $file_path = "public/archivos/" . $filename;
        
        // Verificar si el archivo existe
        if (!file_exists($file_path)) {
            return "";
        }
        
        // Leer el contenido del archivo
        $content = file_get_contents($file_path);
        if ($content === false) {
            return "";
        }

        return $content;
    }
}