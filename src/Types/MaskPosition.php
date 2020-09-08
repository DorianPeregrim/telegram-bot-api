<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class MaskPosition
 *
 * @package TelegramBotApi\Types
 */
class MaskPosition
{
    /**
     * @var string
     */
    private string $point;

    /**
     * @var float
     */
    private float $xShift;

    /**
     * @var float
     */
    private float $yShift;

    /**
     * @var float
     */
    private float $scale;

    /**
     * @return string
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * @param string $point
     *
     * @return MaskPosition
     */
    public function setPoint(string $point): MaskPosition
    {
        $this->point = $point;

        return $this;
    }

    /**
     * @return float
     */
    public function getXShift(): float
    {
        return $this->xShift;
    }

    /**
     * @param float $xShift
     *
     * @return MaskPosition
     */
    public function setXShift(float $xShift): MaskPosition
    {
        $this->xShift = $xShift;

        return $this;
    }

    /**
     * @return float
     */
    public function getYShift(): float
    {
        return $this->yShift;
    }

    /**
     * @param float $yShift
     *
     * @return MaskPosition
     */
    public function setYShift(float $yShift): MaskPosition
    {
        $this->yShift = $yShift;

        return $this;
    }

    /**
     * @return float
     */
    public function getScale(): float
    {
        return $this->scale;
    }

    /**
     * @param float $scale
     *
     * @return MaskPosition
     */
    public function setScale(float $scale): MaskPosition
    {
        $this->scale = $scale;

        return $this;
    }
}
