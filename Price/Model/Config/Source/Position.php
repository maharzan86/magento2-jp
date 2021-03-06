<?php
namespace MagentoJapan\Price\Model\Config\Source;


class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Retrieve possible customer address types
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            16 => __('Right and use Kanji'),
            32 => __('Left and use symbol')
        ];
    }
}