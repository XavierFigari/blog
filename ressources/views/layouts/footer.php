<?php
if (isset($_SESSION['dateFirstVisit'])) {
    echo "<p style=\"text-align: center;\">Date de première visite : " .
        $_SESSION['dateFirstVisit'] .
        " - Nombre de pages consultées : " . $_SESSION['countViewPage'] . "  </p>";
}
?>

</body>

</html>