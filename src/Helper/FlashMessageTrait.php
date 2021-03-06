<?php

namespace Alura\Courses\Helper;

trait FlashMessageTrait
{
    public function defineMessage(string $type, string $message): void
    {
        $_SESSION['message'] = $message;
        $_SESSION['message_type'] = $type;
    }
}