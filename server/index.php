<?php
$figure = null;
$error = null;

if (!empty($_POST)) {
    try {
        $figure = Figure::create($_POST['type'], $_POST['argument1'], $_POST['argument2']);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>
<?php

interface str{
    public function __toString();
}

abstract class Figure implements str
{
    public function __toString(){

    }
    const CIRCLE = 'circle';
    const SQUARE = 'square';
    const RECTANGLE = 'rectangle';

    public static function create($type, $argument1, $argument2 = null): Figure
    {
        switch ($type) {
            case self::CIRCLE:
                return new Circle($argument1);
            case self::SQUARE:
                return new Square($argument1);
            case self::RECTANGLE:
                return new Rectangle($argument1, $argument2);
        }

    }

    abstract public function getName(): string;

    abstract public function getPerimeter(): int;

    abstract public function getArea(): int;
}

class Circle extends Figure
{
    private $radius;

    public function __construct($radius)
    {

        $this->radius = $radius;
    }

    public function getName(): string
    {
        return 'Круг';
    }

    public function getPerimeter(): int
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea(): int
    {
        return 2 * pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Figure
{
    private $width;
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getName(): string
    {
        return 'Прямоугольник';
    }

    public function getPerimeter(): int
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

class Square extends Figure
{
    private $side;

    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getName(): string
    {
        return 'Квадрат';
    }

    public function getPerimeter(): int
    {
        return $this->side * 4;
    }

    public function getArea(): int
    {
        return pow($this->side, 2);
    }
}

?>

<?php if (!empty($figure)): ?>
    <p>Фигура: <?= $figure->getName() ?></p>
    <p>Площадь: <?= $figure->getArea() ?></p>
    <p>Периметр: <?= $figure->getPerimeter() ?></p>
<?php endif ?>

<form method="post">
    <select name="type">
        <option value="<?= Figure::CIRCLE ?>" <?= $_POST['type'] === Figure::CIRCLE ? 'selected' : '' ?>>
            Круг
        </option>
        <option value="<?= Figure::RECTANGLE ?>" <?= $_POST['type'] === Figure::RECTANGLE ? 'selected' : '' ?>>
            Прямоугольник
        </option>
        <option value="<?= Figure::SQUARE ?>" <?= $_POST['type'] === Figure::SQUARE ? 'selected' : '' ?>>
            Квадрат
        </option>
    </select>
    <label>
        Параметр 1
        <input name="argument1" value="<?= $_POST['argument1'] ?>">
    </label>
    <label>
        Параметр 2
        <input name="argument2" value="<?= $_POST['argument2'] ?>">
    </label>
    <input type="submit" value="Рассчитать">
</form>