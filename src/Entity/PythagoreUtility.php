<?php
class PythagoreUtility {
    public function display() {
        $html = "<h1>Augustin Rio</h1>";
        $html .= "<h1>Symfony & table de Pythagore</h1>";
        $html .= "<table border='1'>";

        for ($i = 1; $i <= 10; $i++) {
            $html .= "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $html .= "<td>" . ($i * $j) . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }
}
?>
