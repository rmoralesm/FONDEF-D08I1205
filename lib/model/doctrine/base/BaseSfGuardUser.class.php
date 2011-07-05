<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SfGuardUser', 'doctrine');

/**
 * BaseSfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $algorithm
 * @property string $salt
 * @property string $password
 * @property integer $is_active
 * @property integer $is_super_admin
 * @property timestamp $last_login
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $Cacsa2Respuestas
 * @property Doctrine_Collection $Cacsa3Respuestas
 * @property Doctrine_Collection $CaieRespuestas
 * @property Doctrine_Collection $CsveRespuestas
 * @property Doctrine_Collection $DepAdoRespuestas
 * @property Doctrine_Collection $EgedRespuestas
 * @property Doctrine_Collection $Encuestado
 * @property Doctrine_Collection $Encuestado_2
 * @property Doctrine_Collection $EstadosInstrumentos
 * @property Doctrine_Collection $FerrRespuestas
 * @property Doctrine_Collection $IrncRespuestas
 * @property Doctrine_Collection $IrncRespuestas_2
 * @property Doctrine_Collection $JirRespuestas
 * @property Doctrine_Collection $MaciRespuestas
 * @property Doctrine_Collection $SfGuardForgotPassword
 * @property Doctrine_Collection $SfGuardRememberKey
 * @property Doctrine_Collection $SfGuardUserGroup
 * @property Doctrine_Collection $SfGuardUserPermission
 * @property Doctrine_Collection $SqifaRespuestas
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getFirstName()             Returns the current record's "first_name" value
 * @method string              getLastName()              Returns the current record's "last_name" value
 * @method string              getEmailAddress()          Returns the current record's "email_address" value
 * @method string              getUsername()              Returns the current record's "username" value
 * @method string              getAlgorithm()             Returns the current record's "algorithm" value
 * @method string              getSalt()                  Returns the current record's "salt" value
 * @method string              getPassword()              Returns the current record's "password" value
 * @method integer             getIsActive()              Returns the current record's "is_active" value
 * @method integer             getIsSuperAdmin()          Returns the current record's "is_super_admin" value
 * @method timestamp           getLastLogin()             Returns the current record's "last_login" value
 * @method timestamp           getCreatedAt()             Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()             Returns the current record's "updated_at" value
 * @method Doctrine_Collection getCacsa2Respuestas()      Returns the current record's "Cacsa2Respuestas" collection
 * @method Doctrine_Collection getCacsa3Respuestas()      Returns the current record's "Cacsa3Respuestas" collection
 * @method Doctrine_Collection getCaieRespuestas()        Returns the current record's "CaieRespuestas" collection
 * @method Doctrine_Collection getCsveRespuestas()        Returns the current record's "CsveRespuestas" collection
 * @method Doctrine_Collection getDepAdoRespuestas()      Returns the current record's "DepAdoRespuestas" collection
 * @method Doctrine_Collection getEgedRespuestas()        Returns the current record's "EgedRespuestas" collection
 * @method Doctrine_Collection getEncuestado()            Returns the current record's "Encuestado" collection
 * @method Doctrine_Collection getEncuestado2()           Returns the current record's "Encuestado_2" collection
 * @method Doctrine_Collection getEstadosInstrumentos()   Returns the current record's "EstadosInstrumentos" collection
 * @method Doctrine_Collection getFerrRespuestas()        Returns the current record's "FerrRespuestas" collection
 * @method Doctrine_Collection getIrncRespuestas()        Returns the current record's "IrncRespuestas" collection
 * @method Doctrine_Collection getIrncRespuestas2()       Returns the current record's "IrncRespuestas_2" collection
 * @method Doctrine_Collection getJirRespuestas()         Returns the current record's "JirRespuestas" collection
 * @method Doctrine_Collection getMaciRespuestas()        Returns the current record's "MaciRespuestas" collection
 * @method Doctrine_Collection getSfGuardForgotPassword() Returns the current record's "SfGuardForgotPassword" collection
 * @method Doctrine_Collection getSfGuardRememberKey()    Returns the current record's "SfGuardRememberKey" collection
 * @method Doctrine_Collection getSfGuardUserGroup()      Returns the current record's "SfGuardUserGroup" collection
 * @method Doctrine_Collection getSfGuardUserPermission() Returns the current record's "SfGuardUserPermission" collection
 * @method Doctrine_Collection getSqifaRespuestas()       Returns the current record's "SqifaRespuestas" collection
 * @method SfGuardUser         setId()                    Sets the current record's "id" value
 * @method SfGuardUser         setFirstName()             Sets the current record's "first_name" value
 * @method SfGuardUser         setLastName()              Sets the current record's "last_name" value
 * @method SfGuardUser         setEmailAddress()          Sets the current record's "email_address" value
 * @method SfGuardUser         setUsername()              Sets the current record's "username" value
 * @method SfGuardUser         setAlgorithm()             Sets the current record's "algorithm" value
 * @method SfGuardUser         setSalt()                  Sets the current record's "salt" value
 * @method SfGuardUser         setPassword()              Sets the current record's "password" value
 * @method SfGuardUser         setIsActive()              Sets the current record's "is_active" value
 * @method SfGuardUser         setIsSuperAdmin()          Sets the current record's "is_super_admin" value
 * @method SfGuardUser         setLastLogin()             Sets the current record's "last_login" value
 * @method SfGuardUser         setCreatedAt()             Sets the current record's "created_at" value
 * @method SfGuardUser         setUpdatedAt()             Sets the current record's "updated_at" value
 * @method SfGuardUser         setCacsa2Respuestas()      Sets the current record's "Cacsa2Respuestas" collection
 * @method SfGuardUser         setCacsa3Respuestas()      Sets the current record's "Cacsa3Respuestas" collection
 * @method SfGuardUser         setCaieRespuestas()        Sets the current record's "CaieRespuestas" collection
 * @method SfGuardUser         setCsveRespuestas()        Sets the current record's "CsveRespuestas" collection
 * @method SfGuardUser         setDepAdoRespuestas()      Sets the current record's "DepAdoRespuestas" collection
 * @method SfGuardUser         setEgedRespuestas()        Sets the current record's "EgedRespuestas" collection
 * @method SfGuardUser         setEncuestado()            Sets the current record's "Encuestado" collection
 * @method SfGuardUser         setEncuestado2()           Sets the current record's "Encuestado_2" collection
 * @method SfGuardUser         setEstadosInstrumentos()   Sets the current record's "EstadosInstrumentos" collection
 * @method SfGuardUser         setFerrRespuestas()        Sets the current record's "FerrRespuestas" collection
 * @method SfGuardUser         setIrncRespuestas()        Sets the current record's "IrncRespuestas" collection
 * @method SfGuardUser         setIrncRespuestas2()       Sets the current record's "IrncRespuestas_2" collection
 * @method SfGuardUser         setJirRespuestas()         Sets the current record's "JirRespuestas" collection
 * @method SfGuardUser         setMaciRespuestas()        Sets the current record's "MaciRespuestas" collection
 * @method SfGuardUser         setSfGuardForgotPassword() Sets the current record's "SfGuardForgotPassword" collection
 * @method SfGuardUser         setSfGuardRememberKey()    Sets the current record's "SfGuardRememberKey" collection
 * @method SfGuardUser         setSfGuardUserGroup()      Sets the current record's "SfGuardUserGroup" collection
 * @method SfGuardUser         setSfGuardUserPermission() Sets the current record's "SfGuardUserPermission" collection
 * @method SfGuardUser         setSqifaRespuestas()       Sets the current record's "SqifaRespuestas" collection
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSfGuardUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('email_address', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('username', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('algorithm', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'sha1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('salt', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('password', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('is_active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_super_admin', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('last_login', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Cacsa2Respuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('Cacsa3Respuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('CaieRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('CsveRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('DepAdoRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('EgedRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('Encuestado', array(
             'local' => 'id',
             'foreign' => 'id_user_responsable_principal'));

        $this->hasMany('Encuestado as Encuestado_2', array(
             'local' => 'id',
             'foreign' => 'id_user_responsable_secundario'));

        $this->hasMany('EstadosInstrumentos', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('FerrRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('IrncRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('IrncRespuestas as IrncRespuestas_2', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('JirRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('MaciRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));

        $this->hasMany('SfGuardForgotPassword', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SfGuardRememberKey', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SfGuardUserGroup', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SfGuardUserPermission', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SqifaRespuestas', array(
             'local' => 'id',
             'foreign' => 'id_user'));
    }
}