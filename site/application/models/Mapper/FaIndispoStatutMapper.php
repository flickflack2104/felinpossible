<?php

/**
 * FaStatut data mapper
 *
 * Implements the Data Mapper design pattern:
 * http://www.martinfowler.com/eaaCatalog/dataMapper.html
 *
 * @package    FelinPossible
 * @subpackage Model
 */
class FP_Model_Mapper_FaIndispoStatutMapper extends FP_Model_Mapper_CommonMapper {
	protected $idClassName = 'FaIndispoStatut';

	protected $mappingDbToModel = array(
	                 'id' => 'id',
                     'nom' => 'libelle');

	/**
	 * (non-PHPdoc)
	 * @see site/application/models/Mapper/FP_Model_Mapper_CommonMapper#buildArrayForForm($idColumnName, $valueColumnName)
	 */
	public function buildArrayForForm($idColumnName = 'id', $valueColumnName = 'nom') {
		return parent::buildArrayForForm($idColumnName, $valueColumnName);
	}
}