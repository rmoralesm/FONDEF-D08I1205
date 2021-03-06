<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EdaPreguntas', 'doctrine');

/**
 * BaseEdaPreguntas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pregunta_eda
 * @property integer $num_pregunta
 * @property string $texto
 * @property integer $es_requerido
 * 
 * @method integer      getIdPreguntaEda()   Returns the current record's "id_pregunta_eda" value
 * @method integer      getNumPregunta()     Returns the current record's "num_pregunta" value
 * @method string       getTexto()           Returns the current record's "texto" value
 * @method integer      getEsRequerido()     Returns the current record's "es_requerido" value
 * @method EdaPreguntas setIdPreguntaEda()   Sets the current record's "id_pregunta_eda" value
 * @method EdaPreguntas setNumPregunta()     Sets the current record's "num_pregunta" value
 * @method EdaPreguntas setTexto()           Sets the current record's "texto" value
 * @method EdaPreguntas setEsRequerido()     Sets the current record's "es_requerido" value
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEdaPreguntas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('eda_preguntas');
        $this->hasColumn('id_pregunta_eda', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('num_pregunta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('texto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('es_requerido', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}