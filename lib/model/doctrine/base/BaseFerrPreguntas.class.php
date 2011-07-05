<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('FerrPreguntas', 'doctrine');

/**
 * BaseFerrPreguntas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pregunta_irnc
 * @property string $num_pregunta
 * @property string $texto
 * @property integer $es_requerido
 * @property string $bloque_irnc
 * @property integer $bloque_num
 * 
 * @method integer       getIdPreguntaIrnc()   Returns the current record's "id_pregunta_irnc" value
 * @method string        getNumPregunta()      Returns the current record's "num_pregunta" value
 * @method string        getTexto()            Returns the current record's "texto" value
 * @method integer       getEsRequerido()      Returns the current record's "es_requerido" value
 * @method string        getBloqueIrnc()       Returns the current record's "bloque_irnc" value
 * @method integer       getBloqueNum()        Returns the current record's "bloque_num" value
 * @method FerrPreguntas setIdPreguntaIrnc()   Sets the current record's "id_pregunta_irnc" value
 * @method FerrPreguntas setNumPregunta()      Sets the current record's "num_pregunta" value
 * @method FerrPreguntas setTexto()            Sets the current record's "texto" value
 * @method FerrPreguntas setEsRequerido()      Sets the current record's "es_requerido" value
 * @method FerrPreguntas setBloqueIrnc()       Sets the current record's "bloque_irnc" value
 * @method FerrPreguntas setBloqueNum()        Sets the current record's "bloque_num" value
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFerrPreguntas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ferr_preguntas');
        $this->hasColumn('id_pregunta_irnc', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('num_pregunta', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('bloque_irnc', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('bloque_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}