<?php

namespace Libraries;

class FileManagement
{
    private $allowedFileTypes;

    public function __construct(array $allowedFileTypes = ['jpg', 'jpeg', 'png'])
    {
        $this->allowedFileTypes = $allowedFileTypes;
    }

    public function handleFileUpload($fileInput, $targetDir)
    {
        if (!isset($_FILES[$fileInput])) {
            throw new \Exception("No file uploaded with input name: $fileInput");
        }

        $file = $_FILES[$fileInput];
        $fileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($fileType, $this->allowedFileTypes)) {
            throw new \Exception("File type not allowed. Only " . implode(", ", $this->allowedFileTypes) . " are allowed.");
        }

        // Check file size (optional, here is an example with 5MB limit)
        if ($file["size"] > 5000000) {
            throw new \Exception("File size exceeds the limit of 5MB.");
        }

        // Generate a unique random file name
        $uniqueFileName = bin2hex(random_bytes(16)) . '.' . $fileType;
        $targetFile = $_SERVER['DOCUMENT_ROOT'] . $targetDir . $uniqueFileName;

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $targetDir)) {
            mkdir($_SERVER['DOCUMENT_ROOT'] . $targetDir, 0777, true);
        }

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $uniqueFileName; 
        } else {
            throw new \Exception("There was an error uploading the file.");
        }
    }
}
