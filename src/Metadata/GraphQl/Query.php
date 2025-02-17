<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Metadata\GraphQl;

use ApiPlatform\State\OptionsInterface;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class Query extends Operation
{
    /**
     * {@inheritdoc}
     */
    public function __construct(
        ?string $resolver = null,
        ?array $args = null,
        ?array $links = null,

        // abstract operation arguments
        ?string $shortName = null,
        ?string $class = null,
        ?bool $paginationEnabled = null,
        ?string $paginationType = null,
        ?int $paginationItemsPerPage = null,
        ?int $paginationMaximumItemsPerPage = null,
        ?bool $paginationPartial = null,
        ?bool $paginationClientEnabled = null,
        ?bool $paginationClientItemsPerPage = null,
        ?bool $paginationClientPartial = null,
        ?bool $paginationFetchJoinCollection = null,
        ?bool $paginationUseOutputWalkers = null,
        ?array $paginationViaCursor = null,
        ?array $order = null,
        ?string $description = null,
        ?array $normalizationContext = null,
        ?array $denormalizationContext = null,
        ?bool $collectDenormalizationErrors = null,
        ?string $security = null,
        ?string $securityMessage = null,
        ?string $securityPostDenormalize = null,
        ?string $securityPostDenormalizeMessage = null,
        ?string $securityPostValidation = null,
        ?string $securityPostValidationMessage = null,
        ?string $deprecationReason = null,
        ?array $filters = null,
        ?array $validationContext = null,
        mixed $input = null,
        mixed $output = null,
        /** @var array|bool|string|null $mercure */
        $mercure = null,
        /** @var bool|string|null $messenger */
        $messenger = null,
        ?bool $elasticsearch = null,
        ?int $urlGenerationStrategy = null,
        ?bool $read = null,
        ?bool $deserialize = null,
        ?bool $validate = null,
        ?bool $write = null,
        ?bool $serialize = null,
        ?bool $fetchPartial = null,
        ?bool $forceEager = null,
        ?int $priority = null,
        ?string $name = null,
        /** @var (callable(): mixed)|string|null $provider */
        $provider = null,
        /** @var (callable(): mixed)|string|null $processor */
        $processor = null,
        array $extraProperties = [],
        ?OptionsInterface $stateOptions = null,
        protected ?bool $nested = null,
    ) {
        parent::__construct(...\func_get_args());
        $this->name = $name ?: 'item_query';
    }

    public function getNested(): ?bool
    {
        return $this->nested;
    }

    public function withNested(?bool $nested = null): self
    {
        $self = clone $this;
        $self->nested = $nested;

        return $self;
    }
}
