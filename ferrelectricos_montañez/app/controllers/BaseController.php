<?php
class BaseController
{
    private ?PDO $db = null;

    protected function getDb(): PDO
    {
        if ($this->db === null) {
            $config = require __DIR__ . '/../../config/database.php';
            require_once __DIR__ . '/../core/Database.php';
            $database = new Database($config);
            $this->db = $database->getConnection();
        }

        return $this->db;
    }

    protected function loadModel(string $modelName)
    {
        require_once __DIR__ . '/../models/BaseModel.php';
        $modelFile = __DIR__ . '/../models/' . $modelName . '.php';
        if (!file_exists($modelFile)) {
            return null;
        }

        require_once $modelFile;
        if (!class_exists($modelName)) {
            return null;
        }

        return new $modelName($this->getDb());
    }

    protected function render(string $viewPath, array $data = [])
    {
        extract($data, EXTR_SKIP);
        require_once __DIR__ . '/../views/' . $viewPath;
    }
}
