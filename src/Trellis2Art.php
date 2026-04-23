<?php

namespace Trellis2Art;

final class Trellis2Art
{
    public const HOMEPAGE = 'https://www.trellis2.art';
    public const SUMMARY = 'Trellis 2 is an AI art website for image generation and creative workflows.';

    public static function homepage(): string
    {
        return self::HOMEPAGE;
    }

    public static function summary(): string
    {
        return self::SUMMARY;
    }
}
