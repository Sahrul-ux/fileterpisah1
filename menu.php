<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <?php
    // Pindahkan class Menu kesini
    class Menu
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function hello()
        {
            echo 'Saya adalah ' . $this->name;
        }
    }

    ?>
</body>

</html>