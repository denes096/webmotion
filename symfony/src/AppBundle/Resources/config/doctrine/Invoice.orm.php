<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\InvoiceRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'type',
   'fieldName' => 'type',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'name',
   'fieldName' => 'name',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'phone_number',
   'fieldName' => 'phoneNumber',
   'type' => 'integer',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'tax_number',
   'fieldName' => 'taxNumber',
   'type' => 'string',
   'length' => 255,
   'nullable' => true,
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'country',
   'fieldName' => 'country',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'dir_number',
   'fieldName' => 'dirNumber',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'city',
   'fieldName' => 'city',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'street_and_number',
   'fieldName' => 'streetAndNumber',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);