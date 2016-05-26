<?php

namespace Doctrine\Tests\Models\DDC964;

/**
 * @Entity
 * @AttributeOverrides({
 *      @AttributeOverride(name="id",
 *          column=@Column(name="guest_id")
 *      ),
 *      @AttributeOverride(name="name",
 *          column=@Column(
 *              name     = "guest_name",
 *              nullable = false,
 *              unique   = true,
                length   = 240
 *          )
 *      )
 * })
 */
class DDC964Guest extends DDC964User
{
    public static function loadMetadata(\Doctrine\ORM\Mapping\ClassMetadata $metadata)
    {
        $metadata->setAttributeOverride('id', array(
            'columnName' => 'guest_id',
        ));

        $metadata->setAttributeOverride('name',array(
            'columnName'    => 'guest_name',
            'nullable'      => false,
            'unique'        => true,
            'length'        => 240,
        ));
    }
}