<?php

namespace AWstreams\Marketplace\Model\Source;

class SellerApproved implements \Magento\Framework\Option\ArrayInterface
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            '0' => 'Seller Aprroved Notification Mail (Default)',
            
        ];
    }
}