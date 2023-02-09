<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use ApiPlatform\Core\Serializer\AbstractItemNormalizer;
use App\Entity\Client;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

final class CreateClientDataTransformer implements DataTransformerInterface
{
    private $securityEncoder;

    public function __construct(UserPasswordEncoderInterface $securityEncoder)
    {
        $this->securityEncoder = $securityEncoder;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($data, string $to, array $context = [])
    {
        $client = new Client();
        $client->setEmail($data->email);
        $client->setPassword($this->securityEncoder->encodePassword($client, $data->password));

        return $client;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        if ($data instanceof Client) {
            return false;
        }

        return Client::class === $to && null !== ($context['input']['class'] ?? null);
    }
}