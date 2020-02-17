<?php


class Flash
{
    public function flashMessage($message, $type, $redirectUrl=null) {
        header("Location: {$redirectUrl}");
        echo "<div class=\"alert alert-{$type}\" role=\"alert\">{$message}</div>";
    }
}