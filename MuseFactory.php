<?php

namespace Muse;

use Muse\Generator\JsonSchemaV4Generator;
use Muse\Generator\FakeDataProvider\Dumb;
use Muse\Generator\FakeDataProvider\Random;
use Muse\Generator\FakeDataProvider\Faker;

class MuseFactory
{
    public static function createDumbMuse()
    {
        return new Muse(new JsonSchemaV4Generator(new Dumb()));
    }

    public static function createRandomMuse()
    {
        return new Muse(new JsonSchemaV4Generator(new Random()));
    }

    public static function createFakerMuse()
    {
        return new Muse(new JsonSchemaV4Generator(new Faker()));
    }
}
