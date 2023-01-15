<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Normalizer;

use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use TgBotApi\BotApiBase\Method\SetMyDefaultAdministratorRightsMethod;

class SetMyDefaultAdministratorRightsNormalizer implements NormalizerInterface
{
    /**
     * @var NormalizerInterface
     */
    private $objectNormalizer;

    /**
     * JsonSerializableNormalizer constructor.
     */
    public function __construct(NormalizerInterface $objectNormalizer)
    {
        $this->objectNormalizer = $objectNormalizer;
    }

    /**
     * @param SetMyDefaultAdministratorRightsMethod $topic
     * @param null $format
     *
     * @return array|bool|false|float|int|string
     * @throws ExceptionInterface
     *
     */
    public function normalize($topic, $format = null, array $context = [])
    {
        $serializer = new Serializer([
            new JsonSerializableNormalizer($this->objectNormalizer),
            $this->objectNormalizer,
        ]);

        $topic->rights = \json_encode($serializer->normalize($topic->rights, null, ['skip_null_values' => true]));

        return $serializer->normalize($topic, null, ['skip_null_values' => true]);
    }

    /**
     * @param mixed $data
     * @param null $format
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof SetMyDefaultAdministratorRightsMethod;
    }
}
