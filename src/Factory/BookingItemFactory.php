<?php

namespace App\Factory;

use App\Entity\BookingItem;
use App\Repository\BookingItemRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<BookingItem>
 *
 * @method static BookingItem|Proxy createOne(array $attributes = [])
 * @method static BookingItem[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static BookingItem|Proxy find(object|array|mixed $criteria)
 * @method static BookingItem|Proxy findOrCreate(array $attributes)
 * @method static BookingItem|Proxy first(string $sortedField = 'id')
 * @method static BookingItem|Proxy last(string $sortedField = 'id')
 * @method static BookingItem|Proxy random(array $attributes = [])
 * @method static BookingItem|Proxy randomOrCreate(array $attributes = [])
 * @method static BookingItem[]|Proxy[] all()
 * @method static BookingItem[]|Proxy[] findBy(array $attributes)
 * @method static BookingItem[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static BookingItem[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static BookingItemRepository|RepositoryProxy repository()
 * @method BookingItem|Proxy create(array|callable $attributes = [])
 */
final class BookingItemFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'quantity' => self::faker()->randomNumber(),
            'unit_price' => self::faker()->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 3000),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(BookingItem $bookingItem): void {})
        ;
    }

    protected static function getClass(): string
    {
        return BookingItem::class;
    }
}
