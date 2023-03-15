<?php declare(strict_types=1);

class WebContent 
{
    private string $title;
    private string $text;

    public function __construct(string $title, string $text) 
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function showArticle(bool $breakingNews = false): void 
    {
        echo "<h2>", ($breakingNews) ? "BREAKING: " : '', $this->title, "</h2>";
        echo "<p>{$this->text}</p>";
    }

    public function showAd(): void 
    {
        echo "<h2>" . strtoupper($this->title) . "</h2>";
        echo "<p>{$this->text}</p>";
    }

    public function showVacancy(): void 
    {
        echo "<h2>" . $this->title . " - apply now!</h2>";
        echo "<p>{$this->text}</p>";
    }
}