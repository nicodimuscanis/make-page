<?php
// Удаляем все файлы с расширением .html_
$filesToDelete = glob("*.html_");
foreach ($filesToDelete as $file) {
    unlink($file);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST["text"];  // Получаем значение текста из формы

    // Генерируем случайное имя файла
    $filename = uniqid('', true) . '.html_';

    // Заменяем символы новой строки на HTML-теги <br>
    $text = nl2br($text);

    $file = fopen($filename, "w");

    fwrite($file, "<!DOCTYPE html>\n");
    fwrite($file, "<html>\n");
    fwrite($file, "<head>\n");
    fwrite($file, "  <title>" . $filename . "</title>\n");
    fwrite($file, "  <meta charset=\"UTF-8\">\n");
    fwrite($file, "</head>\n");
    fwrite($file, "<body>\n");
    fwrite($file, "<pre>\n" . $text . "\n</pre>\n");
    fwrite($file, "</body>\n");
    fwrite($file, "</html>");

    fclose($file);

    header("Location: " . $filename);
}
?>
