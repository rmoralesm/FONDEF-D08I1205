<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SqifaPreguntas', 'doctrine');

/**
 * BaseSqifaPreguntas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pregunta_sqifa
 * @property integer $num_pregunta
 * @property string $texto
 * @property integer $es_requerido
 * @property integer $bloque_num
 * @property Doctrine_Collection $SqifaRespuestas
 * 
 * @method integer             getIdPreguntaSqifa()   Returns the current record's "id_pregunta_sqifa" value
 * @method integer             getNumPregunta()       Returns the current record's "num_pregunta" value
 * @method string              getTexto()             Returns the current record's "texto" value
 * @method integer             getEsRequerido()       Returns the current record's "es_requerido" value
 * @method integer             getBloqueNum()         Returns the current record's "bloque_num" value
 * @method Doctrine_Collection getSqifaRespuestas()   Returns the current record's "SqifaRespuestas" collection
 * @method SqifaPreguntas      setIdPreguntaSqifa()   Sets the current record's "id_pregunta_sqifa" value
 * @method SqifaPreguntas      setNumPregunta()       Sets the current record's "num_pregunta" value
 * @method SqifaPreguntas      setTexto()             Sets the current record's "texto" value
 * @method SqifaPreguntas      setEsRequerido()       Sets the current record's "es_requerido" value
 * @method SqifaPreguntas      setBloqueNum()         Sets the current record's "bloque_num" value
 * @method SqifaPreguntas      setSqifaRespuestas()   Sets the current record's "SqifaRespuestas" collection
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSqifaPreguntas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sqifa_preguntas');
        $this->hasColumn('id_pregunta_sqifa', 'integer', 4, array(
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
        $this->hasMany('SqifaRespuestas', array(
             'local' => 'id_pregunta_sqifa',
             'foreign' => 'id_pregunta_sqifa'));
    }
}