<?php

class MakeModelCommand {
    private $modelName;
    private $attributes;

    public function __construct($modelName, $attributes = []) {
        $this->modelName = $modelName;
        $this->attributes = $attributes;
    }

    public function execute() {
        $modelContent = $this->generateModelContent();
        $modelPath = "Prak5/models/{$this->modelName}.php";
        
        if (file_put_contents($modelPath, $modelContent)) {
            echo "Model {$this->modelName} berhasil dibuat di {$modelPath}\n";
            return true;
        } else {
            echo "Gagal membuat model {$this->modelName}\n";
            return false;
        }
    }

    private function generateModelContent() {
        $className = $this->modelName;
        $attributes = $this->attributes;
        
        $content = "<?php\n\n";
        $content .= "class {$className} {\n";
        
        // Properties
        foreach ($attributes as $attr) {
            $content .= "    private \${$attr};\n";
        }
        $content .= "    private \$created_at;\n";
        $content .= "    private \$updated_at;\n\n";
        
        // Constructor
        $content .= "    public function __construct(";
        $params = [];
        foreach ($attributes as $attr) {
            $params[] = "\${$attr} = ''";
        }
        $content .= implode(", ", $params);
        $content .= ") {\n";
        foreach ($attributes as $attr) {
            $content .= "        \$this->{$attr} = \${$attr};\n";
        }
        $content .= "        \$this->created_at = date('Y-m-d H:i:s');\n";
        $content .= "        \$this->updated_at = date('Y-m-d H:i:s');\n";
        $content .= "    }\n\n";
        
        // Getters
        foreach ($attributes as $attr) {
            $getterName = "get" . ucfirst($attr);
            $content .= "    public function {$getterName}() {\n";
            $content .= "        return \$this->{$attr};\n";
            $content .= "    }\n\n";
        }
        
        // Setters
        foreach ($attributes as $attr) {
            $setterName = "set" . ucfirst($attr);
            $content .= "    public function {$setterName}(\${$attr}) {\n";
            $content .= "        \$this->{$attr} = \${$attr};\n";
            $content .= "        \$this->updated_at = date('Y-m-d H:i:s');\n";
            $content .= "    }\n\n";
        }
        
        $content .= "}\n";
        return $content;
    }
}

// Contoh penggunaan:
// $attributes = ['id', 'nama', 'lokasi', 'deskripsi', 'harga_tiket', 'jam_operasional', 'fasilitas', 'gambar'];
// $command = new MakeModelCommand('Wisata', $attributes);
// $command->execute(); 