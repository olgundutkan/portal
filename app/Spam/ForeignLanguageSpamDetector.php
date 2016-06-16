<?php

namespace Lio\Spam;

use Lio\Users\User;

class ForeignLanguageSpamDetector implements SpamDetector
{
    public function detectsSpam($value, User $user = null): bool
    {
        return (bool) preg_match(
            "/[일안명빠에외하전나밤사이팅토노카ぬ벳인포방어코리아맨강남야구장강배팅배트ミ법스포츠석사배지석사소테크카주소る】ズअ서현오피अ분당오피अ]+/iu",
            $value
        );
    }
}
