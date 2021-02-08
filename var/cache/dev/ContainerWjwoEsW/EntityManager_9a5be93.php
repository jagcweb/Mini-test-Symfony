<?php

namespace ContainerWjwoEsW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder95583 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04daf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62939 = [
        
    ];

    public function getConnection()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getConnection', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getMetadataFactory', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getExpressionBuilder', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'beginTransaction', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getCache', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'transactional', array('func' => $func), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->transactional($func);
    }

    public function commit()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'commit', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->commit();
    }

    public function rollback()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'rollback', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getClassMetadata', array('className' => $className), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'createQuery', array('dql' => $dql), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'createNamedQuery', array('name' => $name), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'createQueryBuilder', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'flush', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'clear', array('entityName' => $entityName), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->clear($entityName);
    }

    public function close()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'close', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->close();
    }

    public function persist($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'persist', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'remove', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'refresh', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'detach', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'merge', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'contains', array('entity' => $entity), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getEventManager', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getConfiguration', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'isOpen', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getUnitOfWork', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getProxyFactory', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'initializeObject', array('obj' => $obj), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'getFilters', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'isFiltersStateClean', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'hasFilters', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return $this->valueHolder95583->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer04daf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder95583) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder95583 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder95583->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__get', ['name' => $name], $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        if (isset(self::$publicProperties62939[$name])) {
            return $this->valueHolder95583->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95583;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder95583;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95583;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder95583;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__isset', array('name' => $name), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95583;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder95583;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__unset', array('name' => $name), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95583;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder95583;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__clone', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        $this->valueHolder95583 = clone $this->valueHolder95583;
    }

    public function __sleep()
    {
        $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, '__sleep', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;

        return array('valueHolder95583');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04daf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04daf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04daf && ($this->initializer04daf->__invoke($valueHolder95583, $this, 'initializeProxy', array(), $this->initializer04daf) || 1) && $this->valueHolder95583 = $valueHolder95583;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder95583;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder95583;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
