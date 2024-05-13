<?php

namespace customiesdevs\customies\item\component;

final class DamageComponent implements ItemComponent
{
    private int $damage;
    public function __construct(int $damage) {
        $this->damage = $damage;
    }

    public function getName(): string {
        return "damage";
    }

    public function getValue(): int {
        return $this->damage;
    }

    public function isProperty(): bool {
        return true;
    }
}
