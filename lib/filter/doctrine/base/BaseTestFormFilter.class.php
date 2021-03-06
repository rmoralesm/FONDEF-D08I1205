<?php

/**
 * Test filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTestFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'texto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idtest'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'texto'   => new sfValidatorPass(array('required' => false)),
      'idtest'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('test_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Test';
  }

  public function getFields()
  {
    return array(
      'prueba1' => 'Number',
      'texto'   => 'Text',
      'idtest'  => 'Number',
    );
  }
}
